<?php
   require 'connection.php';


	if( isset($_POST["Name"])&& isset($_POST["LastName"]) && isset($_POST["UserName"]) && isset($_POST["Email"])&& isset($_POST["Password"])&& isset($_POST["CardNumber"])&& isset($_POST["CVV"]))
	{		
		$Name=$_POST["Name"];
		$LastName=$_POST["LastName"];
		$UserName=$_POST["UserName"];
		$Email=$_POST["Email"];
		$Password=$_POST["Password"];
		$CardNumber=$_POST["CardNumber"];
		$CVV=$_POST["CVV"];

		$user = mysqli_query($con, "SELECT * FROM records_tbl  where userName='$UserName'"); 
		$mail = mysqli_query($con, "SELECT * FROM records_tbl  where email= '$Email'"); 

		if(mysqli_num_rows($user)>0||mysqli_num_rows($mail)>0)
        {
			if (mysqli_num_rows($user)>0 && mysqli_num_rows($mail)>0){
				echo 0;
			}elseif (mysqli_num_rows($user)>0) {
				echo 1;
			}else  {
				echo 2;
			}
        }else{
			//insertar en la base de datos
			
			$sql = "INSERT INTO records_tbl (name, lastName, userName, email, pass, cardNumber, CVV) VALUES ('".$Name."', '".$LastName."','".$UserName."','".$Email."','".$Password."','".$CardNumber."', '".$CVV."')";

			if (mysqli_query($con, $sql)) {
				echo 3;
			} else{
				echo 4;
			}

		}
		
		
	}

	$con->close();
?>
	


