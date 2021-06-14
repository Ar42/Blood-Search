<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<style>
			*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Times New Roman", Times, serif;
			
		}
		.tot
			h3{
		//background: red;
		font-size: 4vw;
		color: #fff;
		}
		.totalmenu{
		background: red;
		color: white;
		position: absolute;
		}
		
		.menu a{
		text-decoration: none;
		font-size: 1.5vw;
		margin: 1vw;
		color: white;;
		}
		.menu a:before{
		content: "";
		position: relative;
		top: 0;
		left: 0;
		}
		.main_div h3{
			color: red;
			animation: jump 1s linear;
		}
		@keyframes jump {
			0%{transform: translateY(0);}
			50%{transform: translateY(-3vw);}
			100%{transform: translateY(0);}
		}
		#c1{
			animation-delay: 0s;
		}
		#c2{
			animation-delay: 0.1s;
		}
		#c3{
			animation-delay: 0.2s;
		}
		#c4{
			animation-delay: 0.3s;
		}
		#c5{
			animation-delay: 0.4s;
		}
		#c6{
			animation-delay: 0.5s;
		}
		#c7{
			animation-delay: 0.6s;
		}
		#c8{
			animation-delay: 0.7s;
		}
		#c9{
			animation-delay: 0.8s;
		}
		#c10{
			animation-delay: 0.9s;
		}
		#c11{
			animation-delay: 1s;
		}
		h4{
		font-size: 2vw;
		}
		footer {
		text-align: center;
		padding: 3px;
		background-color: red;
		color: white;
		font-size: 1.5vw;
		}
		/*.home{
			color: yellow;
			transition: 1.9s;
		}*/
		th, td{
			font-size: 2vw;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid totalmenu">
			<div class="row">
				<div class="logo col-4" style="font-size: 1.5vw;">Blood Search</div>
				<div class="menu col-8">
					<a href="indexf.php">Home</a>
					<a href="BloodRequest.php">Blood Request</a>
					<a href="Feed.php">Request lists</a>
					<a href="JoinAsDonor.php">Join As Donor</a>
					<a href="DonorList.php">Donor List</a>
					<a href="BloodBank.php">Blood Bank</a>
				</div>
			</div>
		</div>
		<br><br>
		<div class="container main_div d-flex justify-content-center align-items-center">
			<pre style="font-size; font-weight: bold; 1.5vw;">Welcome to </pre>
			<h3 id="c1" style="font-size: 1.5vw;">B</h3>
			<h3 id="c2" style="font-size: 1.5vw;">L</h3>
			<h3 id="c3" style="font-size: 1.5vw;">O</h3>
			<h3 id="c4" style="font-size: 1.5vw;">O</h3>
			<h3 id="c5" style="font-size: 1.5vw;">D</h3>
			<h3 id="c6" style="font-size: 1.5vw;">S</h3>
			<h3 id="c7" style="font-size: 1.5vw;">E</h3>
			<h3 id="c8" style="font-size: 1.5vw;">A</h3>
			<h3 id="c9" style="font-size: 1.5vw;">R</h3>
			<h3 id="c9" style="font-size: 1.5vw;">C</h3>
			<h3 id="c9" style="font-size: 1.5vw;">H</h3>
		</div>
		<br><br>

		<div class="container">
			<p class="text-center" style="font-size: 2vw; font-weight: bold;">Donor and Patient relation</p>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center" colspan="10">Donors</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="10" class="text-center" style="padding-top: 17vw; font-weight: bold;">Patients</td>
					</tr>

					<tr>
						<td class="text-center"></td>
						<td class="text-center" style="color: red; font-weight: bold;">O-</td>
						<td class="text-center" style="color: red; font-weight: bold;">O+</td>
						<td class="text-center" style="color: red; font-weight: bold;">B-</td>
						<td class="text-center" style="color: red; font-weight: bold;">B+</td>
						<td class="text-center" style="color: red; font-weight: bold;">A-</td>
						<td class="text-center" style="color: red; font-weight: bold;">A+</td>
						<td class="text-center" style="color: red; font-weight: bold;">AB-</td>
						<td class="text-center" style="color: red; font-weight: bold;">AB+</td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">AB+</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">AB-</td>
						<td class="text-center" >Yes</td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">A+</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">A-</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">B+</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">B-</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">O+</td>
						<td class="text-center">Yes</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">O-</td>
						<td class="text-center">Yes</td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>





				</tbody>

			</table>
		</div>
		

		
		
		<div class="container d-flex justify-content-ends">
			<div class="logout">
				<a href="logout.php"> <button class="btn btn-danger ml-auto" style="font-size: 1.5vw;">Logout</button> </a>
			</div>
		</div><br>
		<div class="container">
			<footer>
				<p>Blood Search<br>Copyright © 2020 | Team MYSTIC <br>Mystic Web Development Team</p>
			</footer><br><br>
		</body>
	</html>