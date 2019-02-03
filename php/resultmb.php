<main class="resultimc">

    <?php
    
include 'inc/resultHead.tpl.php';

$sexe = $_GET['gender'];
$age = $_GET['age'];
$poids = $_GET['poids'];
$taille = $_GET['taille'];

if($sexe == 'mr'){
    $mb = 0.276 + (0.0573 * $poids) + (2.073 * $taille) - (0.0285 * $age);
}
else{
    $mb = 2.741 + (0.0402 * $poids) + (0.711 * $taille) - (0.0197 * $age);
}
$mb = $mb * 1000 / 4.18;



echo '<p>Votre organisme a besoin de ' . round($mb) . 'Kcal pour assurer ses fonction vitales
<br> cela correspond à 60% de votre dépense énergetique journaliére !';
echo '<br> <br> <a href="index.php"> Retour à l\'accueil</a> </p>'

?>
</main>