<?php
	//include levenshtien class
	include 'leven.php';  
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Levenshtien Distance</title>
		<link href="./styles.css" media="screen" rel="stylesheet" type="text/css" />

	</head>

	<body>
		      
		<h1 style="color:SaddleBrown;"> Levenshtien  Distance </h1>
		<br>
		<br>
		<!––	create a form to get the value of the strings from the user, and do the calcultion on submit––>
		<form action="" method="get">
			<input placeholder='first string' type='text' name="lev_str1" />
			<input placeholder= 'second sring' type ='text' name ="lev_str2" />
			<br>
			<br>
			<input type="submit" name="levenshtien"/>
		</form>

		<br>
		<br>

		<?php
			if( isset($_GET['levenshtien']) ){
				//get the value of the strings from the input text , after checking if they are set
				$str1 = isset($_GET['lev_str1']) ? $_GET['lev_str1'] : ''; 
				$str2 = isset($_GET['lev_str2']) ? $_GET['lev_str2'] : ''; 
				//pass the strings to the helper function in the class
				$distance = Levenshtein::helper($str1, $str2); 
	       		echo " <br> minimum distance neede is : " .$distance;	
			}
		?>
	</body>
</html>
