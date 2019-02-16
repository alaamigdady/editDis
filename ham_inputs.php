<?php
	//include hamming class
	include 'hamming.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hamming Distance</title>
		<link href="./styles.css" media="screen" rel="stylesheet" type="text/css" />

	</head>

	<body>
		      

		<h1 style="color:SaddleBrown;"> Hamming  Distsance </h1>
		<br>
		<br>
		<!––	create a form to get the value of the strings from the user, and do the calcultion on submit ––>
		<form action="" method="get">
			<input placeholder='first string' type='text' name="ham_str1" />
			<input placeholder= 'second sring' type ='text' name ="ham_str2" />
			<br>
			<br>
			<input type="submit" name="hamming"/>
		</form>

		<?php
			
			if( isset($_GET['hamming']) ){
			   //get the value of the strings from the input text, after checking if they are set

				$str1 = isset($_GET['ham_str1']) ? $_GET['ham_str1'] : '';
				$str2 = isset($_GET['ham_str2']) ? $_GET['ham_str2'] : '';
				//pass the strings to the helper function in the class
				$distance = Hamming::helper($str1, $str2);
				echo " <br> minimum distance neede is : " .$distance;
			}
		?>
	</body>
</html>



