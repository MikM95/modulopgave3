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
          <input type="text" placeholder="Fornavn">
          <input type="text" placeholder="Efternavn">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Adresse">
          <input type="text" placeholder="By">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Postnummer">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Lønnummer">
          <input type="date" placeholder="Ansættelsesdato">
        </div>
        <div class="line-breaker">
          <input type="email" placeholder="Email">
          <input type="text" placeholder="Tlf. nummer">
        </div>
        <div class="line-breaker">
          <input type="text" placeholder="Brugernavn">
          <input type="password" placeholder="Adgangskode">
        </div>
        <button type="submit" id="more-right">Opret kunde</button>
      </form>
    </div>


  </body>
</html>
