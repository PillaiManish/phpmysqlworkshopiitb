<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method = "GET" action = "q6_1_special_variables_html.php">
		<input type = 'text' name = 'side1' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side2' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side3' placeholder="Enter Side">
		<br>
		<input type="submit" name="submit">
		<br>

	</form>

	<?php
		if(isset($_GET['submit'])){
			$side1 = $_GET['side1'];
			$side2 = $_GET['side2'];
			$side3 = $_GET['side3'];


			if ($side1 == $side2 && $side2 == $side3){
				echo "Triangle is equilateral";
			}
			else if ($side1 == $side2 or $side2 == $side3 or $side1 == $side3){
				echo "Triangle is isoceles";
			}
			else if($side1*$side = $side2*$side2 + $side3*$side2 || $side2*$side2 = $side1*$side1 + $side3*$side3 || $side3*$side3 = $side1*$side1 + $side2*$side2){
			echo "Triange is right angled triangle";
				}

			else{
				echo "Triangle is Scalene";

			}
		}

	?>



</body>
</html>
