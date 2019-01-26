<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Essen bestellen - Auswertung</title>
</head>
<body>
<?php
$essen = $_POST["speise"];
$trinken = $_POST["getraenk"];
  
echo "Sie möchten also " .$essen." essen<br />";
echo " und dazu " .$trinken ." trinken!<br />";
  
$essenpreis = 0;
$trinkenpreis = 0;

switch ($essen) {
	case "Burger":
		$essenpreis = 8.95;
		break;
	case "Schnitzel":
		$essenpreis = 10.95;
  		break;
  	case "Salat":
  		$essenpreis = 7.50;
  		break;
 }
 
switch ($trinken) {
	case "Coke":
		$trinkenpreis = 3.20;
		break;
  	case "Wasser":
  		$trinkenpreis = 2.50;
  		break;
  	case "Tee":
  		$trinkenpreis = 3.20;
  		break;
}

echo "<p>Das macht € " .($essenpreis + $trinkenpreis) .".</p>";
?>
</body>
</html>
