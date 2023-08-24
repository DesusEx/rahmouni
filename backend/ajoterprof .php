<?php
require_once("connection.php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$niv=$_POST['niv'];
$grp=$_POST['grp'];
  
$requete="insert into prof (nom, prenom, tel, matiere, salaire) values ('$nom','$prenom','$date','$niv' ,'$grp')";
$resultat=mysqli_query($connexion,$requete);
header("location:teacher.php");
?>
