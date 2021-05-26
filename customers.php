<?php include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kunder</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <a href="create-customers.php" class="none"><div class="new_x">Opret ny kunde</div></a>

    <div class="contet-wrapper">
      <div class="sorting">
        <ul>
          <li>Kategorier:</li>
          <a href="customers.php?kategori=3"><li>Små virksomheder</li></a>
          <a href="customers.php?kategori=2"><li>Mellem virksomheder</li></a>
          <a href="customers.php?kategori=1"><li>Store virksomheder</li></a>
        </ul>
      </div>
      <main>
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
    </main>
  </div>
  </body>
</html>
