
<table class="navbar">
	<tr>
		<td><a href="./index.php?pageName=emoji"><button class="navBarBouton">Emoji</button></a></td>
		
	<?php if ($plateforme == "mobile") { echo '</tr><tr>'; }?>
	
		<td><a href="./monJeu/"><button class="navBarBouton">Mon jeu</button></a></td>
		
	<?php if ($plateforme == "mobile") { echo '</tr><tr>'; }?>
	
		<td><a href="./index.php?pageName=projetsBatch"><button class="navBarBouton">Mes projets Batch</button></a></td>
		
	<?php if ($plateforme == "mobile") { echo '</tr><tr>'; }?>
	
		<td><a href="./index.php?pageName=projetMusiques"><button class="navBarBouton">Mes musiques</button></a></td>
		
	<?php if ($plateforme == "mobile") { echo '</tr><tr>'; }?>
	
		<td><a href="./index.php?pageName=portfolio"><button class="navBarBouton">Portfolio</button></a></td>
		
	<?php if ($plateforme == "mobile") { echo '</tr><tr>'; }?>
	
		<td><a href="./index.php?pageName=aVenir"><button class="navBarBouton">À venir</button></a></td>
		
	</tr>
</table>