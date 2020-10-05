<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method = "POST" action = "q2_string_functions.php">
		<input type = "text" name="string" placeholder="Enter any random string">
		<input type = "submit" value ="submit" name = "submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$user_string	= $_POST['string'];

			echo "1. No. of characters is ".strlen($user_string)."<br>";
			echo "<br>";
			
			echo "2. The array elements are (delimiter here is space) <br>";
			$array = explode(" ",$user_string);
			foreach($array as $ar){
				echo $ar." <br>";
			}
			echo "<br>";


			echo "3. Reverse of the string is ".strrev($user_string)."<br>";
			echo "<br>";
		
			echo "4. Convert all alphabetic characters in string to their lower case form ";
			echo strtolower($user_string)."<br>";
			echo "<br>";



			echo "5. Convert all alphabetic characters in string to their upper case form ";
			echo strtoupper($user_string)."<br>";
			echo "<br>";

			echo "6. Declare a substring and replace the content of substring into original string <br>";
			$sub_string = "Changed Content";
			echo "Substring is ".$sub_string;
			echo "<br>";
			echo "New string ".substr_replace($user_string, $sub_string,strlen($user_string)-1);




		}

	?>

</body>
</html>