<?php include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kunder</title>
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <p><a href="customers.php?kategori=3">Små virksomheder</a> </p>
    <p><a href="customers.php?kategori=2">Mellem virksomheder</a></p>
    <p><a href="customers.php?kategori=1">Store virksomheder</a></p>
    <a href="create-customers.php">Opret ny kunde</a>
    <br>
  
    <?php if(isset($_GET['kategori'])) {
      $kategori = $_GET['kategori'];
      $data = performQuery("SELECT id, comp_name FROM customers  where cus_type= $kategori");
    }else {
      $data = performQuery("SELECT id, comp_name FROM customers");
    }

    while($row = mysqli_fetch_array($data)) { ?>
      <a href="customer-single.php?cid=<?php echo $row['id']; ?>">
          <?php echo $row['comp_name']; ?>
        </a>
        <br>
      <?php } ?>


  </body>
</html>
