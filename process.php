<?php
	include "db.php";
	if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];


		$sql="INSERT INTO info(`frist_name`,`last_name`,`gender`,`email`) VALUES('$fname','$lname','$gender','$email')";

		$result=$con->query($sql);
		if($result===TRUE){
			echo "Data insert successfully";
		}else{
			echo "Data insert error";
		}
	}

?>