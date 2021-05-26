<?php
include('functions.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kunde oprettelse</title>
    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>
    <?php include('navigation.php') ?>
    <p class="center-text-bold">Udfyld venligst <span class="bold">alle</span> felter!</p>
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
          <input type="number" name="postal" placeholder="Postnummer">
        </div>
        <div class="line-breaker">
          <input type="text" name="contact_person" placeholder="Kontakt person">
        </div>
        <div class="line-breaker">
          <label for="cus_type">Vælge kundetype: </label>
          <select name="cus_type">
            <option value="3">Lille virksomhed</option>
            <option value="2">Mellem virksomhed</option>
            <option value="1">Stor virksomhed</option>
          </select>
        </div>
        <div class="line-breaker">
          <label for="assigned_employee">Vælg ansvarlig medarbejder: </label>
          <select name="assigned_employee">
            <?php $data = performQuery("SELECT id, f_name, l_name FROM employees");
            while($row = mysqli_fetch_assoc($data)) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['f_name'];
                echo " ";
                echo $row['l_name']; ?></option>
              <?php } ?>
          </select>
        </div>
        <div class="button">
        <button type="submit" >Opret kunde</button>
        </div>
      </form>
    </div>
    <?php
      if (isset($_POST['comp_name'], $_POST['mail'], $_POST['phone_cus'], $_POST['address'], $_POST['city'], $_POST['postal'], $_POST['contact_person'], $_POST['cus_type'], $_POST['assigned_employee']))
      {
        $comp_name = $_POST['comp_name'];
        $mail = $_POST['mail'];
        $phone_cus = $_POST['phone_cus'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];
        $contact_person = $_POST['contact_person'];
        $cus_type = $_POST['cus_type'];
        $assigned_employee = $_POST['assigned_employee'];

        performQuery("INSERT INTO customers (comp_name, mail, phone_cus, address, city, postal, contact_person, cus_type, assigned_employee) VALUES ('$comp_name', '$mail', $phone_cus, '$address', '$city', $postal, '$contact_person', $cus_type, $assigned_employee)");
      }
      ?>
  </body>
</html>
