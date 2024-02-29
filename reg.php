<?php
    include('templates/header.php');
?>
<Html>  
    <head>   
        <title>   
        Registration
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
        img
        {
         transition: transform .1s;
         width:100px;
         height:100px;
         text-align: center;
        }
        img:hover
        {
        transform:scale(1.5);
        }
           
        </style>
    </head>  

<body>  
<br>  
<br>  
    <div class="div-img">              
    <a href="register.php"><img src="images/back.png" height="60" width="60"></a>
    </div>
    <br>
<div class="bordered">
<div class="cent">
    
<form method="POST" action="reg.php"> 
  
    
<label> SID: </label> 
<input type="text" name="sid" size="15"><br>

<label> TID: </label>
<input type="text" name="tid"><br>


<input type="submit" name="submit" value="submit" class="btn1"/>  
<input type="reset" value="Clear" class="btn2"/>  


</form>  
</div>
</div>
</body>
</Html>
</body>  
</html>  


<?php
   
   include('config/db_connect.php');  
   $conn = mysqli_connect("localhost", "root", "", "placement");

   if(isset($_POST['submit']))
   {
    echo  "<script>alert('Registered SUCESSFULLY') </script>";
       $sid=$_POST['sid'];
       $tid=$_POST['tid'];

   $sql ="insert into registered values ('$sid','$tid')";
   $res=mysqli_query($conn,$sql);
   echo $res;
   }          

   echo "<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   //header("refresh:3;url=register.php");

   include('templates/footer.php');
?>
