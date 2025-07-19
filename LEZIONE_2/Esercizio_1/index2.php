<?php
//Scrivere un programma utilizzando le funzioni in grado di 
//controllare l’ età  di ogni persona e stampare a video se:
//Maggiore o uguale di 18: "$nome_persona può votare"
//Minore di 18: "$nome_persona non può votare"
function messaggioDaComunicare($name, $age)
{
    if ($age >= 18) {
        return "$name può votare \n ";
    } else {
        return "$name non può votare \n ";
    }
}

function dati()
{
    $persons = [
        [
            'name' => 'Marco',
            'age' => 18,
        ],
        [
            'name' => 'Vanessa',
            'age' => 12,
        ],
        [
            'name' => 'Jack',
            'age' => 34,
        ],
        [
            'name' => 'Maria',
            'age' => 55,
        ],
    ];
    foreach ($persons as $person) {
        echo messaggioDaComunicare($person['name'], $person['age']);
    }
}

dati();
