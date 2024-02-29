<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   if(isset($_POST['sid']) || isset($_POST['name']) || isset($_POST['cid']) ||
    isset($_POST['cname']))
    {
        $sid = mysqli_real_escape_string($conn, $_POST['sid']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $cid = mysqli_real_escape_string($conn, $_POST['cid']);
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        
    }

   $conn = mysqli_connect("localhost", "root", "", "placement");

   $ins="insert into placed(sid,name,cid,cname)
    values ('$sid','$name','$cid','$cname')";
   $res=mysqli_query($conn,$ins);
   echo "<br>";
   echo  "<script>alert('ADDED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

