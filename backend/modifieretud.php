<?php
require_once("connection.php");
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$niv=$_POST['niv'];
$grp=$_POST['grp'];

$requete="update etudiant set nom='$nom', prenom='$prenom', date_naiss='$date', niveau='$niv', groupe='$grp' where id_etud='$code'";
$resultat=mysqli_query($connexion,$requete);
header("location:student.php");
?>