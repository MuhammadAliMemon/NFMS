<?php
	session_start();
	if(!isset($_SESSION['login_user'])) {
		header("location: login.php");
	}
  
	require 'controller/IngredientsController.php';
	require 'connection.php';

	$ingredients = getIngredients($DBConnect);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nabati Foods - Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="dist/css/jumbotron.css" rel="stylesheet">
    <link href="dist/css/custom-panel.css" rel="stylesheet">
	<link href="dist/css/custom-ingredients.css" rel="stylesheet">
	
	<!-- Font awesome CDN link-->
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
	
	<!-- JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="dist/js/custom-ingredients.js"></script>
	
	
  </head>

  <body>
    <?php include 'components/sidebar.php'?>
    <div class="container">
      <?php include 'components/header.php'?>
      <div class="jumbotron">
		<div class="row" id="table-upper-heading">
			<span class="col-xs-6">
				<h3 class="float-left">Ingredients</h3>
			</span>
			<span class="col-xs-6">
				<h3 class="float-right"><a href="#insert" class="insert-modal"><i class="fa fa-plus-circle green-color"></i></a></h3>
			</span>
		</div>
        <div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Manipulation</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$count=0;
						if($ingredients->num_rows >0) {
							while($row = $ingredients->fetch_assoc()) {
								$count++;
								$ingredientId = $row['id'];
								echo "<tr>
									<th scope='row'>$count</th>
									<td class='text-align-left'>&nbsp;".$row['name']."</td>
									<td class='text-align-left'>&nbsp;".$row['sq']."</td>
									<td class='text-align-left'>&nbsp;
										<i class='fa fa-pencil-square-o green-color'></i>&nbsp;
										<a "./*onclick=\"removeIngredientsById($DBConnect,$ingredientId);\*/"><i class='fa fa-minus-circle red-color'></i></a>&nbsp;
										<a href='#view' class='insert-modal' onclick='"./*.$ingredientRow = getIngredientsById($DBConnect,$row['id'])*/"'><i class='fa fa-eye-slash blue-color'></i></a>
									</td>
								</tr>";
							}
						}
					?>
				</tbody>
			</table>

		</div>
      </div>

	  
	  <!-- Modal: Insert -->
	  <div class="modal fade" id="insert" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Insert Ingredient</h4>
			</div>
			<form action="mediator/IngredientsMediator.php" method="post">
				<input type="hidden" name="action" value="insert"/>
				<div class="modal-body">
					<label>Name*: <input type="text" name="txtIngredientName" required /></label>
					<label>Type: <input type="text" name="txtIngredientType" /></label>
					<label>Lot Number*: <input type="text" name="txtLotNumber" required /></label>
					<label>Quantity*: <input type="number" min=1 name="txtQuantity" required /></label>
					<label>Receiving Date*: <input type="date" name="txtReceivingDate" required/></label>
					<label>Expiry Date*: <input type="date" name="txtExpiryDate" required/></label>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Insert</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		  </div>
		  
		</div>
	  </div>
		
		<!-- Modal: View -->
	  <div class="modal fade" id="view" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">View Ingredient </h4>
			</div>
			<form action="mediator/IngredientsMediator.php" method="post">
				<input type="hidden" name="action" value="insert"/>
				<div class="modal-body">
					<label>Name*: <input type="text" name="txtIngredientName" required /></label>
					<label>Type: <input type="text" name="txtIngredientType" /></label>
					<label>Lot Number*: <input type="text" name="txtLotNumber" required /></label>
					<label>Quantity*: <input type="number" min=1 name="txtQuantity" required /></label>
					<label>Receiving Date*: <input type="date" name="txtReceivingDate" required/></label>
					<label>Expiry Date*: <input type="date" name="txtExpiryDate" required/></label>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Insert</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		  </div>
		  
		</div>
	  </div>
	  
      <footer class="footer">
        <p>&copy; Nabati Foods Management System.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="dist/js/custom-panel.js"></script>
  </body>
</html>
