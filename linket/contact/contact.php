<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Elise</title>
        <link rel="stylesheet" type="text/css" href="style-contact.css">
    </head>
    <body>
    <script src="validateContact.js"></script>
    <header>
        <div class="main">
            <div class="logo">
                <img src="../../logo.png">
                <div class="links">
                    <ul>
                        <li class="active"><a > Contact</a></li>    
                        <li> <a href="../loginRegister/loginRegister.php">Register</a></li>
                        <li><a href="../../index.php">Home</a></li>
                        
                    </ul>
                </div>  
                <form class="register-form ">
                <div class="login-page">
                    <div class="form" >

                            <h2 style="font-family: Arial, Helvetica, sans-serif; color: grey;">Insert your info!</h2>
                            <input id="emaili" type="text" placeholder="email" required >
                            <h1 id="results"></h1>
                            <textarea id="textarea" name="text" class="formcontrol" placeholder="message" row="4" required ></textarea>
                            
                            <button onclick="validation()">Submit</button>
                            </div> 
                        </form>
                </div>
    </header>

    </body>
</html>