<?php include('functions.php');
$cid = $_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
  <?php include('navigation.php');
  $data = performQuery("SELECT customers.id, comp_name, customers.mail, phone_cus, contact_person, customers.address, customers.postal, customers.city, assigned_employee, employees.id, employees.f_name, employees.l_name FROM customers INNER JOIN employees ON customers.assigned_employee = employees.id WHERE customers.id=$cid");
  $info = mysqli_fetch_assoc($data);
  ?>

  <div class="site-width">
    <div class="left">
      <p>Firma navn: <?php echo $info['comp_name']; ?> </p>
      <p>Kontakt person: <?php echo $info['contact_person']; ?></p>
      <p>Mail: <a href="mailto:<?php echo $info['mail']; ?>"><?php echo $info['mail']; ?></a></p>
      <p>Tlf: <?php echo $info['phone_cus']; ?></p>
      <p>Adresse: <?php echo $info['address']; ?></p>
      <p>Postnummer: <?php echo $info['postal'] ." " . $info['city']; ?></p>
    </div>
    <div class="right">
      <p class="center-text">Ansvarlig medarbejder</p>
      <hr id="line">
      <p class="center-text"><a href="employees-single.php?eid=<?php echo $info['id'];?>"><?php echo $info['f_name'] ." ". $info['l_name']; ?></a></p>
    </div>
  </div>
  </body>
</html>
