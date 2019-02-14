
<?php
	//include both levenshtien and hamming classes
	include 'leven.php';  
	include 'hamming.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Distance</title>
	</head>

	<style>
		body{
			background-color:LightSlateGray;
			height:100%;
			display:table-cell; 
			text-align:center; 
			vertical-align:middle;
		}
	 html{
		 height:100%;
		 display:table; 
		 width:100%;
		}
	</style>

	<body>
		      
		<h3> Levenshtien  Distance </h3>
		<br>
		<br>
		<!––	create a form to get the value of the strings from the user, and do the calcultion on submit
			 ––>
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

		<h3> Hamming  Distsance </h3>
		<br>
		<br>
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






