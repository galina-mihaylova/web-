<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Essen bestellen</title>
</head>
<body>
<h3>Bitte wählen Sie eine Speise und ein Getränk.<br />
Senden Sie das Formular dann bitte ab:</h3>
<form action="Code_2_9_formular_auswertung.php" method = "post">
<p>
<select name="speise">
	<option value="Burger">Burger</option>
	<option value="Schnitzel" >Schnitzel</option>
	<option value="Salat" selected="selected">Frischen Salat </option>
</select> Speisen
</p>
<p>
<select name="getraenk">
	<option value="Coke">Coke</option>
	<option value="Wasser"selected="selected">Mineralwasser</option>
	<option value="Tee">Tee</option>
</select> Getränke
</p>
<p>
	<input type="submit" value="Bestellen"/>
</form>
</body>
</html>