<?php
	session_start();
	require '../connection.php';
	require '../controller/IngredientsController.php';
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if($_POST["action"] == "insert") {
			$name = $_POST["txtIngredientName"];
			$type = $_POST["txtIngredientType"];
			$lotNumber = $_POST["txtLotNumber"];
			$quantity = $_POST["txtQuantity"];
			$receivingDate = $_POST["txtReceivingDate"];
			$expiryDate = $_POST["txtExpiryDate"];
			
			$createdDate = date("Y-m-d H:i:s");
			$createdBy = $_SESSION['login_id'];
			
			addIngredient($DBConnect, $name, $type, $lotNumber, $quantity, $receivingDate, $expiryDate,  $createdDate, $createdBy);
		}
	}
?>