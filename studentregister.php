
<Html>  
    <head>   
        <title>   
        Student Register
        </title> 
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> 
        <style>
            body{
                font-family: 'Poppins';
                font-size: 17px;
            }
            .cent{
          text-align: center;
         }
         .bordered
         {
            margin: auto;
            width: 50%;
            padding: 10px;
            border: 6px solid rgb(13, 9, 80);
         }
         .btn1{
			background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;

		}
		.btn2
		{
			background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
		}
        
        </style>
    </head>  

<body>  
<br>  
<br>  
<div class="bordered">
<div class="cent">
<form method="POST" action="add.php">  
  
<label> Name: </label>         
<input type="text" name="name" size="15" required="required" pattern="[A-Za-z]+"/> <br>
 
<label> Lastname: </label>         
<input type="text" name="lname" size="15"/> <br> 

<label> Student ID: </label>         
<input type="text" name="sid" size="15"/> <br> 

<label> Password : </label>         
<input type="text" name="password" size="15"/> <br>   

<label> Sem: </label>         
<input type="text" name="sem" size="15"/> <br> 

<label> Branch: </label>      
<select name="bname" id="bname">
   <option value="" name="bname"></option>    
   <option value="CSE" name="bname">CSE</option>
   <option value="ECE" name="bname">ECE</option>
   <option value="ISE" name="bname">ISE</option>
   <option value="EEE" name="bname">EEE</option>
   <option value="AIML" name="bname">AIML</option>
   <option value="CV" name="bname">CV</option>
   <option value="MEC" name="bname">MEC</option>
	
</select> <br>


<label> Branch id: </label>         
<select name="bid" id="bid">
    <option value="" name="bid"></option>    
    <option value="4BD22CS" name="bid">4BD22CS</option>
    <option value="4BD22EC" name="bid">4BD22EC</option>
    <option value="4BD22IS" name="bid">4BD22IS</option>
    <option value="4BD22AI" name="bid">4BD22AI</option>
    <option value="4BD22CV" name="bid">4BD22CV</option>
    <option value="4BD22EE" name="bid">4BD22EE</option>
    <option value="4BD22ME" name="bid">4BD22ME</option>
 </select> <br>

  
<label>   
Gender :  
<br>  
<input type="radio" name="radio" value="Male">Male<br>  
<input type="radio" name="radio"value="Female">Female<br>  
<input type="radio" name="radio"/> Other  
</label>
<br>  
 
<label>   
Phone :  
</label>  
<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br>  
Address:<br>
<textarea cols="60" rows="5" value="address" name="address">  
</textarea>  
<br> 
Email:  
<input type="email" id="email" name="email"/> <br>    
<br>  

<input type="submit" value="Add" class="btn1"/>  
<input type="reset" value="Reset" class="btn2"/>  

</form>  
</div>
</div>
</body>
</Html>
<!-- </body>  
</html>   -->



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

