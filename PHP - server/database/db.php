<!-- <?php
// $servername = "localhost";
// $username = "root";
// $password = "1234";
// $db = "template";

// // connect db
// $db = mysqli_connect($servername , $username , $password , $db);

// $query = "insert into
//  user(fullName , age, address, phone_number, email, password, state_date) 
//  values('mohammed janati', 18 , 'massira', '0606690217', 'simo@gmail.com' , '1234' , current_date); ";
?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbs = "template";

// Create connection
$db = mysqli_connect($servername, $username, $password , $dbs);
mysqli_query($db , "select * from user");
?>