<?php

require_once("connection.php");
$code=$_GET['code'];
$requete0="select * from etudiant where id_etud='$code'";
$resultat0=mysqli_query($connexion,$requete0);
$ligne=mysqli_fetch_assoc($resultat0);
//$chemin_de_la_photo=$ligne['photo'];
//unlink($chemin_de_la_photo);
$requete="delete from etudiant where id_etud='$code'";
$resultat=mysqli_query($connexion,$requete);
header("location:student.php");
?>


