<?php
   require 'connection.php';


	if( isset($_POST["Username"])&& isset($_POST["Password"]))
	{		
		$usern=$_POST["Username"];
		$Password=$_POST["Password"];
		
        $user = mysqli_query($con, "SELECT * FROM records_tbl  where userName='$usern'"); 

		$result = mysqli_query($con, "SELECT * FROM records_tbl  where userName='$usern' and pass= '$Password'"); 

		if(mysqli_num_rows($user)>0)
        {
			if(mysqli_num_rows($user)>0&&mysqli_num_rows($result)>0){
                echo 0;
            }else{
                echo 1;
            }
			
        }else{
			//No se encontro ningun registro
			echo 2;
		}
		
		
	}

	$con->close();
?>
	


