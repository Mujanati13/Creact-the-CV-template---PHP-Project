<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - welcome </title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 
    session_start();
    if(isset($_SESSION['auth']) == true){
        // redirect into the profile else still in the same page
    }
?>
<body>
    <div class="login-content-page">
        <div class="login-field-page">
            <div class="login-title">
                Login
            </div>
            <form action="/Creact-the-CV-template---PHP-Project-main/PHP%20-%20server/Login%20-%20functions/main.php" method="get">
                <label for="email"></label>
                <input type="email" name="email" placeholder="Email -" required><br>
                <input type="password" name="password" placeholder="Password -" required><br>
                <button name="btn" value="login">Login</button>
            </form>
            <a href="">Forget your password</a><br>
        </div>
           <!-- <a href="">How have a Problem ? contact us</a> -->
    </div>
</body>

</html>