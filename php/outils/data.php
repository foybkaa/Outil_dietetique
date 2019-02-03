<?php 

// Ce fichier va contenir les données qu'on veut pouvoir utiliser sur plusieurs / toutes les pages de notre site


// 2. La liste complete des articles du site
$articleList = [
  // Article 1
  // Je vais utiliser le numéro identifiant chaque article, comme clé
  1 => [
    'title' => 'Calcul du poids idéal',
    'subtitle' => 'Indice de Masse Corporelle',
    'text' => 'Il est indispensable de déterminé le poid idéal, pour identifier les apport en energie qui lui seront conseillés',
    'calcul' => 'href="imc.php" class="post_link">Calculer',
],
  
  // Article 2
  2 => [
    'title' => 'Métabolisme de base',
    'subtitle' => 'Equation de Harris et Benedict',
    'text' => 'Métabolisme de base ou dépense énergetique au repos est la quantité d\'énergie utilisé pour assurer les fonctions vitales de l\'organisme',
    'calcul' => 'href="mb.php" class="post_link">Calculer',
  ],
  // Article 3
  3 => [
    'title' => 'Bilan énergétique',
    'subtitle' => 'Apport énergetique total',
    'text' => 'Apport énergétique total est fonction du métabolisme de base et du niveau d\'activité phisique le nombre de calorie nessecaire pour avoir une stabilité pondéral',
    'calcul' => 'href="bilan.php" class="post_link">Calculer'
  ],
];