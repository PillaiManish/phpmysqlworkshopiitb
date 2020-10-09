<form action="q2_send_mail.php" method="POST">
	<h3>Feedback Form</h3>
	Name: <input type="text" name="user"><br>
	Email: <input type="Email" name="emailid"><br><br>
	Feedback: <textarea name="feedback"></textarea><br><br>
	<input type="submit" name="submit" value="get mail">
</form>

<?php 
//sending mail to user
if (@$_POST['submit']) {
	
	$username = @$_POST['user'];
	$feed = @$_POST['feedback'];
	$to = @$_POST["emailid"];
	$subject = "Feedback form response";
	$msg = "Hello $username thanks for Your feedback,
here is a copy of feedback you submitted,->
"
.$feed."
Regards
Yolo";
	$from = "From: bethechange@mpillai.com";

	if (mail($to, $subject, $msg, $from)) {
		echo "<br><b>Mail Sent sucessfully</b> ";
	}
	else{
		echo "Mail couldnt be sent";
	}

	if (mail("pillaimanish@gmail.com", "copy of respone($username)", "$feed", $from)) {
		
		echo "<br>Admin will contact you soon";
	}
	
}


 ?>