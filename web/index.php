<?php
$archivio = "conta.txt"; // Archivio il numero di visitatori
if(file_exists($archivio)){
$conta = file_get_contents($archivio);
$cook = $_COOKIE[‘cooki’]; // leggiamo il cookie
if (!$cook)$contatore ++; // // se non esiste il cookie incremento i visitatori

}else{
// Creo archivio contatore. Sarà con la prima visita
touch($archivio);
chmod($archivio, 0755);
$conta= 1;
}


setcookie("cook",1, time() + 3600);


file_put_contents($archivio, $conta);
echo $conta
?> 
