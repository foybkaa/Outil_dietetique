<main class="resultimc">

    <?php
    
include 'inc/resultHead.tpl.php';

$sexe = $_GET['gender'];
$age = $_GET['age'];
$poids = $_GET['poids'];
$taille = $_GET['taille'];
$nap = $_GET['sport'];

if($sexe == 'mr'){
    $mb = 0.276 + (0.0573 * $poids) + (2.073 * $taille) - (0.0285 * $age);
}
else{
    $mb = 2.741 + (0.0402 * $poids) + (0.711 * $taille) - (0.0197 * $age);
}
$mb = $mb * 1000 / 4.18;
$aet = $mb * $nap;




echo '<p>Votre besoin énergétique journalié est de ' . round($aet) . 'Kcal par jours
<br> Si vous souhaitez perdre du poids votre apport calorique journalier doit être inférieur à ' . round($aet) . 'Kcal par jours
alors que si vous souhaitez prendre du poids votre apport calorique journalier doit être supérieur !';
echo '<br> <br> <a href="index.php"> Retour à l\'accueil</a> </p>'

?>
</main>