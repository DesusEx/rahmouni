<!DOCTYPE html>
<html>
<head>
	<title>connection administrateur</title>
	<meta charset="utf-8">
  
<link rel="stylesheet" type="text/css" href="login.css">
  
</head>
<?php
require_once("connection.php");
if(isset($_POST['btnsubmit'])){
$login=$_POST['login'];
$passwd=$_POST['passwd'];
$requete="select * from admin where login='$login' and mdp='$passwd'";
$resultat=mysqli_query($connexion,$requete);
if($ligne=mysqli_fetch_assoc($resultat)){
header("location:gestion.html");
}
else
echo "<h1>Login ou mot de passe invalide !!!</h1>";
}


?>
<body background="">
<div><p id="p1"><b>Pour se connecter au site vous devez être<br> administrateur au G.S RAHMOUNI POTENTIEL.</b></p></div>

	<form name = "form1" method = "post" action=""   style="width:40%">
<div id="dv" align="center">
    <h1 id="header">Authentifiez-vous</h1>
    <input type="text" placeholder="EMAIL" name="login" maxlength="300" class="text" id="txt"><br>
       <input type="password" placeholder="PASSWORD" name="passwd" maxlength="300" class="text" id="txt">
    <br>
    <input  type=submit name="btnsubmit" id="sbt" value= "LOGIN" >
</div>
</form>





</body>
</html>