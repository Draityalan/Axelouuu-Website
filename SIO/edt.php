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
				
				//Juste pour qu'il y ai un "0" devant le chiffre de l'heure entre 00h et 10h
				// Exemple : 0:00 -> 00:00
				if ($heure < 10 && $heure > 0){
					echo '<p>Il est 0'.$heure.':'.$minute.'</p>';
				} else {
					echo '<p>Il est '.$heure.':'.$minute.'</p>';
				}

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

				// Horraire précis pour l'emploi du temps
					// Exemple : heure de 14 = 14:10 -> 15:05

					if ($heure > 11 && $minute < 5) {
						$heure = 10;
					}

					if ($heure > 12 && $minute < 5) {
						$heure = 11;
					}

					if ($heure > 13 && $minute < 5) {
						$heure = 12;
					}

					if ($heure > 14 && $minute < 5) {
						$heure = 13;
					}

					if ($heure > 15 && $minute < 5) {
						$heure = 14;
					}

					if ($heure > 16 && $minute < 15) {
						$heure = 15;
					}

					if ($heure > 17 && $minute < 15) {
						$heure = 16;
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