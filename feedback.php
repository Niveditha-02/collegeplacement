<?php
    include('templates/header.php');
?>
<Html>  
    <head>   
        <title>   
        FEEDBACK
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
    <a href="s_app.php"><img src="images/back.png" height="60" width="60"></a>
    </div>
    <br>
<div class="bordered">
<div class="cent">
    
<form method="POST" action="feedback.php"> 
  
    
<label> SID: </label> 
<input type="text" name="sid" size="15"><br>

<label> Feedback: </label>
<input type="text" name="feedback" size="60"><br>

<label> Rating (Out of 10): </label>
<input type="text" name="rating"><br>


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
    
       if(isset($_POST['sid']) && $_POST['feedback'] && $_POST['rating'])
       {
         $sid=$_POST['sid'];
         $feedback=$_POST['feedback'];
         $rating=$_POST['rating'];
         

         $sql ="insert into feedback values ('$sid','$feedback','$rating')";
         $res=mysqli_query($conn,$sql);
         echo "<script>alert('Feedback Given Succesfully🙌') </script>";
       }
   }          

   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   
   include('templates/footer.php');
?>
