<?php
   include('templates/header.php');
   include('config/db_connect.php');  
   if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['sid']) &&
      isset($_POST['password']) && isset($_POST['sem']) && isset($_POST['bname']) &&     
      isset($_POST['bid']) && isset($_POST['radio']) && isset($_POST['phone']) &&
      isset($_POST['address']) && isset($_POST['email']))
   {
     $name=$_POST['name'];
     $lname=$_POST['lname'];
     $sid=$_POST['sid'];
     $pass=$_POST['password'];
     $sem=$_POST['sem'];
     $branch=$_POST['bname'];
     $bid=$_POST['bid'];
     $gender=$_POST['radio'];
     $phone=$_POST['phone'];
     $address=$_POST['address'];
     $email=$_POST['email'];

     $conn = mysqli_connect("localhost", "root", "", "placement"); 

     $check="select bid,branchname from branch where (bid,branchname)=('$bid','$branch')";
     $res1=mysqli_query($conn,$check);
     if(!$res1)
       {
          echo "<script>alert('branch ID and name doesnot match') </script>";
       }


     if($res1)
       { 
         $ins="insert into student(name,lname,sid,pass,sem,branch,bid,gender,phone,address,email)
         values ('$name','$lname','$sid','$pass','$sem','$branch','$bid','$gender',
                     '$phone','$address','$email')";
         $res=mysqli_query($conn,$ins);
    
         echo "<br>";
         if($res)
          { echo  "<script>alert('ADDED SUCESSFULLY') </script>";
          }   
         header("refresh:3;url=a_app.php");
        }
   }
?>

