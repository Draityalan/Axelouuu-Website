<!doctype html>
<html>
	<head>
		<title>SIO2 Planning</title>
	</head>
	<body>
	
		<div>
			<?php
				// Récupération et conversion des fichiers JSON. (edt.json et edtInfo.json)
				// Lecture des fichiers.
				$jsonEdt = file_get_contents('./edt.json');
				$jsonEdtInfo = file_get_contents('./edtInfo.json');
				// Conversion en tableau associatif.
				$edt = json_decode($jsonEdt, true);
				$edtInfo = json_decode($jsonEdtInfo, true);

				// Traitement Date et Heure 
				$dates = ["Mon", "Tue", "Wed", "Thu", "Fri"];
				$date = date('D');
				$heure = intval(date('H'));
				$minute = intval(date('i'));

				// Affichage de l'heure
				echo '<p>Il est '.$heure.':'.$minute.'</p>';

				// Query Strings
				$specialite = $_GET['specialite'];
				$groupe = $_GET['groupe'];
				$mathAppro = $_GET['mathAppro'];

				// Debug Query Strings
				if (isset($_GET['dD'])) {
					$date = $_GET['dD']; // Force le jour
				}
				if (isset($_GET['dh'])) {
					$heure = $_GET['dh']; // Force l'heure
				}
				if (isset($_GET['dm'])) {
					$minute = $_GET['dm']; // Force les minutes
				}

				if (isset($_GET['dD']) || isset($_GET['dh']) || isset($_GET['dm'])) {
					// Affichage de l'heure debug
					echo '<p>(Debug : '.$date.', '.$heure.':'.$minute.') </p>';
				}

				// Cas particulier du vendredi
				if ($date === "Fri") {
					// Si c'est le vendredi matin
					if ($heure <= 7) {
						$heure = 8;
					}
					// Si c'est le vendredi soir
					else if ($heure >= 17 || $heure <= 7 || $heure >= 18){
						$heure = 8;
						$date = 'Mon';
					}
				} 
				// Si samedi ou dimanche
				else if ($date === "Sat" || $date === "Sun") {
					$heure = 8;
					$date = 'Mon';
				} 
				// Si nous sommes entre Lundi et Jeudi :
				else if ($heure >= 17 || $heure <= 7 || $heure >= 18) {
					// J'affecte à $date le jour suivant seulement s'il est plus de 16h (en soirée).
					// $date = Le jour actuel + 1
					// (Ex, nous sommes lundi : Mon (index 0 du tableau $dates) + 1 = Tue (index 1 du tableau $dates) 0+1 = 1)
					if ($heure >= 17) {
						$date = $dates[array_search($date, $dates)+1];
					}
					$heure = 8;
				}
				
				// Récupération des cours correspondants à la date et l'heure actuelle
				$heureEdt = strval($heure);
				$cours1 = $edt[$specialite][$groupe][$mathAppro][$date][$heureEdt];
				// Récupération de la potentielle information spéciale concernant l'heure
				$info1 = $edtInfo[$specialite][$groupe][$mathAppro][$date][$heureEdt];

				// Gestion du deuxième cours alors qu'il est 16h (du Lundi au Vendredi)
				if (in_array($date, $dates) && $heure >= 16) {
					$cours2 = "Fin de journée !";
					$info2 = "";
				} else {
					$heureEdt = strval($heure+1);
					$cours2 = $edt[$specialite][$groupe][$mathAppro][$date][$heureEdt];
					$info2 = $edtInfo[$specialite][$groupe][$mathAppro][$date][$heureEdt];
				}

				// Affichage des cours
				
				echo '<div class="horraire1">';
				echo "<p id=\"info\">".$info1."</p>";
				echo "<p>".$cours1."</p>";
				echo '</div>';

				echo '<div class="horraire2">';
				echo "<p id=\"info\">".$info2."</p>";
				echo "<p>".$cours2."</p>";
				echo '</div>';
			?>
		</div>
	</body>
</html>