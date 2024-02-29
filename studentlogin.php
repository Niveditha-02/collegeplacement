<?php
	include('config/db_connect.php');

	session_start();
	$sid = $pass = '';
	$errors = array('sid' => '', 'pass' => '');

	if(isset($_POST['submit'])){
		
		if(empty($_POST['sid'])){
			$errors['sid'] = 'Username is required';
		} else{
			$sid = $_POST['sid'];
		}

		// check Password
		if(empty($_POST['pass'])){
			$errors['pass'] = 'Password is required';
		} else{
			$pass = $_POST['pass'];
		}


		if(array_filter($errors)){
			//echo 'errors in form';
		} else {

			// escape sql chars
			$sid = mysqli_real_escape_string($conn, $_POST['sid']);
			$pass = mysqli_real_escape_string($conn, $_POST['pass']);

			// create sql
			$sql1 = "SELECT pass from student WHERE sid ='$sid'";
			$sql2 = "SELECT sid from student WHERE sid='$sid'";

			// get the query result for password
			$pass1 = mysqli_query($conn, $sql1);
			$c_user = mysqli_query($conn, $sql2);

			// fetch result in array format
			$pass_arr = mysqli_fetch_assoc($pass1);
			$c_user_arr = mysqli_fetch_assoc($c_user);

			// check u_name
			if ($c_user_arr['sid'] != $sid) {
				$errors['sid'] = 'No user found';
			}

			// check password
			if ($pass_arr['pass'] == $pass){
				header('Location: s_app.php');
			} else {
				$errors['pass'] = 'Wrong Password';
			}

			// close sql connection
			mysqli_free_result($pass1);
			mysqli_free_result($c_user);
			mysqli_close($conn);
		
		}

	} 
	session_unset();
	session_destroy();
	?>

<!DOCTYPE html>
<html>
<head>
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
     <style>
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
        body{
                height: 100vh;
                width: 100%;
                background: linear-gradient(115deg, #009FFD,#36096D 90%);
				font-family: 'Poppins';
                font-size: 25px;  
             }
        .container
        {
            text-align: center;     
            background: #fff;
            margin: auto;
            width: 40%;
            padding: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
		.red-text
		{
             color:red;
		}
     </style>

</head>
<body>
    
	<section class="container">
		<h4 class="center">Student</h4>
		<form class="white" action="" method="POST" id="myform">

			<label>Student ID</label>
			<input type="text" name="sid" value="<?php echo htmlspecialchars($sid) ?>">
			<div class="red-text"><?php echo $errors['sid']; ?></div>
			<br>
            <label>Password</label>
			<input type="password" name="pass" value="<?php echo htmlspecialchars($pass) ?>">
			<div class="red-text"><?php echo $errors['pass']; ?></div>
			<br>
            <div class="center">
				<input type="submit" name="submit" value="Login" class="btn1"/>
                <input type='reset' value='Clear' onClick="myfuction()" class="btn2"/> 
			</div>
		</form>
        <script>
            function myfunction()
             {
            document.getElementById("myform").reset();
             }
</script>
	</section>

</body>	

</html>