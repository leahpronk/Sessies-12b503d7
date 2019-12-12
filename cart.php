<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Skateboard (#1)</h1>
	<h2>Basketbal (#2)</h2>
	<h3>Skeelers (#3)</h3>
		<form action='cart.php' method='post' class='form'>
      <input type='text' name='keuze' id='keuze' required>
      <input type='submit' name='btn' id='btn' value='submit'>
    </form>
    
<?php

$keuze1 = "#1";
$keuze2 = "#2";
$keuze3 = "#3";
$_SESSION[$keuze1] = "#1";
$_SESSION[$keuze2] = "#2";
$_SESSION[$keuze3] = "#3";

if (isset($_POST['btn'])) {
	$input = $_POST['keuze'];

	if ($_SESSION[$input]) {
		echo "<h1> je keuze is" . $_SESSION[$input] . '</h1>';
	}
}

?>
</body>
</html>