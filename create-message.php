<?php
  include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nyt opslag</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <br>
    <form method="post">
      <input type="number" name="sent_by" placeholder="Indtast medarbejder id">
      <br>
      <br>
      <textarea name="message" rows="8" cols="80" placeholder="Skriv dit opslag her"></textarea>
      <button type="submit">Slå op</button>
    </form>
    <?php if(isset($_POST['message'], $_POST['sent_by'])){
      $finalmessage = $_POST['message'];
      $by = $_POST['sent_by'];
      performQuery("INSERT INTO messages(message, sent_by) VALUES('$finalmessage', $by)");

    } ?>
  </body>
</html>
