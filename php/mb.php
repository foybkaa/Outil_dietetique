<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css" />
    
</head>
<body class="mb">
<h1>Calcule de votre métabolisme de base</h1>
<h2>selon l'équation de Harris et Benedict</h2>

<form class="contact-form" action="resultmb.php" method="GET">

<div class="contact-form_row">

  <input type="radio" name="gender" id="gender-mme" value="mme" required> 
  <label for="gender-mme">Mme</label> / 

  <input type="radio" name="gender" id="gender-mr" value="mr" required>
  <label for="gender-mr">Mr</label>
<br> <br>
    <input type="number" name="age" id="age_an" placeholder="Votre âge" required>
  <input type="number" step="0.01" name="poids" id="poids_kg" placeholder="Votre poids en kg" required>

  <input type="number" step="0.01" name="taille" id="taille_m" placeholder="votre taille en métre" required>
  <br> <br>
</div>
<button type="submit">CALCULER</button>

</form>
</body>
</html>