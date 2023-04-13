<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Item Page</title>
    <link rel="stylesheet" type="text/css" href="products.css">
    <link rel="stylesheet" type="text/css" href="Fitness.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="./1222.html"><img src="./logo.png" alt="Healthyfy">
        </a>
      </div>
      
      <form class="search-form" action="/" method="get">
        <input type="text" name="search" placeholder="Search...">
        <button><img src="./search-removebg-preview.png" alt="Search"></button>
      </form>
      <nav>
        <ul>
          <li><a href="1222.html">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="hospital-main.html">Hospital</a></li>          
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="cart">
        <a href="./cart.html"><img src="./cart.png" alt="Cart Logo">
        </a>
      </div>
      <div class="profile">
        <a href="./cart.html"><img src="./profile.png" alt="Profile Logo">
        </a>
      </div>
    </header>
    <section class="banner">
		</section>
      <div class="container">
        <div class="item-image">
          <img src="./fitness/bag.jpg" alt="Item Image">
          <h3>Sfane Duffle Bag</h3>
          <p>polyester 23 cms COMPTT_grey</p>
            <h3>₹386.00</h3> 
            <?php 
              $id1 = 1; 
            ?>
            <br>
            <div class="buttons">
              <a href="Fitness-data.php?error=<?php echo $id1;?>"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>
        </div>

        <div class="item-image">
          <img src="./fitness/bottle.jpg" alt="Item Image">
          <h3>Boldfit Gym Shaker</h3>
          <p>Gym Bottle for Men and Women - 700 Ml</p>
            <h3>₹229.00</h3> 
            <br>
            <?php 
              $id2 = 2; 
            ?>
      
      
            <div class="buttons">
              <a href="Fitness-data.php?error=<?php echo $id2;?>"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>


        <div class="item-image">
          <img src="./fitness/dumbbells.jpg" alt="Item Image">
          <h3>StarX Dumbbells</h3>
          <p>10Kg PVC Dumbbells Set</p>
            <h3>₹799.00</h3> 
            <br>
            <?php 
              $id3 = 3; 
            ?>
            
      
            <div class="buttons">
              <a href="Fitness-data.php?error=<?php echo $id3;?>"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>
        
        <div class="item-image">
          <img src="./fitness/hand grip.jpg" alt="Item Image">
          <h3>Strauss Hand Grip</h3>
          <p>HandGrip With Smart Counter</p>
            <h3>₹229.00</h3> 
            <br>
            <?php 
              $id4 = 4; 
            ?>  
      
            <div class="buttons">
              <a href="Fitness-data.php?error=<?php echo $id4;?>"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>
      </div>

      <div class="container">
        <div class="item-image">
          <img src="./fitness/kit.jpg" alt="Item Image">
          <h3>Vifitkit Yoga matt with bag</h3>
          <p>Outdoor Workout for Men & Women</p>
            <h3>₹399.00</h3> 
          
            <br>
            <?php 
              $id1 = 1; 
            ?>
            <div class="buttons">
              <a href="Fitness.php"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>

        <div class="item-image">
          <img src="./fitness/rope.jpg" alt="Item Image">
          <h3>Jump Rope</h3>
          <p>Polypropylene Standard Jump Rope, Grey</p>
            <h3>₹309.00</h3> 
            <br>
            <?php 
              $id1 = 1; 
            ?>
      
      
            <div class="buttons">
              <a href="Fitness.php"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>


        <div class="item-image">
          <img src="./fitness/wrist band.jpg" alt="Item Image">
          <h3>Boldfit Wrist Supporter</h3>
          <p>Wrist Band for Men & Women with Thumb Loop </p>
            <h3>₹197.00</h3>
            <br>
            <?php 
              $id1 = 1; 
            ?>
            <div class="buttons">
              <a href="Fitness.php"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>
            </div>        </div>
        
        <div class="item-image">
          <img src="./fitness/yoga.jpg" alt="Item Image">
          <h3>Gaiam Thick Yoga Mat</h3>
          <p>Exercise Mat with Easy-Cinch Yoga Mat Carrier</p>
            <h3>₹289.00</h3> 
            <br>
            <?php 
              $id1 = 1; 
            ?>
            <div class="buttons">
              <a href="Fitness.php"><input class="add-to-cart" type="button" value="Add to Cart"></a>
              <a href="Fitness.php"></a><input class="buy-now"type="button" value="Buy Now"></a>  
            </div>        </div>
  </body>
</html>

