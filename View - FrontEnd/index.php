<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome - To the open source project to make CV'S</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://images.unsplash.com/photo-1589859762194-eaae75c61f64?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../PHP - server/Ajax/FeedBackSend.js"></script>
</head>
<?php session_start(); ?>

<body>
	<!-- Get started makes the header of page  Class Header-->
	<div class="content-of-page-princepal">
		<div class="header">
			<div class="log-header">
				<span style="font-size:20px ;">Dev teams</span>
			</div>
			<div class="menu-header">
				<ul>
					<li>Home</li>
					<li>Feedback</li>
					<li>backets</li> <!-- services -->
					<li class="version-li-title">Version *
						<ul class="version" style="display: none; z-index: 100;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
							<li>1x0 <span class="current-version">current</span></li>
						</ul>
					</li> <!-- More options -->
				</ul>
			</div>
			<div class="login-header">
				<ul>
					<li class="active"><a href="/Creact-the-CV-template---PHP-Project-main//View - FrontEnd/compenents/login/login/index.php">Login</a>
					</li>
					<li><a href="/Creact-the-CV-template---PHP-Project-main/View - FrontEnd/compenents/login/register/test.html">Register</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="home-content-page">
			<div class="description-home-content">
				<p>Create Yours</p>
				<p style="font-family:'Open Sans', sans-serif; font-size:15px; letter-spacing:1px; margin-top:20px;">
					Web site about craetion of modern Resume and CV, give your feedback
				</p>
				<button class="btn-get-started">Create Your CV New </button>

			</div>
			<div class="imgs">
				<img src="../Static - files/Images/1.jpg" alt="cv1">
				<img src="../Static - files/Images/3.jpg" alt="cv2">
				<img src="../Static - files/Images/5.jpg" alt="cv3">
			</div>
		</div>
		<div class="observation-contineur">
			<p id="observation">Our clients observation</p>
			<div class="clients-observation">
				<div class="card">
					<div class="clients-infos">
						<img src="../Static - files/Images/p1.png" alt="p1">
						<div class="name">Mohammed Janati</div>
					</div>
					<div class="feedback-description-ob">
						<p>
							I have been used this website and i have it so good
						</p>
					</div>
				</div>
				<div class="card">
					<div class="clients-infos">
						<img src="../Static - files/Images/p2.png" alt="p2">
						<div class="name">Salma hemeroui</div>
					</div>
					<div class="feedback-description-ob">
						<p>
							I have been used this website and i have it so good
						</p>
					</div>
				</div>
				<div class="card">
					<div class="clients-infos">
						<img src="../Static - files/Images/p3.png" alt="p3">
						<div class="name">Karima ajrmoun</div>
					</div>
					<div class="feedback-description-ob">
						<p>
							I have been used this website and i have it so good
						</p>
					</div>
				</div>
				<div class="card">
					<div class="clients-infos">
						<img src="../Static - files/Images/p4.png" alt="p4">
						<div class="name">Nour Alhoda</div>
					</div>
					<div class="feedback-description-ob">
						<p>
							I have been used this website and i have it so good
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="question-side-client" style="overflow:hidden;">
			<p style="overflow:hidden;">You have a question let as know about it</p>
			<div class="search-field">
				<input class="masg" type="search" placeholder="Inbox us" name="somename">
				<button id="btn-send">Send</button>
			</div>
			<div class="search-field B">
				<input class="email" type="search" placeholder="Please Enter you name" name="somename">
				<button id="btn-sends" style="padding:8px; ">Next</button>
			</div>
			<div class="thanks-div">
				<?php if(isset($_SESSION['anwer'])){} ?>
				<p style="font-size:15px; padding:5px 20px;overflow:hidden;">
					Your MSG was send seccesfuly, Thanks for your feedback.
					<?php
					echo ($_SESSION['result']);
					?>
				</p>
			</div>
			<div class="question-en">
				<div class="question1">
					How Long you wanna ?
				</div>
				<div class="en1">Answer</div>
				<div class="question2">How... ?</div>
				<div class="en2">Answer</div>
				<div class="question3">Why... ?</div>
				<div class="en3">Answer</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer-page-princepal">
			<ul>
				<li>Home</li>
				<li>Services</li>
				<li>Conditions</li>
			</ul>
			<ul>
				<li>Facebook</li>
				<li>Twitter</li>
				<li>Medium</li>
			</ul>
		</div>
	</footer>
	<script src="app.js"></script>
	<script src="../PHP - server/Ajax/FeedBackSend.js"></script>
</body>

</html>