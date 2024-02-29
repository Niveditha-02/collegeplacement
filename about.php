<!-- logout.php -->
<head>

	<title>PLACEMENT AND TRAINING CELLsssssssssssssssssssssssssssssssssssssssssssssssssssssssss</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .header {
        overflow: hidden;
        background-color:#0a0b36;
        padding: 20px 10px;
        font-family: 'Poppins';
        font-size: 25px; 
            }

/* Style the header links */
      .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
        color:white;
        }

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
.cont{
padding-left:20px;
}
  </style>
</head>

<body>
     <div class="header">
       <a href="BIET.JPG" class="logo">BIET PLACEMENT AND TRAINING CELL</a>
        <div class="header-right">
        <a href="home.php">home</a>
      </div>
     </div>
     
     <div class="cont">
     <p><br><br>
      <b>College Placement and training cell management system</b>
     </p>

     <ol>
			<li>Student: Registers courses offered by college.</li>
			<li>Admin: add,delete,view list of Students, Courses, Companies.</li>
		</ol>

    <div class="container center grey-text">
		<p>Made with &#10084; by Khushiii</p>
	</div>
    </div>
    
</body>
</html>

<?php   echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        include('templates/footer.php');?>