<!DOCTYPE html>
<html>
	<head>
		<title>Edit Distance</title>
		<link href="./styles.css" media="screen" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<h1 style="color:SaddleBrown;"> Distance Calculator </h1>
		<p>Distance between two strings(a,b) is the number of operations needed to transform string 
		a to string b.
		</p>
		<br>
		<p>you can calculate this distance usig two methodes:
		</p>
		<br>
		<p>1. Hamming distance : where you can only use substitution method.
		<br>
		<br>
		2. Levenshtien distance : where you can use deletion, insretion and substitution.
		</p>
		<br>
	
		<div style="width: 650px;">

			<div style="float:left; margin-left: 350px;">
				<form action="lev_inputs.php">
					<input type="submit" value ="Levenshtien Distance" />
				</form>
			</div>

			<div style="float:right;   margin-left: 20px;">
				<form action = "ham_inputs.php">
					<input type="submit" value = "Hamming Distance"/>
			    </form>
			</div>
		    <div></div>

		</div>
	</body>
</html>
