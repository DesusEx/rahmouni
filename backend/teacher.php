<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gestion des profs</title>

	<link rel="stylesheet" type="text/css" href="teacher.css">
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
$requete="select * from prof where id_prof='$motcle' ";
}
else
$requete="select * from prof where id_prof=999999";
$resultat=mysqli_query($connexion,$requete);
if($ligne=mysqli_fetch_assoc($resultat)){

?>
				<td><label id="lab">ID:</label></td>
				<form action="" method="post">
				<td><input type="text" id="idfrm" name="rechid" value="<?php echo $ligne['id_prof']?>"><input type="submit" id="rch" name="btn_rech" value="rechercher"></td>
				</form>
				<form action="ajoterprof .php" method="post">
			</tr>
			<tr>
				<td><label id="lab">NOM:</label></td>
				<td><input type="text" id="nomfrm" name="nom" value="<?php echo $ligne['nom']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">PRENOM:</label></td>
				<td><input type="text" id="prnfrm" name="prenom" value="<?php echo $ligne['prenom']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">TELEPHONE:</label></td>
				<td><input type="text" id="datefrm" name="date" value="<?php echo $ligne['tel']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">MATIERE:</label></td>
				<td><input type="text" id="nvfrm" name="niv" value="<?php echo $ligne['matiere']?>"></td>
			</tr>
			<tr>
				<td><label id="lab">SALAIRE:</label></td>
				<td><input type="text" id="grpfrm" name="grp" value="<?php echo $ligne['salaire']?>"></td>
</table>
<div id="btnctr">
	<table>
		<tr>
	<td><input type="submit" name="ajouter" value="AJOUTER" id="as" > </td>
</form>
	<td><a href="editerprof.php?code=<?php echo $ligne['id_prof']?>" id="asm">MODIFIER</a> </td>
	 <td><a href="supprimerprof.php?code=<?php echo $ligne['id_prof']?>" id="asm">SUPPRIMER</a>  </td>
	<td><button id="as" onclick="f();"><em>REINITIALISER</em></button></td>
	</tr>
	</table>
</div>
				<?php

}else{
	
?>
       <h3 id="msgerr">Ce numero n'existe pas!</h3>
				<td><label id="lab">ID:</label></td>
				<form action="" method="post">
				<td><input type="text" name="rechid"  ><input type="submit" id="rch" name="btn_rech" value="rechercher"></td>
				</form>
				<form action="ajoterprof .php" method="post">
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
				<td><label id="lab">TELEPHONE:</label></td>
				<td><input type="text" name="tel" ></td>
			</tr>
			<tr>
				<td><label id="lab">MATIERE:</label></td>
				<td><input type="text" name="niv" ></td>
			</tr>
			<tr>
				<td><label id="lab">SALAIRE:</label></td>
				<td><input type="text" name="grp" ></td>
				</tr>
		</table>
			
		
<div id="btnctr">
	<table id="coco">
		<tr>
	<td><input type="submit" name="ajouter" value="AJOUTER" id="as" > </td>
</form>
	<td><a href="editerprof.php?code=<?php echo $ligne['id_prof']?>" id="asm">MODIFIER</a> </td>
	 <td><a href="supprimerprof.php?code=<?php echo $ligne['id_prof']?>" id="asm">SUPPRIMER</a>  </td>
	<td><button id="as" onclick="f();"><em>RENITIANLISER</em></button></td>
	</tr>
	</table>
</div>
<?php

}
?>

	</div>
<form method="post" action="">
	<div id="right">
		<div id="search"><input type="text" name="rech" placeholder="Nom,Prenom,Groupe"> <input type="submit" id="rch" name="sbt_search" value="rechercher"></div>
		</form>
		<table id="table2" cellspacing="0">
			<tr>
				<th>NUMERO</th>
				<th>NOM</th>
				<th>PRENOM</th>
				<th>TELEPHONE</th>
				<th>MATIERE</th>
				<th>SALAIRE</th>
			</tr>

<?php
require_once("connection.php");
if(isset($_POST['sbt_search'])){
$motcle=$_POST['rech'];
$requete="select * from prof where id_prof='$motcle' or nom='$motcle' or prenom='$motcle' or matiere='$motcle'  ";
}
else
$requete="select * from prof";
$resultat=mysqli_query($connexion,$requete);
while($ligne=mysqli_fetch_assoc($resultat)){
?>
<tr>
  <td id="ttd"><?php echo $ligne['id_prof']?></td>
  <td id="ttd"><?php echo $ligne['nom']?></td>
  <td id="ttd"><?php echo $ligne['prenom']?></td>
  <td id="ttd"><?php echo $ligne['tel']?></td>
  <td id="ttd"><?php echo $ligne['matiere']?></td>
  <td id="ttd"><?php echo $ligne['salaire']?></td>
<td id="ttd"><a href="supprimerprof.php?code=<?php echo $ligne['id_prof']?>" id="ss" ><img src="delete.png" id="iconsupp"></a>  </td></tr>
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