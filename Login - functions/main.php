<?php
// for get the infos from use using the special charcarters function to checking out the incoming data from th user example :
// letter will using functions for makes the works more easy.
include("../database/db.php");
session_start();
$_SESSION['auth'] = false;
function register()
{
	include("../database/db.php");
	$fullname = htmlspecialchars($_GET['fn']);
	$username = htmlspecialchars($_GET['username']);
	$age = htmlspecialchars($_GET['age']);
	$address = htmlspecialchars($_GET['ad']);
	$phoneN = htmlspecialchars($_GET['ph']);
	$gmail = htmlspecialchars($_GET['email']);
	$password = htmlspecialchars($_GET['password']);
	if (isset($fullname) && isset($age) && isset($address) && isset($phoneN) && isset($gmail) && isset($password) && isset($username) ) {
		echo("';;ss'");
		// logup the new users 
		$query = "INSERT INTO 
		user(fullName , age, address, phone_number, email, password) 
		values('$fullname' , $age, '$address', '$phoneN' , '$gmail' , '$password')";

			if (mysqli_query($db, $query))
				echo('created');
			else
				echo('none');
	}
}

function login()
{
	include("../database/db.php");
	$gmail = htmlspecialchars($_GET['email']);
	$password = htmlspecialchars($_GET['password']);
	if (isset($gmail) && isset($password)) {
		$query = "select * from user where email = '$gmail' and password = '$password'";
		$res = mysqli_query($db , $query);
		// remember that you must show the error type if that is avialble
		if (mysqli_num_rows($res) == 1) {
			echo('ll');
			while ($row = mysqli_fetch_assoc($res)) {
				$_SESSION['auth'] = true;
				echo ($row['fullName'] . "isconnected!");
				// authentication active
			}
		}
	}
}

if (isset($_GET['btn'])) {
	switch ($_GET['btn']) {
		case 'login':
			login();
			break;
		case 'register':
			register();
	}
}
