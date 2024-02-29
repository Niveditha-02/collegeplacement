<?php
   include('templates/header.php');
   include('config/db_connect.php');  

  
   $tid=$_POST['tid'];


  $conn = mysqli_connect("localhost", "root", "", "placement");

   $del="delete  from training where tid='$tid'";
   mysqli_query($conn,$del);
   echo "<br>";
   echo  "<script>alert('DELETED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

