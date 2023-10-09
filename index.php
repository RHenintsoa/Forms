
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

	<title>The best</title>
</head>

<body>
	<!--header-->
	<?php include('header.php') ?>
	<!--end header-->
	<div class="container content">
		<div class="row">
			<div class="col-lg-6 offset-lg-4">
			<h2> Formulaire d'inscription</h2>
			</div>
		</div>
		<div class="row test">
			<div class="col-lg-6">
				<img src="./assets/img/img2.jpg" alt="" class="img-fluid" id="picture">
			</div>
			<div class="col-lg-4 offset-lg-1"  id="form">
				
				<form action="./list.php" method="POST">
					<div class="form-group">
						<label for="inputName">Nom : </label>
						<input type="text"id="inputName" name="name" class="form-control">
					</div>	
					<div class="form-group">
						<label for="inputFirstname"> Prénom : </label>
						<input type="text"id="inputFirstname" name="firstname" class="form-control">
					</div>
					<div class="form-group">
						<label for="inputBirth"> Date de naissance : </label>
						<input type="date"id="inputBirth" name="birth" class="form-control">
					</div>
					<div class="form-group">
						<label for="inputTown"> Votre ville actuelle : </label>
							<select id="inputTown" name= "town" class="form-control" > 
								<option value=""></option>
								<option value="Antananarivo">Antananarivo</option>
								<option value="Mahajanga">Mahajanga</option>
								<option value="Toamasina">Toamasina</option>
								<option value="Antsiranana">Antsiranana</option>
								<option value="Fianarantsoa">Fianarantsoa</option>
							</select>
					</div>
					<div class="form-group">
						<p> Veuillez indiquer votre sexe</p>
							<div class="form-check">
								<input type="radio" id="choiceFemale" name="gender" value="Femme" class="form-check-input">
								<label for="choiceFemale">Femme</label>
							</div>
							<div class="form-check">
								<input type="radio" id="choiceMale" name="gender" value="Homme" class="form-check-input">
								<label for="choiceMale">Homme</label>
							</div>
					</div>
					<div class="form-group">
						
						<!-- <a href="list.php" type="submit"class="btn btn-info" name="btn_submit"> VALIDER</a> -->
						<input type="submit" class="btn btn-info" name="btn_submit" value="VALIDER">

					</div>

				</form>
				

			</div>
		</div>
	</div>
	
<!-- script-->
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/index.js"></script>
	<script type="text/javascript" src="./assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>