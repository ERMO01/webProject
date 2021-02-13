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
                <div class="form">
                    <form class="register-form" method="post" action="login.php">
                        <h2 style="font-family: Arial, Helvetica, sans-serif; color: grey;">Insert your info!</h2>
                        <input id="username" name="user_name" type="text" placeholder="user name">
                        <input id="password" name="password" type="password" placeholder="password">
                        <button name="login" onclick="validation()">Submit</button>
                        <p class="message">Not registered? <a href="loginRegister.php">Register</a></p>
                    </form>
                </div>
            </div>
    </body>
</html>