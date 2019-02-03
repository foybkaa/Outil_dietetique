
<main class="resultimc">

    <?php
    
include 'inc/resultHead.tpl.php';
$poids = $_GET['poids'];
$taille = $_GET['taille'];
$resultat = $poids/($taille * $taille);

echo '<p>Votre IMC est de <br> ' . round($resultat, 2) . '<br> Selon l\'AFSSA on considère le poids idéal comme un imc entre 18.5 et 25 <br>';
if ($resultat < 17) {
    echo 'L\'interprétation de votre imc indique <br> <span class="medium"> une maigreur</span>';
} elseif ($resultat > 26 && $resultat < 30) {
    echo 'L\'interprétation de votre imc indique <br> <span class="medium"> un surpoids</span>';
} elseif ($resultat > 30 ){
    echo 'L\'interprétation de votre imc indique <br> <span class="bad"> une obésité modérée</span>';
}
else{
    echo 'L\'interprétation de votre imc indique <br> <span class="good">une corpulence normale </span>';
}

echo '<br> <br> <a href="index.php"> Retour à l\'accueil</a> </p>'

?>
</main>