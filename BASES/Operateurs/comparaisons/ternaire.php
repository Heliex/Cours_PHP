<?php
// Opérateur ternaire

$variable = 42; // int

// Version longue
if($variable === 40) // va afficher false
{
  echo "true\n";
}
else
{
   echo "false\n";
}

$variable = 40;

// Version ternaire
echo ($variable === 40 ? 'true' : 'false'). "\n"; // affiche true

?>