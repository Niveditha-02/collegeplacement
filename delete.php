<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   $name=$_POST['name'];
   $sid=$_POST['sid'];


  $conn = mysqli_connect("localhost", "root", "", "placement");

   $del="delete  from student where name='$name' and sid='$sid'";
   mysqli_query($conn,$del);
   echo "<br>";
   echo  "<script>alert('DELETED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

