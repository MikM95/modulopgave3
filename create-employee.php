<?php
include('functions.php');

 ?>
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
          <input type="text" name="f_name" placeholder="Fornavn">
          <input type="text" name="l_name" placeholder="Efternavn">
        </div>
        <div class="line-breaker">
          <input type="text" name="address" placeholder="Adresse">
          <input type="text" name="city" placeholder="By">
        </div>
        <div class="line-breaker">
          <input type="text" name="postal" placeholder="Postnummer">
        </div>
        <div class="line-breaker">
          <input type="text" name="pay_num" placeholder="Lønnummer">
          <input type="date" name="hiring_date" placeholder="Ansættelsesdato">
        </div>
        <div class="line-breaker">
          <input type="email" name="mail" placeholder="Email">
          <input type="text" name="phone_emp" placeholder="Tlf. nummer">
        </div>
        <div class="line-breaker">
          <input type="text" name="username" placeholder="Brugernavn">
          <input type="password" name="password" placeholder="Adgangskode">
        </div>
        <div class="button">
        <button type="submit">Opret medarbejder</button>
      </form>
    </div>


    <?php



        if (isset($_POST['f_name'], $_POST['l_name'], $_POST['address'], $_POST['city'], $_POST['postal'], $_POST['hiring_date'], $_POST['pay_num'], $_POST['mail'], $_POST['phone_emp'], $_POST['username'], $_POST['password']))
          {
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $postal = $_POST['postal'];
            $hiring_date = $_POST['hiring_date'];
            $pay_num = $_POST['pay_num'];
            $mail = $_POST['mail'];
            $phone_emp = $_POST['phone_emp'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            performQuery("INSERT INTO employees (f_name, l_name, address, city, postal, hiring_date, pay_num, mail, phone_emp, username, password) VALUES ('$f_name', '$l_name', '$address', '$city', $postal, $hiring_date, '$pay_num', '$mail', $phone_emp, '$username', '$password')");
          }
        ?>


 </div>

  </body>
</html>
