

<?php
$projetsBatch;
		if(isset($_GET['projetsBatch']))
		{
			echo '
			<table class="navbar">
				<tr>
					<td><a href="./index.php?pageName=projetsBatch"><button class="navBarBouton">Retour</button></a></td>
				</tr>
			</table>
			';
			
			$projetsBatch = $_GET['projetsBatch'];
				
			include './projetsBatch/'.$projetsBatch.'.php';
			
			if ($projetsBatch != 'monopoly')
			{
				echo '
				<table>
					<tr>
						<td><a href="./projetsBatch/fichiers/'.$projetsBatch.'.zip"><button class="telechargerBouton">Télécharger</button></a></td>
					</tr>
				</table>
				';
			}

		}
		else {
		
			echo '
				<table class="navbar">
					<tr>
						<td><a href="./index.php?pageName=accueil"><button class="navBarBouton">Retour</button></a></td>
					</tr>
				</table>
				
				<div>	
					<table class="projetsBatchListe">
						<tr>
							<td><p>Projets :</p></tr>
						<tr>
							<td><a href="./index.php?pageName=projetsBatch&projetsBatch=journalIntime"><button class="projetsBatchBouton"><p>Journal intime</p><img src="./projetsBatch/img/journalIntime.png"/></button></a></td>
						</tr>
						<tr>
							<td><a href="./index.php?pageName=projetsBatch&projetsBatch=monopoly"><button class="projetsBatchBouton"><p>Monopoly</p><img src="./projetsBatch/img/monopoly.png"/></button></a></td>
						</br>
						<tr>
							<td><p>Utilitaires :</p></td>
						</tr>
						<tr>
							<td><a href="./index.php?pageName=projetsBatch&projetsBatch=cadre"><button class="projetsBatchBouton"><p>Cadre de texte</p><img src="./projetsBatch/img/cadre.png"/></button></a></td>
						</tr>
						<tr>
							<td><a href="./index.php?pageName=projetsBatch&projetsBatch=tailleFenetre"><button class="projetsBatchBouton" ><p>Taille de la fenetre</p><img src="./projetsBatch/img/tailleFenetre.png"/></button></a></td>
						</tr>
					</table>
				</div>
				';
		}
?>