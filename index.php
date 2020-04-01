<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zafiro Dev</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" method="GET">
					<span class="contact2-form-title">
						Arrays PHP
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" type="submit">
								Send Your Data
							</button>
						</div>
					</div>
					<br/>
					<div>

					<?php

				if(isset($_GET['name']) and isset($_GET['email'])){
					
					$input1 = $_GET['name'];
					echo "Name: " .$input1;
					echo "<br>";

					$input2 =$_GET['email'];
					echo "Email: " .$input2;


				}else{
						echo "No hay datos";
				}

				?>
				<br/><hr>
				<?php

				$variable = "Array Data";

				$array["variable1"] = $variable;
				$array["variable2"] = $input1;
				$array["variable3"]	= "Segundo Nombre";

				echo 'Var 2:'.$array["variable2"];
				echo "<br><hr>";

				$array2 = array('var1' => 'Uno', 'var2' => 'Dos', 'var3' => $variable);
				echo $array2["var3"];
				echo "<br><hr>";

				var_dump($array2);

				$animales = ['dog','cat','bird','fish'];
				$animales2 = array('lion','tiger','cow','pig');

				$i=0;
				while($i<=3){
					echo '<p>My Animal Favorite is:'.$animales[$i].'</p><hr>
						<p>My Animal Favorite is:'.$animales2[$i].'</p><hr>';
						$i++;
				}



				?>
					</div>
				</form>
			</div>
		
		</div>
	</div>

	



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
