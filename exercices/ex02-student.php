<?php

/* CONDITIONNELLE
1) En fonction du code iso d'un pays, affichez le texte suivant
es ou pe ou bo => Bienvenido a nuestro sitio web
en => Welcome to our website
de ou au => Willkommen auf unserer Webseite
sinon Bienvenue sur notre site Web
*/

$country = 'en';

if ($country == 'es' || $country == 'pe' || $country == 'bo') {
    echo 'Bienvenido a nuestro sitio web';
} elseif ($country == 'en') {
    echo 'Welcome to our website';
} elseif ($country == 'de' || $country == 'au') {
    echo 'Willkommen auf unserer Webseite';
} else {
    echo 'Bienvenue sur notre site Web';
}

echo '<hr>';

/* TABLEAUX
2) Créez un tableau associatif contenant différentes catégories de voitures et leur prix:

- Polo 17000
- Tiguan 29000
- Golf 21000
- Touran 26000
- T-Rock 23000

2.1) Affichez toutes les voitures et leur prix par odre alphabétique
2.2) Affichez le nombre de voitures
2.3) Affichez le prix total des voitures
2.4) Mettez en gras (b) toutes les voitures dont le prix est supérieur à 25000
 */

// 2
$cars = ['Polo' => 17000, 'Tiguan' => 29000, 'Golf' => 21000, 'Touran' => 26000, 'T-Rock' => 23000];

// 2.1
ksort($cars);
asort($cars);

foreach ($cars as $car => $price) {
    echo $car.' '.$price.' €<br>';
}

echo '<hr>';

// 2.2
echo count($cars).' voitures';

echo '<hr>';

// 2.3
echo 'Prix total: '.array_sum($cars).' €';

echo '<hr>';

// 2.4
foreach ($cars as $car => $price) {
    if ($price > 25000) {
        echo $car.' <b>'.$price.'</b> €<br>';
    } else {
        echo $car.' '.$price.' €<br>';
    }
}