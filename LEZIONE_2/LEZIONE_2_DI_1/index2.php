<?php

$students = [
    [
        'name' => 'Marco'
        'age' => 21,
    ],
     [
        'name' => 'Maria'
        'age' => 17,
     ],
     [
        'name' => 'Jack'
        'age' => 24,
     ],
];

const MAX_ITA = 18;
const MAX_USA = 16;

//Leggere le persona singolarmente nell'array
//Quindi ho bisogno di ciclarle (foreach)
//Se la chiave "age" è >= 18 sarà maggiorenne, altrimenti no!

foreach ($students as $student) {
    if($student['age'] >= 18){
        echo $student['name'] . ' è maggiorenne ' . "\n";
    } else { 
    echo $student['name'] . 'non è maggiorenne' . "\n";
    } 
}

foreach ($students as $student) {
    if ($student['age'] >= 16) {
        echo $student['name'] . ' è maggiorenne ' . "\n";
    } else {
        echo $student['name'] . 'non è maggiorenne' . "\n";
    }
}

function greatherTen($intero, $max){
    if ($intero >= $max) {
        return true;
    } 
        return false;
}

foreach ($students as $student) {
    if (greatherTen($student['age'], MAX_ITA)) {
        echo $student['name'] . ' è maggiorenne ' . "\n";
    } else {
        echo $student['name'] . 'non è maggiorenne' . "\n";
    }
}

echo "Stampo per italia \n";
checkMax(MAX_ITA);
echo "--------------------- \n";
echo "Stampo per USA \n";
checkMax(MAX_USA);


function checkMax($intero){
    $students = [
    [
        'name' => 'Marco'
        'age' => 21,
    ],
     [
        'name' => 'Maria'
        'age' => 17,
     ],
     [
        'name' => 'Jack'
        'age' => 24,
     ],
];
    foreach ($students as $student) {
        if (greatherTen($student['age'], $intero)) {
            echo $student['name'] . ' è maggiorenne ' . "\n";
        } else {
            echo $student['name'] . 'non è maggiorenne' . "\n";
        }
    }
}
