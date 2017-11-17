<?php
$nome="Mio_cookie";
$tempo=time()+3600*24*7;


if(!isset($_COOKIE['Mio_cookie'])
{
  valore=1;
  print("E'la prima volta che entri in questo sito");
  setcookie($nome, $valore,$tempo);
}  
else
	{
		$valore = $_COOKIE['Mio_cookie'];
		echo "Vecchio valore cookie: ". $_COOKIE['Mio_cookie'];
		$valore = ++$_COOKIE['Mio_cookie'];
		echo "Nuovo valore cookie: ". $_COOKIE['Mio_cookie'];
		setcookie($nome, $valore,$tempo);
	}
?>


<!DOCTYPE html>
<html>
 <head>
  <title>PROVA</title>
 </head>
 <body>
  <?php
   echo "Hello World! I'm as stupid as a rock";
  ?>
 </body>
</html>
