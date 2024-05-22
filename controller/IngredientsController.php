<?php
	
	function addIngredient($con, $name, $type, $lotNumber, $quantity, $receivingDate, $expiryDate,  $createdDate, $createdBy) {
		$result = getIngredientByName($con, $name);
		
		if($result->num_rows == 0) {
			$res = insertIngredient($con, $name, $type, $createdDate, $createdBy);
			if($res == false) {
				header("Location: ../ingredients.php");
			}
		}
		
		$res = insertStock($con, $lotNumber, $quantity, $receivingDate, $expiryDate,  $createdDate, $createdBy);
		
		if($res == true) {
			$result = getIngredientByName($con, $name);
			while($row = $result->fetch_assoc()) {
				$ingredientId = $row["id"];
			}
			
			$result = getStockByLotNumber($con, $lotNumber);
			if($result !=null) {
				while($row = $result->fetch_assoc()) {
					$stockId = $row["id"];
				}
				
				$rst = insertIngredientStock($con, $ingredientId, $stockId,  $createdDate, $createdBy);
				if($rst == true) {
					header("Location: ../ingredients.php");
				} else {
					echo "Something went wrong.. !! Please try again.";
				}
			}
		}
	}
	
	function insertIngredient($con, $name, $type, $createdDate, $createdBy) {
		$sql = "INSERT INTO ingredients (name, type, created_by, created_date) VALUES ('$name', '$type', '$createdDate', '$createdBy')";
		
		if ($con->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	
	function insertStock($con, $lotNumber, $quantity, $receivingDate, $expiryDate,  $createdDate, $createdBy) {
		$sql = "INSERT INTO stock (lot_number, quantity, receiving_date, expiry_date, created_by, created_date) VALUES ('$lotNumber', '$quantity', '$receivingDate', '$expiryDate', '$createdBy',  '$createdDate')";
		
		if ($con->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	
	function insertIngredientStock($con, $ingredientId, $stockId,  $createdDate, $createdBy) {
		$sql = "INSERT INTO `ingredients_stock`	(`ingredients_id`, `stock_id`, `created_by`, `created_date`) VALUES ('$ingredientId', '$stockId',  '$createdDate', '$createdBy')";
	
		if ($con->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	
	function getIngredients($con) {
		$sql = "SELECT *, SUM(quantity) AS sq FROM `ingredients` i INNER JOIN `ingredients_stock` ist ON i.id = ist.ingredients_id INNER JOIN `stock` s ON s.id = ist.stock_id WHERE i.active=1 AND s.active=1 AND ist.active=1 GROUP BY i.name";
		
		//$sql = "SELECT * FROM `ingredients` WHERE `active`=1";
		
		$result = mysqli_query($con, $sql);
       
        if($result->num_rows >0) {
            return $result; 
        }
        else {
            return null;
        }
	   return $result;
	}
	
	function getIngredientByName($con, $name) {
		$sql = "SELECT * FROM `ingredients` WHERE `name`='$name'";
		$result = mysqli_query($con, $sql);
		
        if($result->num_rows >0) {
            return $result; 
        }
        else {
            return $result;
        }
		return $result;
	}
	
	function getStockByLotNumber($con, $lotNumber) {
		$sql = "SELECT * FROM `stock` WHERE `lot_number`='$lotNumber'";
		$result = mysqli_query($con, $sql);
       
        if($result->num_rows >0) {
            return $result; 
        }
        else {
            return null;
        }
		return $result;
	}
	
	function getIngredientsById($con,$id) {
		$sql = "SELECT * FROM `ingredients` WHERE `id`='$id'";
		$result = mysqli_query($con, $sql);
       
        if($result->num_rows >0) {
            while ($row = $result->fetch_assoc()) {
				return $row;
			}
        }
        else {
            return null;
        }
		return $result;
	}
	
	function removeIngredientsById($con,$id) {
		$query1 = "UPDATE ingredients_stock SET `active`=0 WHERE ingredients_id='$id'";
		
		if ($con->query($query1) === TRUE) {
			$sql = "UPDATE ingredients SET `active`=0 WHERE id='$id'";
       
			if ($con->query($sql) === TRUE) {
				header("Location: ../ingredients.php");
			} else {
				echo "Error deleting record: " . $con->error;
			}
		} else {
			echo "Error deleting record: " . $con->error;
		}
	}
?>