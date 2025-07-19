<?php

$arrays = [
    [
        'name' => 'Michael',
        'gender' => 'M',
    ],
    [
        'name' => 'Roberta',
        'gender' => 'F',
    ],
    [
        'name' => 'Ciccio',
        'gender' => 'M',
    ],
    [
        'name' => 'Andrea',
        'gender' => '',
    ],
];

foreach ($arrays as $array) {
    if ($array['gender'] == null) {
        echo $array['name'] . " ha preferito non specificare.\n";
    } elseif ($array['gender'] == 'M') {
        echo "Buongiorno Sig. " . $array['name'] . " .\n";
    } else {
        echo "Buongiorno Sig.ra " . $array['name'] . " .\n";
    }
};
