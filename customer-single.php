<?php include('functions.php');
$cid = $_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
  <?php include('navigation.php');
  $data = performQuery("SELECT id, comp_name, mail, contact_person, phone_cus FROM customers WHERE id='$cid'");
  $info = mysqli_fetch_array($data);
  ?>
  <div class="site-width">
    <div class="left">
      <p>Firma navn: <?php echo $info['comp_name']; ?> </p>
      <p>Kontakt person: <?php echo $info['contact_person']; ?></p>
      <p>Mail: <a href="mailto:<?php echo $info['mail']; ?>"><?php echo $info['mail']; ?></a></p>
      <p>Tlf: <?php echo $info['phone_cus']; ?></p>
    </div>
    <div class="right">
      <p class="center-text">Ansvarlig medarbejder</p>
      <hr id="line">

    </div>
  </div>
  </body>
</html>
