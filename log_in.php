<?php
include('functions.php');

//prepare
if ($stmt = $mysqli->prepare('SELECT id, password FROM employees WHERE username = ?')) {
	// Bind parameter. 's' står for string
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// opbevar resulat
	$stmt->store_result();

  if ($stmt->num_rows > 0) {
  	$stmt->bind_result($id, $password);
  	$stmt->fetch();

			// password tjek
  	if ($_POST['password'] === $password) {

  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $_POST['username'];
  		$_SESSION['id'] = $id;

  		header('Location: messageboard.php');

  	} else {
  			echo 'Forkert brugernavn eller password';
  	}
  } else {
  		echo 'Forkert brugernavn eller password';
  }

	$stmt->close();
}
?>
