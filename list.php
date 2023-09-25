<?php require('index.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./assets/img/apple-touch-icon.png">
	<!-- css-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	
	<!-- bootstrap icons files-->
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap-icons/bootstrap-icons.css">

	<title>List</title>
</head>

<body>
	<!--header-->
	<?php include('header.php') ?>
	<!--end header-->
	<div class="container content">
		<div class="row">
			<div class="col-12 text-center">
				<h2> Vos informations</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-xs-12 offset-lg-2 offset-md-2">
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Nom :</td>
							<td> <?php echo $person["name"] ?> </td>
						</tr>
						<tr>
							<td>Prénom :</td>
							<td> <?php echo $person["firstname"] ?> </td>
						</tr>
						<tr>
							<td>Date de naissance :</td>
							<td> <?php echo $person["birth"] ?></td>
						</tr>
						<tr>
							<td>Ville actuelle :</td>
							<td> <?php echo $person["town"] ?> </td>
						</tr>
						<tr>
							<td>Sexe :</td>
							<td> <?php echo $person["gender"] ?> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	
<!-- script-->
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/index.js"></script>
	<script type="text/javascript" src="./assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>