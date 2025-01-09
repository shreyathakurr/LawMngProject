<?php
	session_start();
	
	include("db_con/dbCon.php");
	
	$conn = connect();
	
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title></title>
	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="index.php">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="#">About Us</a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<li class="">
											<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Logout</a>
										</li>
										<?php }else{ ?>
										<li class="">
											<a class="nav-link cus-a" href="login.php">Login</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Register
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
												<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->
											</div>
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="banner" style =" background-image: url(images/contactus-banner.jpg">
				<div class="container">
					<div class="row">
						<div class="col-md">
							<div class="banner_content">
								<h1>Find Your Suitable Lawyer Here !</h1>
								<button class="cusbutton" data-toggle="button" onclick="redirectToPage('lawyers.php')">Find Lawyers</button><!--lawyers.html page-->
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="lawyerscard">
			<div class="container">
				<div class="row">
					<?php
						
						
						$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active'");
						
						while($row = mysqli_fetch_array($result)) {
						?>
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
								<img src="images/upload/<?php echo $row["image"]; ?>" class="card-img-top cusimg img-fluid" alt="img">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h5> <!--lawyers name dynamic-->
									<h6 class="card-title"><?php echo $row["speciality"]; ?></h6> <!--lawyers practice speciality dynamic-->
									<h6 class="card-title"><span><?php echo $row["practise_Length"]; ?></span></h6> <!--lawyers practice time dynamic-->
									
									<a class="btn btn-sm btn-info" href="single_lawyer.php?u_id=<?php echo $row["u_id"]; ?>"><i class="fa fa-street-view"></i>&nbsp; View Full Profile</a>
								</div>
							</div>
						</div>
						<?php
						}
					?>
				</div>
			</div>
		</section>
		<section class="aboutus">
			<div class="container">
				<div class="row">
					<div class=" ml-auto">
						<h1>About US</h1>
						<p>Lawyers Mangnagment System is a platform where you cant find the top lawyers arount you .Now ther is no need to ask millions of people to find a good lawyers ,it can be done on your fingure tips at this platform. Simply check the rating of the lawyer you want , check the profile and book a meeting!
							Here is Law World at your Fingure tips!!
						</p>
						<h2>Our Contact details </h2>
						<h4>Address - New West Park Amravati,Maharashtra</h4>
						<h4>Contact no - 9359439317</h4>
					</div>
					
			</div>
		</section>
		<footer class="">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>All rights reserved.</h5>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="js/bootstrap.js"></script> 
		
	</body>
</html>
