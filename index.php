
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Elise</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="logo.png">
                </div>
                <div >
                <ul class="links" >
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="loginRegister.php">Login/Register</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="ctg">
                <h2>Parfumes as weird as you are :)</h2>
            </div>
            </div>
        </header>
        <div class="dp1" >
        <div class="row">
            <div  class='box-container' id="cologne1" >
                <a href="#" class='rate'>Rate this product</a>
                <img  src="product1/parfume2.png" alt="dior">
                <h2>Dior Sauvage</h2>
                <div class="hide">Spray on a bit of Dior Sauvage by Christian Dior before heading out for the night to enjoy the masculine combination of spicy bergamot, peppery patchouli and a cedar dry down that mingles with your natural essence</div>
                <h2><a href="buyProduct.html"> Buy for:170€ </a></h2>

            </div>
            <div class='box-container' id="cologne2">
                

            <a href="#" class='rate'>Rate this product</a>
                <img  src="product1/parfume1.png" alt="versace">

                <h2>Versace Eros </h2>
                <div class="hide">You'd expect nothing less than a manly fragrance from the design house of Versace, and you'll get it with Versace Eros, a decadent fragrance for men of distinction. </div>
                <h2><a href="buyProduct.html">Buy for:100€</a></h2>
            </div>
            <div class='box-container' id="cologne3">

            <a href="#" class='rate'>Rate this product</a>
                <img  src="product1/parfume3.png" alt="burberry">

                <h2>Burberry Touch</h2>
                <div class="hide">This perfume features top and mid notes that are predominantly fruity and floral. The aromas of citrus and rose give Burberry Touch a soft, feminine scent, while the stronger base notes of cedar, vanilla, and oakmoss add a subtle warmth.</div>
                <h2><a href="buyProduct.html"> Buy for:80€ </a></h2>
            </div>
        </div>
        </div>
        
        <div class="dp2">
        <div class="row">
            <div class='box-container' id="cologne4">

            <a href="#" class='rate'>Rate this product</a>
                <img src="product1/parfume4.png" alt="invictus">

                <h2>Invictus</h2>
                <div class="hide">Invictus. Incarnation of a man in all his power. Absolute hero. Blessed by the gods and ready to take on any challenge. Invictus men fragrance embodies the victory. A phenomenal shock between sharp freshness and animal sensuality.</div>
                <h2><a href="buyProduct.html">Buy for:80€ </a></h2>
                
            </div>
            <div class='box-container' id="cologne5">

            <a href="#" class='rate'>Rate this product</a>
                <img  src="product1/parfumee5.png" alt="1million">

                <h2>1Million</h2>
                <div class="hide">1 Million. The scent of insolence. A seductive wake, irresistible. There is never too much gold for 1 Million. A bad boy who views life as BIG. Otherwise, what's the point? Does not obey anyone except his fantasies. Golden rule. And he gets what he wants. In a snap.</div>
                <h2><a href="buyProduct.html">Buy for:75€</a></h2>
            </div>
            <div class='box-container' id="cologne6">

                <a href="#" class='rate'>Rate this product</a>
                <img  src="product1/parfume6.png" alt="D%G">

                <h2>D%G Light Blue</h2>
                <div class="hide">D & G Light Blue by Dolce & Gabbana is a fragrance made for the casual woman. Introduced in 2001, this perfume features a subtle scent that will bring you the attention you desire. Its mix of apple, rose, jasmine and musk fragrances gives it a unique scent that is perfect for your events.</div>
                <h2><a href="buyProduct.html">Buy for:60€</a></h2>
            </div>
        </div>
        </div>
        </div>
        <div>
        <div class="slideshow-container">

            <div class="mySlides">
              <q>“Each time we inhale or smell a Perfume, we are all going on our own very personal Perfume journey”</q>
              <p class="author">-Huib Maat</p>
            </div>
            
            <div class="mySlides">
              <q>“The beauty of fragrance is that it speaks to your heart…and hopefully someone else's”</q>
              <p class="author">– Elizabeth Taylor.</p>
            </div>
            
            <div class="mySlides">
              <q>“The best investments in every man’s life are a custom tailored suit and an expensive cologne. It’s like buying the best first impression.”</q>
              <p class="author">-Massimo Ferragamo</p>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            
            </div>
            
            <div class="dot-container">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

            <div class="social">
            <img style="width: 150px;" class="logo" src="logo.png" alt="logo">
            <a href="#"><img src="fblogo.png" alt="facbook"></a>
            <a href="#"><img src="iglogo.png" alt="facbook"></a> 
            </div>    
            </div>
            <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
             x.className += " responsive";
            } else {
              x.className = "topnav";
            }
            }
            </script>
        <script src="main.js"></script>
    </body>
</html>