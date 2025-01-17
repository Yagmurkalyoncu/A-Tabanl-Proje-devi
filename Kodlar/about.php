
<html>
  <head>
    <title>MY WEBSITE</title>
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
          </li>
          <a href="#" id="close" onclick="remove()"
            ><i class="fa-solid fa-xmark"></i
          ></a>
        </ul>
        </div>
    </section>

    <div id="aboutdiv" class="section-p1">
      <img src="imgs/about.webp" alt="" />
      <div>
        <h2>Who are we ?</h2>
        <p>
          At Purble Cake Shop, we are a team of dedicated and passionate
          bakers on a mission to create unforgettable cake experiences. With our
          expertise and love for baking, we pour our hearts into crafting the
          most delicious and visually stunning cakes for every occasion. From
          elegant wedding cakes to whimsical birthday creations, we believe that
          every celebration deserves a centerpiece that not only looks
          incredible but also tastes divine. Using only the finest ingredients,
          we meticulously bake and decorate each cake to perfection, ensuring
          that every bite is a moment of pure indulgence. We are committed to
          exceeding your expectations, bringing smiles to faces, and creating
          memories that last a lifetime with our delectable creations. Welcome
          to our cake shop, where sweetness and creativity blend harmoniously to
          delight your senses.
        </p>

        <marquee behavior="" direction=""
          >Where Every Slice is a Sweet Delight - Welcome to Purble Cake Shop</marquee
        >
      </div>
    </div>

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