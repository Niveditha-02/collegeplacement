<!-- logout.php -->
<head>

	<title>PLACEMENT AND TRAINING CELL</title>
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
  </style>
</head>

<body>
     <div class="header">
     <a href="BIET.JPG" class="logo">BIET PLACEMENT AND TRAINING CELL</a>
      <div class="header-right">
       <a class="active" href=""></a>
       <a href="feedback.php">feedback</a>
       <a href="home.php">logout</a>
      </div>
</div>
    
</body>
</html>
