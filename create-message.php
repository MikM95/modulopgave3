<?php
  include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nyt opslag</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <br>
    <form method="post">
      <div class="line-breaker">
        <label for="sent_by">Vælg dig selv: </label>
        <select name="sent_by">
          <?php $data = performQuery("SELECT id, f_name, l_name FROM employees");
          while($row = mysqli_fetch_assoc($data)) { ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['f_name'];
              echo " ";
              echo $row['l_name']; ?></option>
            <?php } ?>
        </select>
      </div>
      <textarea name="message" rows="8" cols="80" placeholder="Skriv dit opslag her"></textarea>
      <button type="submit">Slå op</button>
    </form>
    <?php if(isset($_POST['message'], $_POST['sent_by'])){
      $finalmessage = $_POST['message'];
      $by = $_POST['sent_by'];
      performQuery("INSERT INTO messages(message, sent_by) VALUES('$finalmessage', $by)");

    } ?>
  </body>
</html>
