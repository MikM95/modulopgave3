<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opret medarbejder</title>
    <link rel="stylesheet" href="css/index.css">

  </head>
  <body>
    <?php include('navigation.php') ?>


    <div class="formular">
      <form method="post">
        <div class="line-breaker">
          <input type="text" placeholder="Virksomheds navn">
          <input type="text" placeholder="Telefon nummer">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Adresse">
          <input type="text" placeholder="Mail">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="By">
          <input type="text" placeholder="Kunde type">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Postnummer">
          <input type="text" placeholder="Ansvarlig medarbejder">
        </div>
        <button type="submit" id="more-right">Opret kunde</button>
      </form>
    </div>


  </body>
</html>
