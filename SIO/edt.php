<!doctype html>
<html>
	<head>
		<title>SIO2 Planning</title>
	</head>
	<body>
	
		<div>
			
			<?php
			
			// Initialisation Emploi du temps
			
				$specialite=$_GET['specialite'];
				$groupe=$_GET['groupe'];
				$mathAppro=$_GET['mathAppro'];
				
				if ($specialite == 'slam'){
					
					$Mon1='SLAM 3 </br> Djabou </br> B4i </br> 8h-12h';
					// $Mon2='SLAM 3 </br> Djabou </br> B4i </br> 9h-10h';
					// $Mon3='SLAM 3 </br> Djabou </br> B4i </br> 10h-11h';
					// $Mon4='SLAM 3 </br> Djabou </br> B4i </br> 11h-12h';
					
					$Tue5='PPE 3 </br> Serres </br> B4i </br> 13h-17h';
					// $Tue7='PPE 3 </br> Serres </br> B4i </br> 14h-15h';
					// $Tue8='PPE 3 </br> Serres </br> B4i </br> 15h-16h';
					// $Tue9='PPE 3 </br> Serres </br> B4i </br> 16h-17h';
					
					$Wed6='SLAM 5 </br> Serres </br> B4i </br> 13h-17h';
					// $Wed7='SLAM 5 </br> Serres </br> B4i </br> 14h-15h';
					// $Wed8='SLAM 5 </br> Serres </br> B4i </br> 15h-16h';
					// $Wed9='SLAM 5 </br> Serres </br> B4i </br> 16h-17h';
					
					$Thu8='SI 7 </br> Djabou </br> B4i </br> 15h-17h';
					// $Thu9='SI 7 </br> Djabou </br> B4i </br> 16h-17h';
					
					$Fri1='SLAM 4 </br> Serres </br> B4i </br> 8h-12h';
					// $Fri2='SLAM 4 </br> Serres </br> B4i </br> 9h-10h';
					// $Fri3='SLAM 4 </br> Serres </br> B4i </br> 10h-11h';
					// $Fri4='SLAM 4 </br> Serres </br> B4i </br> 11h-12h';
					
				} else {
					
					$Mon1='SISR 3 </br> Gardere </br> B8 </br> 8h-12h';
					// $Mon2='SISR 3 </br> Gardere </br> B8 </br> 9h-10h';
					// $Mon3='SISR 3 </br> Gardere </br> B8 </br> 10h-11h';
					// $Mon4='SISR 3 </br> Gardere </br> B8 </br> 11h-12h';
					
					$Tue5='PPE 3 </br> Gardere </br> B8 </br> 13h-17h';
					// $Tue7='PPE 3 </br> Gardere </br> B8 </br> 14h-15h';
					// $Tue8='PPE 3 </br> Gardere </br> B8 </br> 15h-16h';
					// $Tue9='PPE 3 </br> Gardere </br> B8 </br> 16h-17h';
					
					$Wed6='SISR 5 </br> Gardere </br> B8 </br> 13h-17h';
					// $Wed7='SISR 5 </br> Gardere </br> B8 </br> 14h-15h';
					// $Wed8='SISR 5 </br> Gardere </br> B8 </br> 15h-16h';
					// $Wed9='SISR 5 </br> Gardere </br> B8';
					
					$Thu8='SI 7 </br> Djabou </br> B4i </br> 15h-17h';
					// $Thu9='SI 7 </br> Djabou </br> B4i </br> 16h-17h';
					
					$Fri1='SISR 4 </br> Gardere </br> B8 </br> 8h-12h';
					// $Fri2='SISR 4 </br> Gardere </br> B8 </br> 9h-10h';
					// $Fri3='SISR 4 </br> Gardere </br> B8 </br> 10h-11h';
					// $Fri4='SISR 4 </br> Gardere </br> B8 </br> 11h-12h';
					
				}
				
				if ($groupe == 'b'){
					
					$Wed1='AN.ECO.MAN.JUR.S.INF </br> L\'Ollivier </br> B3bis, B3 ou B4 </br> 8h-9h';
					$Wed2='- </br> 9h-10h';
					$Wed3='Culture G. </br> Baudet </br> A223 </br> 10h-11h';
					
					$Thu2='Anglais </br> Le Goff-Robin </br> A316 </br> 10h-11h';
					$Thu5='- </br> 13h-14h';
					$Thu6='Mathématiques </br> Diligeart </br> A302';
					$Thu7='SI 7 </br> Djabou </br> B4i </br> 15h-17h';
					// $Thu9='SI 7 </br> Djabou </br> B4i </br> 16h-17h';
					
					$Fri6='Anglais </br> Le Goff-Robin </br> A310';
					
				} else {
					
					$Wed1='- </br> 8h-9h';
					$Wed2='Culture G. </br> Baudet </br> A223 </br> 9h-10h';
					$Wed3='AN.ECO.MAN.JUR.S.INF </br> L\'Ollivier </br> B3bis, B3 ou B4 </br> 10h-11h';
					
					$Thu2='- </br> 10h-11h';
					$Thu3='SI 7 </br> Djabou </br> B4i </br> 11h-12h';
					$Thu4='Self </br> 12h-13h';
					$Thu5='SI 7 </br> Djabou </br> B4i </br> 13h-15h';
					// $Thu7='SI 7 </br> Djabou </br> B4i </br> 14h-15h';
					$Thu6='Mathématiques </br> Diligeart </br> A303i </br> 15h-16h';
					$Thu7='Anglais </br> Le Goff-Robin </br> A301 </br> 16h-17h';
					
					$Fri6='- </br> 14h-15h';
					
				}
				
				$Mon2='Self </br> 12h-13h';
				
				if ($mathAppro == 'oui') {
					$Mon2='Self </br> 12h-13h';
					$Mon3='Math Appro. </br> Diligeart </br> A305 </br> 13h-14h';
				} else {
					$Mon2='Self </br> 12h-14h';
					$Mon3='- </br> 13h-14h';
				}
				
				
				$Mon4='AN.ECO.MAN.JUR.S.INF </br> L\'Ollivier </br> A207 </br> 14h-15h';
				$Mon5='Mathématiques </br> Diligeart </br> B3i </br> 15h-16h';
				$Mon6='- </br> 16h-17h';
				
				$Tue1='Culture G. </br> Baudet </br> A223 </br> 8h-9h';
				$Tue2='Mathématiques </br> Diligeart </br> A302 </br> 9h-10h';
				$Tue3='Anglais </br> Le Goff-Robin </br> A316 </br> 10h-11h';
				
				if ($mathAppro == 'oui') {
					$Tue3='Self </br> 12h-13h';
					$Tue4='Math Appro </br> Diligeart </br> A302 </br> 11h-12h';
				} else {
					$Tue3='Self </br> 12h-14h';
					$Tue4='- </br> 13h-14h';
				}
				
				
				$Tue5='Self </br> 12h-13h';
				
				$Wed4='SI 7 </br> Djabou </br> A207 </br> 11h-12h';
				
				$Thu1='AN.ECO.MAN.JUR.S.INF </br> L\'Ollivier </br> A207 </br> 8h-10h';
				$Thu4='Self </br> 12h-13h';
				
				$Fri2='Self </br> 12h-13h';
				$Fri3='AN.ECO.MAN.JUR.S.INF </br> L\'Ollivier </br> A207 </br> 13h-14h';
				$Fri5='Culture G. </br> Baudet </br> A227 </br> 15h-16h';
				$Fri6='- </br> 16h-17h';
			
			// Fin Emploi du temps 
			
			// Initialisation Heure et Date 
			
				$date = date('D');
				$heure = date('H');
				$minute = date('i');
				
				if ($heure < 8) {
					$horraire = 1;
				}
				
				if ($heure <= 8 && $minute < 5) {
					$horraire = 1;
				}
				
				if ($heure <= 10 && $minute < 10) {
					$horraire = 2;
				}
				
				if ($heure <= 11 && $minute < 10) {
					$horraire = 3;
				}
				
				if ($heure <= 12 && $minute < 10) {
					$horraire = 4;
				}
				
				if ($heure <= 13 && $minute < 10) {
					$horraire = 5;
				}
				
				if ($heure <= 14 && $minute < 10) {
					$horraire = 6;
				}
				
				if ($heure <= 15 && $minute < 20) {
					$horraire = 7;
				}
				
				if ($heure <= 16 && $minute < 20) {
					$horraire = 8;
				}
				
				if ($heure <= 17 && $minute < 20) {
					$horraire = 9;
				}
				
				if ($heure > 17 && $minute > 20) {
					$horraire = 1;
				}
				
				if ($date == 'Fri' && $heure >= 17 && $minute >= 20) {
					$date = 'Mon';
				}
				
				if ($date == 'Sat') {
					$horraire = 1;
					$date = 'Mon';
				}
				
				if ($date == 'Sun') {
					$horraire = 1;
					$date = 'Mon';
				}
				
				if ($date == 'Mon' && $heure < 8) {
					$horraire = 1;
					$date = 'Mon';
				}
 				
				$horraire2=$horraire+1;
				if ($horraire2 == 10) {
					$horraire2 = 1;
				}
			
			// Fin Heure et Date
			
			// Affichage Emploi du temps
				$horraire1=$date.$horraire;
				$horraire2=$date.$horraire2;
				
				echo '<p>Il est '.$heure.':'.$minute.'</p>';
				
				// Horraire 1
					echo '<div class="horraire1">';
					if ($horraire1 == 'Mon1'){ echo '<p>'.$Mon1.'</p>';}
					if ($horraire1 == 'Mon2'){ echo '<p>'.$Mon2.'</p>';}
					if ($horraire1 == 'Mon3'){ echo '<p>'.$Mon3.'</p>';}
					if ($horraire1 == 'Mon4'){ echo '<p>'.$Mon4.'</p>';}
					if ($horraire1 == 'Mon5'){ echo '<p>'.$Mon5.'</p>';}
					if ($horraire1 == 'Mon6'){ echo '<p>'.$Mon6.'</p>';}
					// if ($horraire1 == 'Mon7'){ echo '<p>'.$Mon7.'</p>';}
					// if ($horraire1 == 'Mon8'){ echo '<p>'.$Mon8.'</p>';}
					// if ($horraire1 == 'Mon9'){ echo '<p>'.$Mon9.'</p>';}
					
					if ($horraire1 == 'Tue1'){ echo '<p>'.$Tue1.'</p>';}
					if ($horraire1 == 'Tue2'){ echo '<p>'.$Tue2.'</p>';}
					if ($horraire1 == 'Tue3'){ echo '<p>'.$Tue3.'</p>';}
					if ($horraire1 == 'Tue4'){ echo '<p>'.$Tue4.'</p>';}
					if ($horraire1 == 'Tue5'){ echo '<p>'.$Tue5.'</p>';}
					if ($horraire1 == 'Tue6'){ echo '<p>'.$Tue6.'</p>';}
					// if ($horraire1 == 'Tue7'){ echo '<p>'.$Tue7.'</p>';}
					// if ($horraire1 == 'Tue8'){ echo '<p>'.$Tue8.'</p>';}
					// if ($horraire1 == 'Tue9'){ echo '<p>'.$Tue9.'</p>';}
					
					if ($horraire1 == 'Wed1'){ echo '<p>'.$Wed1.'</p>';}
					if ($horraire1 == 'Wed2'){ echo '<p>'.$Wed2.'</p>';}
					if ($horraire1 == 'Wed3'){ echo '<p>'.$Wed3.'</p>';}
					if ($horraire1 == 'Wed4'){ echo '<p>'.$Wed4.'</p>';}
					if ($horraire1 == 'Wed5'){ echo '<p>'.$Wed5.'</p>';}
					if ($horraire1 == 'Wed6'){ echo '<p>'.$Wed6.'</p>';}
					// if ($horraire1 == 'Wed7'){ echo '<p>'.$Wed7.'</p>';}
					// if ($horraire1 == 'Wed8'){ echo '<p>'.$Wed8.'</p>';}
					// if ($horraire1 == 'Wed9'){ echo '<p>'.$Wed9.'</p>';}
					
					if ($horraire1 == 'Thu1'){ echo '<p>'.$Thu1.'</p>';}
					if ($horraire1 == 'Thu2'){ echo '<p>'.$Thu2.'</p>';}
					if ($horraire1 == 'Thu3'){ echo '<p>'.$Thu3.'</p>';}
					if ($horraire1 == 'Thu4'){ echo '<p>'.$Thu4.'</p>';}
					if ($horraire1 == 'Thu5'){ echo '<p>'.$Thu5.'</p>';}
					if ($horraire1 == 'Thu6'){ echo '<p>'.$Thu6.'</p>';}
					if ($horraire1 == 'Thu7'){ echo '<p>'.$Thu7.'</p>';}
					// if ($horraire1 == 'Thu8'){ echo '<p>'.$Thu8.'</p>';}
					// if ($horraire1 == 'Thu9'){ echo '<p>'.$Thu9.'</p>';}
					
					if ($horraire1 == 'Fri1'){ echo '<p>'.$Fri1.'</p>';}
					if ($horraire1 == 'Fri2'){ echo '<p>'.$Fri2.'</p>';}
					if ($horraire1 == 'Fri3'){ echo '<p>'.$Fri3.'</p>';}
					if ($horraire1 == 'Fri4'){ echo '<p>'.$Fri4.'</p>';}
					if ($horraire1 == 'Fri5'){ echo '<p>'.$Fri5.'</p>';}
					if ($horraire1 == 'Fri6'){ echo '<p>'.$Fri6.'</p>';}
					// if ($horraire1 == 'Fri7'){ echo '<p>'.$Fri7.'</p>';}
					// if ($horraire1 == 'Fri8'){ echo '<p>'.$Fri8.'</p>';}
					// if ($horraire1 == 'Fri9'){ echo '<p>'.$Fri9.'</p>';}
					echo '</div>';
					
				// Fin Horraire 1
				
				// Horraire 2
					
					echo '<div class="horraire2">';
					if ($horraire2 == 'Mon1'){ echo '<p>'.$Mon1.'</p>';}
					if ($horraire2 == 'Mon2'){ echo '<p>'.$Mon2.'</p>';}
					if ($horraire2 == 'Mon3'){ echo '<p>'.$Mon3.'</p>';}
					if ($horraire2 == 'Mon4'){ echo '<p>'.$Mon4.'</p>';}
					if ($horraire2 == 'Mon5'){ echo '<p>'.$Mon5.'</p>';}
					if ($horraire2 == 'Mon6'){ echo '<p>'.$Mon6.'</p>';}
					// if ($horraire2 == 'Mon7'){ echo '<p>'.$Mon7.'</p>';}
					// if ($horraire2 == 'Mon8'){ echo '<p>'.$Mon8.'</p>';}
					// if ($horraire2 == 'Mon9'){ echo '<p>'.$Mon9.'</p>';}
					
					if ($horraire2 == 'Tue1'){ echo '<p>'.$Tue1.'</p>';}
					if ($horraire2 == 'Tue2'){ echo '<p>'.$Tue2.'</p>';}
					if ($horraire2 == 'Tue3'){ echo '<p>'.$Tue3.'</p>';}
					if ($horraire2 == 'Tue4'){ echo '<p>'.$Tue4.'</p>';}
					if ($horraire2 == 'Tue5'){ echo '<p>'.$Tue5.'</p>';}
					if ($horraire2 == 'Tue6'){ echo '<p>'.$Tue6.'</p>';}
					// if ($horraire2 == 'Tue7'){ echo '<p>'.$Tue7.'</p>';}
					// if ($horraire2 == 'Tue8'){ echo '<p>'.$Tue8.'</p>';}
					// if ($horraire2 == 'Tue9'){ echo '<p>'.$Tue9.'</p>';}
					
					if ($horraire2 == 'Wed1'){ echo '<p>'.$Wed1.'</p>';}
					if ($horraire2 == 'Wed2'){ echo '<p>'.$Wed2.'</p>';}
					if ($horraire2 == 'Wed3'){ echo '<p>'.$Wed3.'</p>';}
					if ($horraire2 == 'Wed4'){ echo '<p>'.$Wed4.'</p>';}
					if ($horraire2 == 'Wed5'){ echo '<p>'.$Wed5.'</p>';}
					if ($horraire2 == 'Wed6'){ echo '<p>'.$Wed6.'</p>';}
					// if ($horraire2 == 'Wed7'){ echo '<p>'.$Wed7.'</p>';}
					// if ($horraire2 == 'Wed8'){ echo '<p>'.$Wed8.'</p>';}
					// if ($horraire2 == 'Wed9'){ echo '<p>'.$Wed9.'</p>';}
					
					if ($horraire2 == 'Thu1'){ echo '<p>'.$Thu1.'</p>';}
					if ($horraire2 == 'Thu2'){ echo '<p>'.$Thu2.'</p>';}
					if ($horraire2 == 'Thu3'){ echo '<p>'.$Thu3.'</p>';}
					if ($horraire2 == 'Thu4'){ echo '<p>'.$Thu4.'</p>';}
					if ($horraire2 == 'Thu5'){ echo '<p>'.$Thu5.'</p>';}
					if ($horraire2 == 'Thu6'){ echo '<p>'.$Thu6.'</p>';}
					if ($horraire2 == 'Thu7'){ echo '<p>'.$Thu7.'</p>';}
					// if ($horraire2 == 'Thu8'){ echo '<p>'.$Thu8.'</p>';}
					// if ($horraire2 == 'Thu9'){ echo '<p>'.$Thu9.'</p>';}
					
					if ($horraire2 == 'Fri1'){ echo '<p>'.$Fri1.'</p>';}
					if ($horraire2 == 'Fri2'){ echo '<p>'.$Fri2.'</p>';}
					if ($horraire2 == 'Fri3'){ echo '<p>'.$Fri3.'</p>';}
					if ($horraire2 == 'Fri4'){ echo '<p>'.$Fri4.'</p>';}
					if ($horraire2 == 'Fri5'){ echo '<p>'.$Fri5.'</p>';}
					if ($horraire2 == 'Fri6'){ echo '<p>'.$Fri6.'</p>';}
					// if ($horraire2 == 'Fri7'){ echo '<p>'.$Fri7.'</p>';}
					// if ($horraire2 == 'Fri8'){ echo '<p>'.$Fri8.'</p>';}
					// if ($horraire2 == 'Fri9'){ echo '<p>'.$Fri9.'</p>';}
					echo '</div>';
					
				// Fin Horraire 2
			
			// Fin Affichage Emploi du temps
			
			?>

		</div>
	</body>
</html>