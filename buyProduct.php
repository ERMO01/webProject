<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Buy Product</title>
        <link rel="stylesheet" type="text/css" href="buyProduct-style.css">
</head>
    <body>
        <script src="../buyProduct/scriptBuy.js"></script>
        <div class="logo">
            <img src="../../logo.png" alt="logo">
        </div>
        <div class="login-page">
            <div class="form">
                <form class="register-form">
                    <h1 style="font-family: Arial, Helvetica, sans-serif; color: grey;">Buy product!</h1>
                    <h2 style="font-family: Arial, Helvetica, sans-serif; color: grey;">Please insert your info!</h2>
                    <input id="nrcard" type="number" placeholder="Credit number">
                    <input id="emri" type="text" placeholder="Emri dhe Mbiemri">
                    <input id="adresa" type="text" placeholder="Adress">
                    <button onclick="validation()">Submit</button> 
                </form>
            </div>
        </div>
        
    </body>
</html>