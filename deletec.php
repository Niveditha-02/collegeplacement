<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   $conn = mysqli_connect("localhost", "root", "", "placement");
   if(isset($_POST['cid']) || isset($_POST['name']))
   {
        $cid = mysqli_real_escape_string($conn, $_POST['cid']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
   }
   $del="delete from company where cid='$cid'";
   $res=mysqli_query($conn,$del);
   echo "<br>";
   echo  "<script>alert('DELETED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

