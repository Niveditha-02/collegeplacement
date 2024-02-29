<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   $conn = mysqli_connect("localhost", "root", "", "placement");
   if(isset($_POST['sid']))
   {
        $sid = mysqli_real_escape_string($conn, $_POST['sid']);
    
   }
   $del="delete from placed where sid='$sid'";
   $res=mysqli_query($conn,$del);
   echo "<br>";
   echo  "<script>alert('DELETED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

