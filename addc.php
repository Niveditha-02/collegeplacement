<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   if(isset($_POST['cid']) || isset($_POST['name']) || isset($_POST['type']) ||
    isset($_POST['package']))
    {
        $cid = mysqli_real_escape_string($conn, $_POST['cid']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $package = mysqli_real_escape_string($conn, $_POST['package']);
        
    }

   $conn = mysqli_connect("localhost", "root", "", "placement");

   $ins="insert into company(cid,name,type,package)
    values ('$cid','$name','$type','$package')";
   $res=mysqli_query($conn,$ins);
   echo "<br>";
   echo  "<script>alert('ADDED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

