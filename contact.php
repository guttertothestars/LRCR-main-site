<?php

if($_POST["submit"]) {
    $recipient="walker@littleromecyclerepair.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>


<html>

<head>
  <meta charset="utf-8">
  <title>Little Rome - Contact</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://use.typekit.net/rpo2apn.css">

</head>
<body>
  <div class="content">
    <header>
      <p class="secondary-header">
        Little Rome
      </p>

      <nav>
        <ul class="navbar">
          <li class="navbar-items"><a href="index.html">Home</a></li>
          <li class="navbar-items"><a href="service.html">Service</a></li>
          <li class="navbar-items"><a href="contact.php">Contact</a></li>
          <li class="navbar-items"><a href="shop.html">Shop</a></li>
        </ul>
      </nav>
    </header>

    <?=$thankYou ?>

    <form method="post" action="contact.php" class="contact-form-container">

      <label for="name">
        <p>
          Name
        </p>
        <input id="name" name="sender" required>
      </label>


      <label for="email-address">
        <p>
          Email address
        </p>
        <input id="email-address" type="text" name="senderEmail" required>
      </label>

      <label for="message">
        <p>
          About you
        </p>
        <p>
          Please include details about yourself and what you're looking for in service, wheel builds, or bike builds.
        </p>
        <textarea id="message" rows="5" cols="20" name="message" required>
        </textarea>
      </label>

      <label for="submit">
        <input type="submit" name="submit">
      </label>
    </form>
  </div>

  <footer class="footer footer-secondary">

    <p><q>Sine labore non erit panis in ore.</q> - Bobby Byrd</p>

    <p>
      &copy; ab urbe condita MMDCCLXXIV
    </p>
  </footer>
</body>

</html>
