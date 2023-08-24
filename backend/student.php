<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gestion des etudiants</title>

	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body >
<div id="ctc2">	
	<a href="gestion.html"><img src="01.png" id="icon" align="center" ></a>
	<div id="tel"><img src="phone.png" id="phone"><h3 id="hdr">0522 98 71 40 / 0522 25 11 02</h3></div>
	
</div>



<div id="top">
	<div id="left">

		
		<table id="table">
			
			<tr>

				<?php
require_once("connection.php");
if(isset($_POST['btn_rech'])){
$motcle=$_POST['rechid'];
$requete="select * from etudiant where id_etud='$motcle' ";
}
else
$requete="select * from etudiant where id_etud=17";
$resultat=mysqli_query($connexion,$requete);
if($ligne=mysqli_fetch_assoc($resultat)){

?>
				<td><label id="lab">ID:</label></td>
				<form action="" method="post">
				<td><input id="idfrm" type="text" name="rechid" value="<?php echo $ligne['id_etud']?>" ><input type="submit" id="rch" name="btn_rech" value="rechercher"></td>
				</form>
				<form action="ajoteretud.php" method="post">
				
			</tr>
			<tr>
				<td><label id="lab">NOM:</label></td>
				<td><input id="nomfrm" type="text" name="nom" value="<?php echo $ligne['nom']?>"></td>

			</tr>
			<tr>
				<td><label id="lab">PRENOM:</label></td>
				<td><input id="prnfrm" type="text" name="prenom" value="<?php echo $ligne['prenom']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">DATE DE NAISSANCE:</label></td>
				<td><input id="datefrm" type="text" name="date" value="<?php echo $ligne['date_naiss']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">NIVEAU:</label></td>
				<td><input id="nvfrm" type="text" name="niv" value="<?php echo $ligne['niveau']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">GROUPE:</label></td>
				<td><input id="grpfrm" type="text" name="grp" value="<?php echo $ligne['groupe']?>"></td>

				</table>
<div id="btnctr">
	<table>
		<tr>
	<td><input type="submit" name="ajouter" value="AJOUTER" id="as"> </td>
	
				</form>
				<td><a href="editer.php?code=<?php echo $ligne['id_etud']?>" id="asm">MODIFIER</a> </td>
	 <td><a href="supprimeretud.php?code=<?php echo $ligne['id_etud']?>" id="asm">SUPPRIMER</a>  </td>
	<td><button id="as" onclick="f();"><em>RENITIANLISER</em></button></td>
	</tr>
	</table>
				
<?php
}else{
	
?>
	
       <h3 id="msgerr">Ce numero n'existe pas!</h3>
				<td><label id="lab">ID:</label></td>
				<form action="" method="post">
				<td><input type="text" name="rechid"  ><input type="submit" id="rch" name="btn_rech" value="rechercher"></td>
				</form>
				<form action="ajoteretud.php" method="post">
				
			</tr>
			<tr>
				<td><label id="lab">NOM:</label></td>
				<td><input type="text" name="nom" ></td>

			</tr>
			<tr>
				<td><label id="lab">PRENOM:</label></td>
				<td><input type="text" name="prenom"></td>
			</tr>
			<tr>
				<td><label id="lab">DATE DE NAISSANCE:</label></td>
				<td><input type="text" name="date" ></td>
			</tr>
			<tr>
				<td><label id="lab">NIVEAU:</label></td>
				<td><input type="text" name="niv" ></td>
			</tr>
			<tr>
				<td><label id="lab">GROUPE:</label></td>
				<td><input type="text" name="grp" ></td></tr>
				
				</table>
<div id="btnctr">
	<table id="coco">
		<tr>
	<td><input type="submit" name="ajouter" value="AJOUTER" id="as" > </td>
	
				</form>
				<td><a href="editer.php?code=<?php echo $ligne['id_etud']?>" id="asm">MODIFIER</a> </td>
	 <td><a href="supprimeretud.php?code=<?php echo $ligne['id_etud']?>" id="asm">SUPPRIMER</a>  </td>
	<td><button id="as" onclick="f();"><em>RENITIANLISER</em></button></td>
	</tr>
	</table>
<?php

}
?>
			
		

</div>



	</div>








<form method="post" action="">
	<div id="right">
		<div id="search"><input type="text" name="rech" placeholder="Nom,Prenom,Groupe"> <input type="submit" name="btn_search" value="rechercher" id="rch"></div>
		</form>

		
		<table id="table2" cellspacing="0">
			<tr>
				<th>NUMERO</th>
				<th>NOM</th>
				<th>PRENOM</th>
				<th>DATE DE NAISSANCE</th>
				<th>NIVEAU</th>
				<th>GROUPE</th>
			</tr>
		

<?php
require_once("connection.php");
if(isset($_POST['btn_search'])){
$motcle=$_POST['rech'];
$requete="select * from etudiant where id_etud='$motcle' or nom='$motcle' or prenom='$motcle' or niveau='$motcle' or groupe='$motcle' order by niveau ";
}
else
$requete="select * from etudiant order by niveau";
$resultat=mysqli_query($connexion,$requete);
while($ligne=mysqli_fetch_assoc($resultat)){
?>
<tr>
  <td id="ttd"><?php echo $ligne['id_etud']?></td>
  <td id="ttd"><?php echo $ligne['nom']?></td>
  <td id="ttd"><?php echo $ligne['prenom']?></td>
  <td id="ttd"><?php echo $ligne['date_naiss']?></td>
  <td id="ttd"><?php echo $ligne['niveau']?></td>
  <td id="ttd"><?php echo $ligne['groupe']?></td>
<td id="ttd"><a  href="supprimeretud.php?code=<?php echo $ligne['id_etud']?>" id="ss" ><img src="delete.png" id="iconsupp"></a>  </td>
</tr>
  <?php
}
?>
</table>

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

<script type="text/javascript">
	
	function f(){
	 document.getElementById('idfrm').value=" ";
	document.getElementById('nomfrm').value=" ";
	 document.getElementById('prnfrm').value=" ";
	 document.getElementById('datefrm').value=" ";
	 document.getElementById('nvfrm').value=" ";
	 document.getElementById('grpfrm').value=" ";

     
	}

</script>


</body>
</html>