<?php

require_once("connection.php");
$code=$_GET['code'];
$requete0="select * from prof where id_prof='$code'";
$resultat0=mysqli_query($connexion,$requete0);
$ligne=mysqli_fetch_assoc($resultat0);
//$chemin_de_la_photo=$ligne['photo'];
//unlink($chemin_de_la_photo);
$requete="delete from prof where id_prof='$code'";
$resultat=mysqli_query($connexion,$requete);
header("location:teacher.php");
?>


