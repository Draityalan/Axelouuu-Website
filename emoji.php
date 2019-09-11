<table class="navbar">
	<tr>
		<td><a href="./index.php?pageName=accueil"><button class="navBarBouton">Retour</button></a></td>
	</tr>
</table>

<div>	
	<table class="liste">
		<tr>
			<?php
				$nb_fichier = 0;
				
				if($dossier = opendir('./emoji/')) {
				
					while(false !== ($fichier = readdir($dossier))) {
				
						if($fichier != '.' && $fichier != '..') {
				
							$nb_fichier++; // On incrÃ©mente le compteur de 1
							echo '<td class="banqueImagesSrc">
									<!-- <p>' . $fichier . $nb_fichier . ' :</p> -->
									<img src="./emoji/' . $fichier . '"/>
									</br>
									<input type="text" class="link" name="link" value="http://axelouuu.fr/emoji/'.$fichier.'"></input>
								  </td>';
							
								if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")
								|| strpos($_SERVER['HTTP_USER_AGENT'], "iPod")
								|| strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") ) {
									
									if ($nb_fichier == 1) {
									echo '</tr><tr>';
									$nb_fichier = 0;
									}
								} else {
									if ($nb_fichier == 5) {
									echo '</tr><tr>';
									$nb_fichier = 0;
									}
								}
						} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
					 
					} // On termine la boucle
				 
					closedir($dossier);
				 
				}
			?>
		</tr>
	</table>
</div>
</br>
<table class="emojiMail">
	<tr>
		<td>
			<p>Proposez une suggestion</p>
		</td>
	</tr>
	<tr>
		<td>
			<form method="post">
				<label>Votre e-mail</label>
				<input class="textfield" type="email" name="email" required><br>
				<label>Suggestion</label>
				<textarea name="message" required></textarea><br>
				<input class="sendMail" type="submit">
			</form>
		</td>
	</tr>
</table>
    <?php
		if (isset($_POST['message'])) {
			$position_arobase = strpos($_POST['email'], '@');
			if($position_arobase === false)
				echo '<p>Votre email doit comporter un arobase.</p>';
			else {
				$retour = mail('juino.axel@axelouuu.fr', 'suggestion emoji - axelouuu.fr', $_POST['message'], 'From : ' . $_POST['email']);
				if($retour)
					echo '<p>Votre message a été envoyé.</p>';
				else
					echo '<p>Erreur.</p>';
			}
		}
	?>