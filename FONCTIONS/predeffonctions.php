<?php
// Les fonctions

// Utilisation de certaines fonctions déjà prédéfinies par PHP

/**
 * strlen(string $string): int - Retourne la longueur d'une chaîne.
 *
 * Utilisation : Lorsque vous devez connaître le nombre de caractères d'une chaîne de caractères.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.strlen.php
 */
$length = strlen("Hello, World!");

echo "[STRLEN] : " . $length . "\n\n\n";


/**
 * strpos(string $haystack, string $needle, int $offset = 0): int|false - Trouve la position de la première occurrence d'une sous-chaîne.
 *
 * Utilisation : Lorsque vous devez déterminer si une chaîne contient une autre chaîne et connaître sa position.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.strpos.php
 */
$position = strpos("Hello, World!", "World");

echo "[STRPOS] = $position\n\n\n";

/**
 * substr(string $string, int $start, int|null $length = null): string|false - Retourne une partie d'une chaîne.
 *
 * Utilisation : Lorsque vous voulez extraire une partie d'une chaîne de caractères en fonction de la position et de la longueur.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.substr.php
 */
$substring = substr("Hello, World!", 0, 5);

echo "[SUBSTR] : $substring\n\n\n";

/**
 * trim(string $string, string $characters = " \n\r\t\v\0"): string - Supprime les espaces (ou d'autres caractères) en début et fin de chaîne.
 *
 * Utilisation : Lorsque vous voulez nettoyer une chaîne de caractères en supprimant les espaces ou d'autres caractères indésirables.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.trim.php
 */
$trimmed = trim("  Hello, World!  ");

echo "[TRIM] : $trimmed\n\n\n";

/**
 * implode(string $glue, array $pieces): string - Joint les éléments d'un tableau en une chaîne, en utilisant une chaîne comme séparateur.
 *
 * Utilisation : Lorsque vous voulez convertir un tableau de chaînes en une seule chaîne de caractères.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.implode.php
 */
$array = ["Hello", "World!"];
$string = implode(" ", $array);

echo "[IMPLODE] : $string\n\n\n";

/**
 * explode(string $separator, string $string, int $limit = PHP_INT_MAX): array - Scinde une chaîne en un tableau, en utilisant une chaîne comme séparateur.
 *
 * Utilisation : Lorsque vous voulez convertir une chaîne de caractères en un tableau de chaînes, en utilisant un séparateur spécifique.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.explode.php
 */

$string = "Hello, World!";
$array = explode(", ", $string);

echo " <= [EXPLODE]" . var_dump($array) ."\n\n\n";

/**
 * array_map(callable $callback, array $array): array - Applique une fonction de rappel à tous les éléments d'un tableau.
 *
 * Utilisation : Lorsque vous voulez appliquer une fonction spécifique à tous les éléments d'un tableau.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.array-map.php
 */

$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function($n) {
    return $n * $n;
}, $numbers);

echo " <= [ARRAY_MAP] " . var_dump($squares) ."\n\n\n";

/**
 * sort(array &$array, int $flags = SORT_REGULAR): bool - Trie un tableau en ordre croissant.
 *
 * Utilisation : Lorsque vous voulez trier un tableau d'éléments dans l'ordre croissant.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.sort.php
 */

$numbers = [3, 1, 5, 2, 4];
sort($numbers);

echo " <= [SORT] " . var_dump($numbers) ."\n\n\n";

/**
 * count(mixed $value, int $mode = COUNT_NORMAL): int - Compte tous les éléments d'un tableau ou les propriétés d'un objet.
 *
 * Utilisation : Lorsque vous voulez connaître le nombre d'éléments dans un tableau ou les propriétés d'un objet.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.count.php
 */

$array = [1, 2, 3, 4, 5];
$count = count($array);

echo "[COUNT] : $count\n\n\n";

/**
 * in_array(mixed $needle, array $haystack, bool $strict = false): bool - Vérifie si une valeur existe dans un tableau.
 *
 * Utilisation : Lorsque vous voulez savoir si une valeur spécifique se trouve dans un tableau.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.in-array.php
 */

$array = ["apple", "banana", "cherry"];
$exists = in_array("banana", $array);

echo "[IN_ARRAY] : $exists\n\n\n";

/**
 * array_filter(array $array, callable $callback = null, int $mode = 0): array - Filtre les éléments d'un tableau à l'aide d'une fonction de rappel.
 *
 * Utilisation : Lorsque vous voulez filtrer un tableau d'éléments en fonction d'une condition spécifique.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.array-filter.php
 */

$numbers = [1, 2, 3, 4, 5];

$evenNumbers = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});

echo " <= [ARRAY_FILTER] " . var_dump($evenNumbers) ."\n\n\n";

/**
 * round(float $number, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float - Arrondit un nombre à une certaine précision.
 *
 * Utilisation : Lorsque vous voulez arrondir un nombre décimal à un certain nombre de chiffres après la virgule.
 *
 * Doc PHP : https://www.php.net/manual/fr/function.round.php
 */

$number = 3.14159;
$rounded = round($number, 2);

echo "[ROUND] : $rounded\n\n\n";

?>