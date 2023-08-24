<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gestion des etudiants</title>

	<link rel="stylesheet" type="text/css" href="editer.css">
</head>
<body >
<div id="ctc2">	
	<a href="gestion.html"><img src="01.png" id="icon" align="center" ></a>
	<div id="tel"><img src="phone.png" id="phone"><h3 id="hdr">0522 98 71 40 / 0522 25 11 02</h3></div>
	
</div>

<?php
require_once("connection.php");
$code=$_GET['code'];
$requete="select * from etudiant where id_etud='$code'";
$resultat=mysqli_query($connexion,$requete);
$ligne=mysqli_fetch_assoc($resultat);
?>

<div id="top">
	<div id="left">

		<form action="modifieretud.php" method="post">
			<table id="table">
				<tr>
					<td><label id="lab">ID:</label></td>
					<td><input type="text" name="code" class="text" value="<?php echo $ligne['id_etud']?>" readonly="yes" /></td>
				</tr>
			<tr>
				<td><label id="lab">NOM:</label></td>
				<td><input type="text" name="nom" value="<?php echo $ligne['nom']?>" ></td>

			</tr>
			<tr>
				<td><label id="lab">PRENOM:</label></td>
				<td><input type="text" name="prenom" value="<?php echo $ligne['prenom']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">DATE DE NAISSANCE:</label></td>
				<td><input type="text" name="date" value="<?php echo $ligne['date_naiss']?>" ></td>
			</tr>
			<tr>
				<td><label id="lab">NIVEAU:</label></td>
				<td><input type="text" name="niv" value="<?php echo $ligne['niveau']?>" ></td>
			</tr>
			<tr>
				<td><label id="lab">GROUPE:</label></td>
				<td><input type="text" name="grp" value="<?php echo $ligne['groupe']?>" ></td>
				
				</table>
				<div id="ccdd">
					<input type="submit" name="modifier" value="EFFECTUER" id="asm">
				</div>
				
		</form>
		
		

</div>



	</div>










	










<div id="h"></div>
<div id="ctc">

<table cellspacing="15px">
	<tr>
		<td><h3 id="hdr3">Intranet Potentiel :</h3>
		<p id="p3" >Potentiel met à la disposition des parents un portail</p>
		 <p id="p3">collaboratif accessible 24h/24h et 7j/7j, pour suivre toute</p>
		 <p id="p3"> la scolarité de leurs enfants en temps réel.</p> </td>

		
		<td><h2 id="hdr3">Nos Coordonées :</h2>

			<ul>
				<li id="p3">Address: 10, Rue des Roitelets, Oasis, Casablanca-Anfa</li>
				<li id="p3">Tél 1: 0522 98 71 40</li>
				<li id="p3">Tél 2 / Fax: 0522 25 11 02</li>
				<li id="p3">Cellulaire: 0666 88 35 09</li>
				<li id="p3">Email: contact@gsrp.ma</li>
			</ul>

		 </td></tr>
	
	<div id="gdd"><img src="03.png" id="goodie"></div>
		
	
	</table>


</div>



</script>


</body>
</html>