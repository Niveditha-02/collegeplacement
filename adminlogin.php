<?php
	include('config/db_connect.php');
    
	session_start();
	$u_name = $password = '';
	$errors = array('u_name' => '', 'password' => '');

	if(isset($_POST['submit'])){
		
		if(empty($_POST['u_name'])){
			$errors['u_name'] = 'Username is required';
		} else{
			$u_name = $_POST['u_name'];
		}

		// check Password
		if(empty($_POST['password'])){
			$errors['password'] = 'Password is required';
		} else{
			$password = $_POST['password'];
		}


		if(array_filter($errors)){
			//echo 'errors in form';
		} else {

			// escape sql chars
			$u_name = mysqli_real_escape_string($conn, $_POST['u_name']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			// create sql
			$sql1 = "SELECT password from admin WHERE u_name ='$u_name'";
			$sql2 = "SELECT u_name from admin WHERE u_name='$u_name'";

			// get the query result for password
			$pass = mysqli_query($conn, $sql1);
			$c_user = mysqli_query($conn, $sql2);

			// fetch result in array format
			$pass_arr = mysqli_fetch_assoc($pass);
			$c_user_arr = mysqli_fetch_assoc($c_user);

			// check u_name
			if ($c_user_arr['u_name'] != $u_name) {
				$errors['u_name'] = 'No user found';
			}

			// check password
			if ($pass_arr['password'] == $password){
				header('Location: a_app.php');
			} else {
				$errors['password'] = 'Wrong Password';
			}

			// close sql connection
			mysqli_free_result($pass);
			mysqli_free_result($c_user);
			mysqli_close($conn);
		    session_unset();
			session_destroy();

		}

	} 
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
		<h4 class="center">Administrator</h4>
		<form class="white" action="" method="POST" id="myform">

			<label>Username</label>
			<input type="text" name="u_name" value="<?php echo htmlspecialchars($u_name) ?>">
			<div class="red-text"><?php echo $errors['u_name']; ?></div>
			<br>
            <label>Password</label>
			<input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
			<div class="red-text"><?php echo $errors['password']; ?></div>
			<br>
            <div class="center">
				<input type="submit" name="submit" value="Submit" class="btn1"/>
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