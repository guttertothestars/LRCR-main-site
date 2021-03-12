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
      <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <p>
          Little Rome
        </p>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="about.html" class="nav-links">About</a>
            </li>
            <li>
                <a href="service.html" class="nav-links">Service</a>
            </li>
            <li>
                <a href="contact.php" class="nav-links">Contact</a>
            </li>
            <li>
                <a href="#" class="nav-links">Shop</a>
            </li>
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
