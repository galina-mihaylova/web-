<!DOCTYPE html>
<html>
<head>
<?php
//eigene Funktion, die die Zahl des Wochentages in den
//Tag umsetzt
function wochentag($wtag)
{
	switch ($wtag) {
	case 0:
		$ergebnis = "Sonntag";
		break;
	case 1:
		$ergebnis = "Montag";
		break;
	case 2:
		$ergebnis = "Dienstag";
		break;
	case 3:
		$ergebnis = "Mittwoch";
		break;
	case 4:
		$ergebnis = "Donnerstag";
		break;
	case 5:
		$ergebnis = "Freitag";
		break;
	case 6:
		$ergebnis = "Samstag";
		break;
	}
	return $ergebnis; 
}

?>

	<title><?php
		//Stellt im title-Tag das aktuelle Datum zur Verfügung
		//Wenn der Funktion date() kein Datum übergeben wird,
		//nimmt sich das aktuelle Serverdatum
		$datum = date("d.m.Y");
		echo $datum;
 	?>
	</title>
	<meta charset="UTF-8" />
</head>
<body>
<h1><?php
	//Stellt in der Überschrift die Uhrzeit dar
	$datum = date("H:i:s");
	echo $datum;
?>
</h1>

<p>Heute ist der <?php
	//ermittelt den aktuellen Tag als Zahl und gibt ihn aus
	$tag = date("w");
	echo $tag;
?>
. Wochentag.<br /> Das ist ein <?php
//ruft die eigene Funktion wochentag() auf und übergibt
//dieser die Nummer des aktuellen Tages
//liefert den Wochentag als Text zurück
 echo wochentag($tag);?>.</p>
</body>
</html>
