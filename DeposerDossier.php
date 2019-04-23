<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Deposer Dossier</title>
<meta name="description"content=""/>
<meta  name="author" content="adrien Gazaix-www.adriengazaix.fr"/>

<link rel="stylesheet" href="nivo.css"/>
<link rel="stylesheet" href="style.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/site.js"></script>
<script src="js/nivo.js"></script>
</head>
<body>

	<div id="content">
		<header>
		<div id="enter"></div>
		<a title="Retour a l accueil du site" id="logo" href="#">logo ISC</a>
		<div id="texthead">
		<h3><marquee><i> BIENVENU A L'ISC/GOMA</i></marquee></h3>
		</div>
		<nav>
			<ul id="menu">
				<li class="active"><a href="#">Accueil</a></li>
				<li><a href="a propo.html">A propos</a>
				<li><a href="actualite.html">Actualité</a></li>
				<li><a href="galerie.html">Galerie</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="admin.html">Admin</a></li>
			</ul>
		</nav>
		
		<form id="recherche" method="post" action"#">
			<input type="text" id="champ-search" class="autoEmpty" value="Rechercher..."/>
		</form>
		</header>
		<section id="titre-page">
		<h1>BIENVENUE A L'INSTITUT SUPERIEUR DE COMMERCE!<span> Presentez-nous votre dossier</span></h1>
		</section>
		<section id="titre-page">
		<ul id="filtre">
				<li><a href="Etudiant.html">Etudiant</a></li>
				<li><a href="AnneeAcademique.html">Année</a></li>
				<li><a href="Inscription2.php">Inscription</a></li>
				<li><a href="DeposerDossier.php">Dossiers</a></li>
				<li><a href="Fraiscolaire.html">Frais</a></li>
				<li><a href="paiement.php">Paiement</a></li>
				<li><a href="Rapport.html">Rapport</a></li>
		</ul>
		</section>
	
		<div id="content-blank">
		
		<div class="contenu-sidebar">
			
			<h2> Situation des Dossiers </h2>
			<p>
			
			</p>
			
			<form action="InsertDeposer.php" method="POST">
				<p>
					<label for="nom">Date:</label>
					<input type="textdate" name="txtdate"/>
				</p>
				<p>
					<label for="nom">Nombre:</label>
					<input type="text" name="txtqte"/>
				</p>
				<p>
					<label for="nom">Bullet6eme:</label>
					<input type="text" name="txtbult6"/>
				</p>
				<p>
					<label for="nom">Bullet5eme:</label>
					<input type="text" name="txtbult5"/>
				</p>
				<p>
					<label for="nom">Fiche Scol:</label>
					<input type="text" name="txtfichescolarite"/>
				</p>
				<p>
					<label for="nom">RelevetPrep:</label>
					<input type="text" name="txtrelevetpreparat"/>
				</p>
				<p>
					<label for="nom">Rel G1:</label>
					<input type="text" name="txtrelG1"/>
				</p>
				<p>
					<label for="nom">Relev G2:</label>
					<input type="text" name="txtrelG2"/>
				</p>
				<p>
					<label for="nom">DiplomeEtat:</label>
					<input type="text" name="txtdiplEtat"/>
				</p>
				<p>
					<label for="nom">ATT.Nce:</label>
					<input type="text" name="txtAttnce"/>
				</p>
				<p>
					<label for="nom">ATT.BneVMer:</label>
					<input type="text" name="txtbvm"/>
				</p>
				<p>
					<label for="nom">AptitudePhys:</label>
					<input type="text" name="txtphys"/>
				</p>
	<p>
<label for="cbostag">Etudiant:</label>
<select name="cboetudiant" id="cboetudiant">
 <?php
                    //    $resultat = $_POST['CodeService'];

                    $requete = "SELECT Id	,Nom  From Etudiant ";
                    mysql_connect('localhost', 'root', '');
                    mysql_select_db('Gestiondossiers');
                    $res = mysql_query($requete) or exit(mysql_error());
                    while ($selection = mysql_fetch_object($res)) {
                        echo"<option value=\"$selection->Id\">$selection->Nom</option>";
                        echo'\n';
                    }
                    ?>
</select>

</P>
<p>
<label for="cbostag">Dossiers:</label>
<select name="cbodossier" id="cbodossier">
 <?php
                    //    $resultat = $_POST['CodeService'];

                    $requete = "SELECT Id,Intitule  From Dossier ";
                    mysql_connect('localhost', 'root', '');
                    mysql_select_db('Gestiondossiers');
                    $res = mysql_query($requete) or exit(mysql_error());
                    while ($selection = mysql_fetch_object($res)) {
                        echo"<option value=\"$selection->Id\">$selection->Intitule</option>";
                        echo'\n';
                    }
                    ?>
</select>

</P>
			</select></label> <br/>
				
				<input type="submit" name="submit" class="btn" id="btn-contact" value="Envoyer"/>
				<input type="reset" name="effacer" class="btn" id="btn-contact" value="Effacer"/>
			</form>
		</div>
		
		<aside class="sidebar">
			<section class="module-sb cat">
					<h2> Options</h2>
					<ul>
						<li><a href="#">Comptabilité</a></li>
					<li><a href="#">Fiscalités</a></li>
					<li><a href="#">Marketing</a></li>
					<li><a href="#">Douane et Accises</a></li>
					<li><a href="#">Douannes et Commerce exterieurs</a></li>
					<li><a href="#">Gestion Informatique</a></li>
					<li><a href="#">Reseaux Informatiques</a></li>
					<li><a href="#">Conception des Systèmes d'informations</a></li>
					</ul>
				</section>
				
				<section class="module-sb">
					<h2> Réseaux sociaux</h2>
					<a class="icone" id="twitter" href="#">Twitter</a>
					<a class="icone" id="facebook" href="#">Facebook</a>
					<a class="icone" id="Gmail" href="#">Gmail</a>
					<a class="icone" id="Whatsapp" href="#">Whatsapp</a>
				</section>
				
				
				<section class="module-sb cat">
					<h2> Contacts</h2>
					<ul>
					<li><a href="#">Apparitaire: +243 975593773</a></li>
					<li><a href="#">Secretaire: +243 974830481</a></li>
					<li><a href="#">DG: +243 853803701</a></li>
					<li><a href="#">AB: +243 995652135</a></li>
					</ul>
				</section>
			</aside>
			
			<div class="clear"></div>
		</div>
		
	<footer id="copyright">
		<p>copyright ©2018 KABOTE LUPAYA Destin, Tout droits réservée <span><a href="#">Admin</a>|creation:<a title="DESTIN/webdesigner Freelance"
		target="_blank" href="http://www.Fabien.wordpress.com">www.destin.com</a></span></p>
		
		</footer>
	</div>
</body>
</html>