<!DOCTYPE html>
<html>
<head>
    <title>Message Sent</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
</head>
    
      <nav>
        <img src="images/logo.png" alt="logo" />
        <a href="contact.html">Get Your Card</a>
    </nav>
    
    <header>
    <div class="menu">
        <a href="index.html">Home</a>
        <a href="https://www.taprproducts.com">Products</a>
        <a href="contact.html">Contact</a>
    </div>
    </header>
        
<body>
    
<?php
    if(isset($_POST['submit']))
    {
        $mailto = "amanda_gayer@mail.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date = date('m/d/Y h:i:s a', time());
        $from = 'contact@taprproducts.com';
        $subject = 'Tap\'r message from ' . $name;
        $subject2 = "Confirmation: Message was submitted successfully | Tap'r Products";
        $msg = "From: " . $name . "\n\n" .
               "Email: " . $email . "\n\n" .
               "Message: " . $message . "\n\n" .
               "Submitted: " . $date . "\n";
        $msg2 = "Dear " . $name . "\n\n" .
               "Thank you for contacting us. We will get back to you shortly!" . "\n\n" .
               "The Tap'r Team" . "/n" .
               "Submitted: " . $date . "\n";
        $headers = "From: " . $email;
        $headers2 = "from " . $mailto;
    
        result1 = mail($mailto, $subject, $msg, $headers);
        result2 = mail($email, $subject2, $msg2, $headers2);
    
        if(result1 && result2) {
            $sucess = "Your Message was sent successfully!"
        } else {
            $failed = "There was an error. Please try again later."
        }
    }
    
  
        echo "<p>Your message has been sent</p><body style=\"background-color: green\">";
        echo $date;
        mail($to, $subject, $msg, 'From:' . $from);
   
    echo "<br /><br /><input type=\"button\" onclick=\"location.href='employeeStatus.html'\" value=\"New Form\" />";
    
    ?>
</body>
</html>
