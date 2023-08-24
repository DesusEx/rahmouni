<?php
require_once("connection.php");
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$niv=$_POST['niv'];
$grp=$_POST['grp'];

$requete="update prof set nom='$nom', prenom='$prenom', tel='$date', matiere='$niv', salaire='$grp' where id_prof='$code'";
$resultat=mysqli_query($connexion,$requete);
header("location:teacher.php");
?>