<?php
    
   require 'connection.php';

   $result = mysqli_query($con, "SELECT id, name FROM cards_tbl");  
   
   
   $data=array();
   while ($row=mysqli_fetch_assoc($result)){
       $data[]=$row;
   }

   echo json_encode($data);
   
?>
