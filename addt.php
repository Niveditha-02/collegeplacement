<?php
   include('templates/header.php');
   include('config/db_connect.php');  

   if(isset($_POST['tid']) || isset($_POST['cname']) || isset($_POST['date']) ||
    isset($_POST['link']))
    {
        $tid = mysqli_real_escape_string($conn, $_POST['tid']);
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        
    }

   $conn = mysqli_connect("localhost", "root", "", "placement");

   $ins="insert into training(tid,coursename,start_date,link)
    values ('$tid','$cname','$date','$link')";
   $res=mysqli_query($conn,$ins);
   echo "<br>";
   echo  "<script>alert('ADDED SUCESSFULLY') </script>";
   header("refresh:3;url=a_app.php");
   
?>

