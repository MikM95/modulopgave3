<?php
include('functions.php');

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kunde oprettelse</title>
    <link rel="stylesheet" href="css/index.css">

  </head>
  <body>
    <?php include('navigation.php') ?>


    <div class="formular">
      <form method="POST">
        <div class="line-breaker">
          <input type="text" name="comp_name" placeholder="Virksomheds navn">
          <input type="text" name="phone_cus" placeholder="Telefon nummer">
        </div>
        <div class="line-breaker">
          <input type="text" name="address" placeholder="Adresse">
          <input type="text" name="mail" placeholder="Mail">
        </div>
        <div class="line-breaker">
          <input type="text" name="city" placeholder="By">
          <input type="text" name="cus_type" placeholder="Kunde type">
        </div>
        <div class="line-breaker">
          <input type="text" name="postal" placeholder="Postnummer">
          <input type="text" name="assigned_employee" placeholder="Ansvarlig medarbejder">
        </div>
        <div class="line-breaker">
          <input type="text" name="contact_person" placeholder="Kontakt person">
        </div>
        <div class="button">
        <button type="submit" >Opret kunde</button>
        </div>
      </form>

    <?php

    $comp_name = $_POST['comp_name'];
    $mail = $_POST['mail'];
    $phone_cus = $_POST['phone_cus'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];
    $contact_person = $_POST['contact_person'];
    $cus_type = $_POST['cus_type'];
    $assigned_employee = $_POST['assigned_employee'];
      //performQuery("INSERT INTO customers(comp_name) VALUES($_POST['1'])");
      if (isset($_POST['comp_name'], $_POST['mail'], $_POST['phone_cus'], $_POST['address'], $_POST['city'], $_POST['postal'], $_POST['contact_person'], $_POST['cus_type'], $_POST['assigned_employee']))
      {


        /*INSERT INTO customers(comp_name, mail, phone_cus, address, city, postal, contact_person, cus_type, assigned_employee) VALUES ($comp_name, 'Mad@mail.com', 45455656, 'Madvej 1', 'Vejen', 6600, 'Peter Madsen', 3, 9)*/


        performQuery("INSERT INTO customers (comp_name, mail, phone_cus, address, city, postal, contact_person, cus_type, assigned_employee) VALUES ('$comp_name', '$mail', $phone_cus, '$address', '$city', $postal, '$contact_person', $cus_type, $assigned_employee)");
      
 ?>
    </div>



  </body>
</html>
