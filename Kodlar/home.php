<html>

<head>
    <title>MY WEBSITE</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="header">
        <div class="logo">
            <a href="#" onclick="window.location.href='home.php';">
                <img src="imgs/logo.png" alt="" class="imglogo" />
            </a>
        </div>

        <div>
            <ul id="navbar">
                <li>
                    <a href="home.php" class="active">Home</a>
                </li>

                <li>
                    <a href="menu.php">Menu</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                  </li>
                  <div class="js-shop-quantity pro-quantity"></div>
          <li>
            <i
              id="shopbag"
              class="fa-sharp fa-solid fa-cart-shopping js-cart-click"
            ></i>
          </li>-
          <a href="#" id="close" onclick="remove()"
            ><i class="fa-solid fa-xmark"></i
          ></a>
        </ul>
        </div>
        
    </section>
 

</div>
    <section id="hero">
      <h1>Sweet Treats from </h1>
      <h2>the Land of Fairy Tale</h2>
      <p>Turkey's Best</p>
    </section>

    <section id="feature" class="section-p1">
      <div class="featurebox">
        <img src="imgs/4.jpg" alt="" class="fsimg" />
        <h4>Strawberry Cake</h4>
      </div>
      <div class="featurebox">
        <img src="imgs/Lemon.jpg" alt="" class="fsimg" />
        <h4>Lemon&Blueberry Cake</h4>
      </div>
      <div class="featurebox">
        <img src="imgs/Chocolate Cake.jpg" alt="" class="fsimg" />
        <h4>Triple Chocolate Cake</h4>
      </div>
      <div class="featurebox">
        <img src="imgs/Sugar Cookies.jpg" alt="" class="fsimg" />
        <h4>Sugar Cookies</h4>
      </div>
      <div class="featurebox">
        <img src="imgs/Chocolate Chip Cookies.jpg" alt="" class="fsimg" />
        <h4>Chocolate Chip Cookies</h4>
      </div>
    </section>
  
    <section id="product1" class="section-p1">
      <h2>BEST SELLER</h2>
      <h3>Cake&Cookies</h3>
    </section>

    
  <section id="banner">
      <h2>Weekday <span>9.00-19.00</span> Weekend <span>10.00-17.00</span></h2>
    </section>

    <section id="newslater">
      <div class="newstxt">
        <h4>Need a quote for a large order or event?</h4>
        <p>Don't forget to connect wit us</p>
        <a href="#" onclick="window.location.href='contact.php';">
                <img src="imgs/connact.png" alt="" class="connactlogo" />
            </a>
            
      </div>
      
    </section>

    <footer class="section-p1">
      <div class="col">
        <img src="imgs/logo.png" alt="" class="footlogo" />
        <h4>Contact</h4>
        <p><strong>Address : </strong>Meşrutiyet Caddesi No:17 Kızılay/Ankara</p>
        <p><strong>Phone : </strong>+90 5323128796</p>
    </footer>
   

    <script src="scripts/cart.js ?v=<?php echo time();?>"></script>
    <script src="scripts/products.js ?v=<?php echo time();?>"></script>
  </body>
</html>