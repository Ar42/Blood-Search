
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
		<style>
			*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Times New Roman", Times, serif;
			
		}
		body{
			background: #e3edf7;
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
		thead tr th,td{
			font-size: 2vw;
			border: .17vw solid black;
 			border-collapse: collapse;
		}
		a{
			text-decoration: none;
			color: white;
		}
		.menus{
			margin: .8vw;
			font-size: 1.5vw;
			border-style: solid;
			border-color:  black  ;
			border-radius: 3vw;
			transition: transform 0.5s;
		}
		.menus:hover{
			background: white;
			color: red;
			box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2),
				    inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
				    inset -0.5px -0.5px 0 rgba(255, 255, 255, 1),
				    inset -0.5px -0.5px 0 rgba(0, 0, 0, 0.15),
				    inset 0px 12px 12px -10px rgba(0, 0, 0, 0.05);
		border: 1px solid rgba(0, 0, 0, 0.1);
		
			
			/*border-color:  black black  #55EF17 black ;*/
			
		}
		.wel{
			margin-top: 4vw;
			font-weight: bold;
			font-size: 1.5vw;
		}
		.change_content:after{
			content: 'Blood Search';
			animation: changetext 1s linear;
			color: red;
			font-size: 1.5vw;
		}
		@keyframes changetext{
			4%{content: "B";}
			12%{content: "Bl";}
			20%{content: "Blo";}
			28%{content: "Bloo";}
			36%{content: "Blood";}
			44%{content: "Blood ";}
			52%{content: "Blood S";}
			60%{content: "Blood Se";}
			68%{content: "Blood Sea";}
			76%{content: "Blood Sear";}
			84%{content: "Blood Searc";}
			92%{content: "Blood Search";}
		}
		.fa-check-circle{
			color: #0EEB24;
		}
		.fa-times{
			color: #FF0000;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid totalmenu">
			<div class="row">
				
				<nav class="navbar navbar-expand-lg fixed-top  " style="background: #000">
				<a class="navbar-brand" href="#">
					<img src="images/EMS.gif" alt="logo" style="width:5vw;">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link menus" href="newIndex.php">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="BloodRequest.php">Blood Request<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="JoinAsDonor.php">Join As Donor<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="DonorList.php">Donor List<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="BloodBank.php">Blood Bank<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link menus" href="Aut_Registration.php">SignUp/Login<span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
			</nav>
			</div>
		</div>
		<br><br>
		<div class="container main_div d-flex justify-content-center align-items-center">
			<p class="wel">Welcome to <span class="change_content"></span> </p>
		</div>
		<br><br>

		<div class="container">
			<p class="text-center" style="font-size: 2vw; font-weight: bold;">Donor and Patient relation</p>
			<table class="table table-hover table-sm">
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
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">AB-</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">A+</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">A-</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">B+</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">B-</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">O+</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
					</tr>

					<tr>
						<td class="text-center" style="color: red; font-weight: bold;">O-</td>
						<td class="text-center"><i class="fas fa-check-circle"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
						<td class="text-center"><i class="fas fa-times"></i></td>
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