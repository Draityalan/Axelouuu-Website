<table class="navbar">
	<tr>
		<td><a href="./index.php?pageName=accueil"><button class="navBarBouton">Retour</button></a></td>
	</tr>
</table>

</br>
</br>

<div class="portfolioSommaire">
	<h1>Sommaire</h1>
		<a href="./index.php?pageName=portfolio#quiSuisJe">Qui suis-je ?</a>
		</br>
		<a href="./index.php?pageName=portfolio#coordonnees">Mes coordonnées</a>
		</br>
		<a href="./index.php?pageName=portfolio#etudes">Mes études</a>
		</br>
		<a href="./index.php?pageName=portfolio#pfmp">Périodes de Formation en Milieu Professionnel</a>
		</br>
</div>

</br>
</br>

<div class="portfolio">


	<h1 id="quiSuisJe" class="portfolioH1">Qui suis-je ?</h1>
	<p>Bonjour/Bonsoir !</br>
	Je m'appelle Axel JUINO et j'ai 19 ans.</br>
	Je suis en 2ème année de BTS Service Infomatiques aux Organisations.</br>
	</br>
	Je suis un passionné d'informatique, de jeux-vidéo et de musique.</br>
	Je développe des programmes informatiques en Batch. Vous pouvez voir quelques-unes de mes créations <a href="./index.php?pageName=projetsBatch">ici</a>.</br>
	</br>
	Je compose également des musiques pour des projets comme des vidéos YouTube ou des jeux-vidéo.</br>
	</br>
	</br></p>
	
	
	<h1 id="coordonnees" class="portfolioH1">Mes cordonnées</h1>
	</br>
	<p>Nom : JUINO</br>
	Prenom : Axel</br>
	Date de naissance : 27/12/1999 (<?php function age($date){return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);}echo age("12/27/1999");?>ans)</br>
	Adresse email : juino.axel@axelouuu.fr</br>
	Domicile : 2 avenue des Colvert - Quimper - 29000</br>
	</br>
	</br></p>
	
	
	<h1 id="etudes" class="portfolioH1">Mes études</h1>
	</br>
	<h2 id="etudes2018" class="portfolioH2">2018-Aujourd'hui</h2>
	<p>Brevet de technicien suppérieur - Services Infomatiques aux Organisations (SIO)</br>
	Option Logicielles et Applications Métiers (Option B)</br>
	</br>
	Lycée Chaptal</br>
	Quimper - 29000</br>
	Bretagne</br>
	</br>
	<h2 id="etudes2017" class="portfolioH2">2017-2018</h2>
	<p>Baccalauréat Professionnel - Systèmes Électroniques et Numériques (SEN)</br>
	Option Audio-Visuel et Multimédia (AVM)</br>
	</br>
	Lycée Vauban</br>
	Brest - 29200</br>
	Bretagne</br>
	</br>
	<h2 id="etudes2015" class="portfolioH2">2015-2017</h2>
	<p>Brevet d'Étude Professionnel - Systèmes Électroniques et Numériques (SEN)</br>
	Option Audio-Visuel et Multimédia (AVM)</br>
	</br>
	Lycée Vauban</br>
	Brest - 29200</br>
	Bretagne</br>
	</br>
	<h2 id="etudes2010" class="portfolioH2">2010-2015</h2>
	<p>Diplôme National du Brevet</br>
	</br>
	Collège St Sébastien</br>
	Collège Mescoat</br>
	Landerneau - 29800</br>
	Bretagne</br>
	</br>
	
	<h1 id="pfmp" class="portfolioH1">Périodes de Formation en Milieu Professionnel</h1>
	</br>
	
	<h2 id="pfmpSCMicro" class="portfolioH2">SCMicro</h2>
	<div style="display: flex;">
		<img src="./img/scmicro.png" style="object-fit: contain;"/>
		<?php if ($plateforme == "mobile") { echo '</div><div>'; }?>
		<p>4 semaines en 2018</br>
		4 semaines en 2017</br>
		4 semaines en 2015</br>
		3 jours en 2014</br>
		</br>
	</div>
	
	
	<h2 id="pfmpMultimedia" class="portfolioH2">Espace Culturel E.Lelcerc Multimédia</h2>
	<div style="display: flex;">
		<img src="./img/multimedia.png" style="object-fit: contain;"/>
		<?php if ($plateforme == "mobile") { echo '</div><div>'; }?>
		<p>3 semaines en 2017</br>
		4 semaines en 2016</br>
		</br>
		</br>
	</diV>
	
	<h2 id="pfmpVBX" class="portfolioH2">VBXRadio</h2>
	<div style="display: flex;">
		<img src="./img/vbx.png" style="object-fit: contain;"/>
		<?php if ($plateforme == "mobile") { echo '</div><div>'; }?>
		<p>1 semaines en 2017</br>
		</br>
		</br>
		</br>
	</div>
	
</div>