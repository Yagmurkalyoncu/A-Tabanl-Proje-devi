<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cake Shop</title>
    <link rel="stylesheet" href="home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/eedbcd0c96.js"
      crossorigin="anonymous"
    ></script>
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
            <a href="home.php">Home</a>
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
          </li>
          <a href="#" id="close" onclick="remove()"
            ><i class="fa-solid fa-xmark"></i
          ></a>
        </ul>
      </div>
     
    </section>

    <section id="product1" class="section-p1">
      <h2>Products in cart</h2>
      <div class="cart-total-display">
        <p>Total Item's in Cart :</p>
        <div class="js-shop-quantity pro-quantity cart-page-total"></div>
        <div class="js-total-price-products pro-total-price"></div>
      </div>
      <div>
        <button class="cart-clear-btn js-clear-cart" onclick="clearCartProduct();">Clear Cart</button>
      </div>
    </section>
  
    <div class="cart-product-container"></div>
    <section></section>
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

    
    </footer>

    <script src="scripts/cart.js ?v=<?php echo time();?>"></script>
    <script src="scripts/products.js ?v=<?php echo time();?>"></script>
  </body>
</html>