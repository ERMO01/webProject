<?php 
    include('server.php');



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login-style.css">
        <title>
        Login/Register
        </title>
    </head>
    <body>   
        <script src=loginValidation.js></script>
        <div class="logo">
            <img src="../../logo.png">
        </div> 
            <div class="links">
                <ul>
                    <li class="active"><a>Login</a></li>
                    <li><a href="../../index.php">Home</a></li>
                    <li ><a href="../contact/contact.php"> Contact</a></li>
                </ul>
            </div>     
            <div class="login-page">
                <div class="form" action="loginRegister.php" methot="post">
                    <?php 
                    include('errors.php');
                    ?>
                    <form class="register-form">
                        <h2 style="font-family: Arial, Helvetica, sans-serif; color: grey;">Insert your info!</h2>
                        <input name="email" id="emaili" type="text" placeholder="email " required>
                        <input  name="user_name" id="usernami" type="text" placeholder="user name" required>
                        <input id="passwordi" type="password" name="password_1" placeholder="password" required>
                        <input id="confirm-pass" name="password_2" type="password" placeholder="Confirm password" required>
                        <button name="register" onclick="validation()">Submit</button>
                        <p class="message">Already registered? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
            <script src="scriptLoginReg.js"></script>
    </body>
</html>