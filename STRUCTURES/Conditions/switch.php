<?php
// Bloc de condition "switch"

/**
 * Permet de tester plusieurs conditions en une seule structure
 * Utilisez la condition switch pour tester une variable contre plusieurs valeurs possibles et exécuter le bloc de code correspondant à la valeur trouvée.
 * La condition switch est utile lorsque vous avez plusieurs valeurs possibles à vérifier et que vous souhaitez éviter une longue série de conditions if-elseif-else.
 * Cas d'utilisation : Afficher un message en fonction du jour de la semaine.
 */

$day_of_week = 'Monday';

switch ($day_of_week) {
    case 'Monday':
        echo "C'est lundi, début de semaine.";
    break;

    case 'Tuesday':
        echo "C'est mardi.";
    break;

    case 'Wednesday':
        echo "C'est mercredi, milieu de semaine.";
    break;

    case'Thursday':
        echo "C'est jeudi.";
    break;

    case 'Friday':
        echo "C'est vendredi, presque le week-end !";
    break;

    case 'Saturday':
        echo "C'est samedi, profitez du week-end !";
    break;

    case 'Sunday':
        echo "C'est dimanche, dernier jour du week-end.";
    break;

    default:
        echo "Jour inconnu.";
}

?>