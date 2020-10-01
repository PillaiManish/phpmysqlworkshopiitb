<!DOCTYPE html>
<html>
<head>
	<title>VI 2</title>
</head>
<body>
	<h1> Form </h1>
	<form method="POST" action="special1.php">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<input type="text" name="sub_1" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_2" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_3" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_4" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_5" placeholder="Enter Marks of Subject">
		<br>
		<input type="submit" value="Submit">
		<br>
	
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$name	=	$_POST['name'];
		$sub1 	=	$_POST['sub_1'];
		$sub2 	=	$_POST['sub_2'];
		$sub3 	=	$_POST['sub_3'];
		$sub4 	=	$_POST['sub_4'];
		$sub5	=	$_POST['sub_5'];

		$total	=	$sub1 + $sub2 + $sub3 + $sub4 + $sub5;

		$percentage = ($total/500)*100;


		echo "Name of the Student: ".$name."<br>";
		echo "Marks in each Subject <br>";
		echo "Subject 1: ".$sub1."<br>";
		echo "Subject 2: ".$sub2."<br>";
		echo "Subject 3: ".$sub3."<br>";
		echo "Subject 4: ".$sub4."<br>";
		echo "Subject 5: ".$sub5."<br>";
		echo "Total Marks Obtained: ".$total."<br>";
		echo "Total Marks: 500 <br>";
		echo "Percentage: ".$percentage."<br>";

	}



	?>


</body>
</html>

