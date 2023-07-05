<?php

$nbcoup = 1;
$nbgenere = rand(1, 100);
$nbsaisie = intVal(readline("choisis un nombre entre 1 et 100: "));
// $typeNbGenere = $nbgenere;
// $typeNbCoup = $nbcoup;
// $typeNbSaisie = $nbsaisie;
// var_dump($typeNbCoup, $typeNbGenere, $typeNbSaisie);

while ($nbsaisie != $nbgenere) {
    if ($nbcoup > 8) {
        echo ("             >>  GAME OVER  <<
        echec nombres de coups dépasser: recommence
                   il fallait trouver " . $nbgenere);
        exit;
    } else {
        if ($nbsaisie > $nbgenere) {
            $nbsaisie = intval(readline("veuillez entrer nombre plus petit: "));
            $nbcoup++;
        } else if ($nbsaisie < $nbgenere) {
            $nbsaisie = intVal(readline("veuillez entrer un nombre plus grand: "));
            $nbcoup++;
        };
    }
};


switch ($nbcoup) {
    case 1:
        echo ("WOAH tu est chanceux vas jouer au loto");
        break;
    case 2:
        echo ("EXCELLENT tu est intelligent");
        break;
    case 3:
        echo ("BRAVO tu t'es surpasser");
        break;
    case 4:
        echo ("BIEN tu est dans la moyenne");
        break;
    case 5:
        echo ("c'est bien continue");
        break;
    case 6:
        echo ("MOUAI peux mieux faire ");
        break;
    case 7:
        echo ("tu as trouvé c'est le principal");
        break;
    case 8:
        echo ("ENFIN je n'y croivais plus");
}


echo (" succès! en " . $nbcoup . " coups ");
