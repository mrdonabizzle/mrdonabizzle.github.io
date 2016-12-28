<?php

if($_POST["submit"]) {
    $recipient="wpdonabedian@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">  	
    <link rel="shortcut icon" href="images/favicon.ico" type="image/favicon.ico">
    <meta charset="utf-8">
    <title>Will D's Cool Stuff: Contact Me</title>
  </head>
  <body>
  	<header>
    <h1><a href="index.html"><img class="logo" src="images/willd-logo.png" alt="Will D's Logo"></a></h1>
    <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="aboutme.html">About Me</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="otherstuff.html">Other Stuff</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>        
      </nav>
    </header>
    <main>
    <article>
    <h2>Contact</h2>
    <p>Contact me.</p>
    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>
</html>
    <p><a href="index.html">Back to Home Page</a></p>
    </article>
    </main>
    <footer>
      <p>©Copyright 2017 by Will D. All rights reserved.</p>
    </footer>
    <script src="scripts/resume-page.js"></script>
  </body>
</html>