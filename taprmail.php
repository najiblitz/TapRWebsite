<?php include 'tapr.php';?>

<!DOCTYPE html>

<html style="background-color: black">

<head>
    <title>tap'R Products - Innovative Business</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
</head>

<header>
    <nav>
        <img src="images/logo.png" alt="logo" />
        <a href="contact.html">Get Your Card</a>
    </nav>
    
    <div class="menu">
        <a href="index.html">Home</a>
        <a href="products.html">Products</a>
        <a href="contact.php">Contact</a>
    </div>
    </header>
    
    <body>
    <div class="mainImg">
        <img src="images/logo.png" alt="switch" style="display: block; margin-left: auto; margin-right: auto">
    </div>
        
       <div class="form"> 
        <form method="post" action="tapr.php">
      
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required/><br /><br />
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required/><br /><br />
      
      <label for="message">Message:<br/></label>
            <textarea rows="10" cols="50" name="message" required>
            </textarea><br /><br />
      
      <input type="submit" value="Send Message" name="submit"/>
            
  </form>
        
        </div>
        
    </body>
    
       <footer>
            Tap'r Products&copy;
        </footer>
    
    
</html>