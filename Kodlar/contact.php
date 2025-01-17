<html>
  <head>
    <title>MY WEBSITE</title>
    <link rel="stylesheet" href="home.css ?v=<?php echo time();?>" />
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


    <section id="contactbar">
      <h2> #Sweet Connections</h2>
  </section>


<section id="contact">
    <div class="container">
        <h2 class="text-uppercase"><br>
            Contact Form
        </h2>
    </div>
    <form action="includes/formhandler.inc.php" method="post" id="contact-form" autocomplete="off">
        <div class="form-group">
            <input required type="text" id="name" name="name"  placeholder="Name" >
        </div>
        <div class="form-group">
            <input required type="text" id="email" name="email"  placeholder="Email" >
        </div>
        <div class="form-group">
            <input required type="text" id="phone" name="phone" placeholder="Phone" >
        </div>
        <div class="form-group">
           <textarea id="message" name="message" rows="2" placeholder="Message" ></textarea>
        </div>
        <button type="submit" name="submit" >Send</button>        
</section>
<div>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysquel";

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );

    $stmt = $pdo->query("SELECT * FROM comments");
    $veriler = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
  <div class="baslik"><b>LATEST COMMENTS FROM OUR VISITERS</b></div>
<div class="message-container-wrapper">
 
    <?php foreach ($veriler as $veri): ?>
        <div class="message-container">
            <div class="message-header">
                <?= htmlspecialchars($veri['name']); ?> 
                <span class="message-meta"><?= htmlspecialchars(date('d/m/Y', strtotime($veri['created_at']))) ?> - <?= htmlspecialchars(date('H:i', strtotime($veri['created_at']))) ?></span>
            </div>
            <div class="message-body">
                <?= htmlspecialchars($veri['message']); ?> 
            </div>
        </div>
    <?php endforeach; ?>
</div>


<section id="banner">
      <h2>Weekday <span>9.00-19.00</span> Weekend <span>10.00-17.00</span></h2>
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


