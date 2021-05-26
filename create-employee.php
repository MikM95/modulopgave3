<?php
include('functions.php');

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opret medarbejder</title>
    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>
    <?php include('navigation.php') ?>
<p class="center-text-bold">Udfyld venligst <span class="bold">alle</span> felter!</p>

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
          <input type="date" name="hiring_date" placeholder="Ansættelsesdato">
        </div>
        <div class="line-breaker">
          <input type="text" name="pay_num" placeholder="Lønnummer">
        </div>
        <div class="line-breaker">
          <input type="email" name="mail" placeholder="Email">
          <input type="text" name="phone_emp" placeholder="Tlf. nummer">
        </div>
        <div class="line-breaker">
          <input type="text" name="username" placeholder="Brugernavn">
          <input type="password" name="password" placeholder="Adgangskode">
        </div>
        <div class="line-breaker">
          <?php //på linje 42 til 51 har jeg trukket data ud af databasen, det er egentligt unødvendigt at lave det variblet på nuværende tidspunkt, da det ikke er muligt at oprette nye roller på siden, men hvis det engang bliver muligt opdaterer denne "select meny" automatisk opdateret med evt. nye roller ?>
          <label for="role_id">Vælg medarbejder rolle: </label>
          <select name="rolle_id">
            <?php $data = performQuery("select * from employee_role");
            while($row = mysqli_fetch_assoc($data)) { ?>
              <option value="<?php echo $row['role_id']; ?>"><?php echo $row['role'];?></option>
            <?php } ?>
          </select>
        </div>
        <div class="button">
        <button type="submit">Opret medarbejder</button>
      </form>
    </div>

    <?php



        if (isset($_POST['f_name'], $_POST['l_name'], $_POST['address'], $_POST['city'], $_POST['postal'], $_POST['pay_num'], $_POST['mail'], $_POST['phone_emp'], $_POST['username'], $_POST['password']))
        //der er noget med isset der har en max værdi af en art. Der kan kun være 10 $_POST[], vi har 11
        //Tina har ret i hvad hun skriver, så jeg har sletet så der kun er 10 $_post værdier det betyder at den ikke tjekker efter en værdi i hiring date + rolle id men begge felter skal stadig udfyldes - hvis alle felter bliver udfyldt virker formularen nu!
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
            $role_id = $_POST['role_id'];

            performQuery("INSERT INTO employees (f_name, l_name, address, city, postal, pay_num, mail, phone_emp, username, password, role_id, hiring_date) VALUES ('$f_name', '$l_name', '$address', '$city', $postal,'$pay_num', '$mail', $phone_emp, '$username', '$password', $role_id, $hiring_date)");
          }
        ?>


 </div>

  </body>
</html>

<?php //
 //$_POST['hiring_date'],
 //
 //hiring_date,
  //$hiring_date,  ?>
