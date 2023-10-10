<?php 
		if (isset($_POST["btn_submit"])){
			$person =[
				"name" => $_POST["name"],
				"firstname" => $_POST["firstname"],
				"birth" => $_POST["birth"],
				"town" => $_POST["town"],
				"gender" => $_POST["gender"]
			];
			$error ="";
?>

<?php 
		// 	//Vérification date de naissance
		// 	$birth = $person['birth'];
		// 	if (!empty($birth) && strtotime($birth) == true){
		// 		echo $birth;
		// 	}
		// 	else{
		// 		echo "entrer une date valide";
		// 	}
		// 	die();
		// }
?>
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
								<?php		
									//Vérification nom et prénom
									$name = $person['name'];
									$firstname = $person['firstname'];
										if (!empty($name) && preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/', $name) && !empty($firstname) && preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/', $firstname)) {
								?>	
							<td> <?= isset($_POST['name'])?$_POST['name']:"" ?> </td>
						<tr>
							<td>Prénom :</td>
							<td> <?=  $_POST["firstname"]??"" ?> </td>
						</tr>
								<?php
								
										} else {
												echo "Le nom ne doit pas contenir des caractères spéciaux tels * - / !";
												die();
											}
										}
								?>
							
						</tr>
						<tr>
						<tr>
							<td>Date de naissance :</td>
							<td> <?=  $_POST["birth"]??"" ?> </td>
						</tr>
						<tr>
							<td>Ville actuelle :</td>
							<td> <?= isset($_POST['town'])? $_POST['town']:""?> </td>
						</tr>
						<tr>
							<td>Sexe :</td>
							<td> <?= isset($_POST['gender'])? $_POST['gender'] :""?> </td>
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