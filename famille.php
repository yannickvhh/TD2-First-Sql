<?php
//identifier le nom de base de données
$database = "famille";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement
$choice = isset($_POST["choix"])? $_POST["choix"] : "";
if (empty($choice)) {
$choice = 0;
}
$choice = (int)$choice;
$sql = "";
//Si la BDD existe
if ($db_found) {
//code MySQL. $sql est basé sur le choix de l’utilisateur
switch ($choice) {
case 1:
$sql = "SELECT * FROM membre";
break;
case 2:
$sql = "SELECT * FROM membre ORDER BY Prenom";
break;
case3:
$sql = "SELECT * FROM membre ORDER BY Prenom DESC";
break;
case 4:
$sql = "SELECT * FROM membre WHERE DateDeNaissance < '1960-01-01'";
break;
case 5:
$sql = "SELECT * FROM membre WHERE Prenom LIKE 'G%'";
break;
case 6:
$sql = "SELECT * FROM membre WHERE Prenom LIKE '%MA%'";
break;
case 7:
$sql = "";
break;
case 8:
$sql = "";
break;
default:
$sql = "SELECT * FROM membre";
break;
}
//votre code ici


 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "ID: " . $data['ID'] . "<br>";
 echo "Nom:" . $data['Nom'] . "<br>";
 echo "Prénom: " . $data['Prenom'] . "<br>";
 echo "Statut: " . $data['Statut'] . "<br>";
 echo "Date de naissance: " . $data['DateDeNaissance'] . "<br>";
 $image = $data['Photo'];
 echo "<img src='$image' height='80' width='100'>" . "<br>";
 }//end while
}

//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>