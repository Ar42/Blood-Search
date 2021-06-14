<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.css' ?> 
		<link rel="stylesheet" href="login.css">
		<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php
		include 'REGdbcon.php';
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$emailsearch = " select * from registration where email='$email' ";
			$query = mysqli_query($con, $emailsearch);
			$email_count = mysqli_num_rows($query);
			if($email_count){
				$email_pass = mysqli_fetch_assoc($query);


				$db_pass = $email_pass['password'];
				$_SESSION['username'] = $email_pass['username'];



				$pass_decode = password_verify($password, $db_pass);
				if($pass_decode){
					?>
					<script>
						alert('Login Successfull');
						location.replace("indexf.php");
					</script>
					<?php
				}

				else{
					?>
					<script>
						alert('Incerroect Password!');
					</script>
					<?php
				}
			}
			else{
				?>
					<script>
						alert('Invalid Email!');
					</script>
					<?php

			}

		}


		?>

		



		<div class="main_div">
			<div class="box">
				<h1>Login</h1>
				<form action=" <?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
					
					<div class="inputbox">
						<input type="email" name="email" autocomplete="off" required>
						<label>Email Address</label>
					</div>
					
					<div class="inputbox">
						<input type="password" name="password" autocomplete="off" required>
						<label>Password</label>
					</div>
					

					<input type="submit" name="submit">
				</form>
			</div>
		</div>
		
	</body>
</html>






