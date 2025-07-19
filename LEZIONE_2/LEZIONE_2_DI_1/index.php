<?php

//1)Estrazione
//2)Incapsulamento
//3)Astrazione

$somma = 5 + 4; //Se ci fai caso, è ripetuto troppe volte!
$somma = 11 + 4; //Se ci fai caso, è ripetuto troppe volte!
$somma = 12 + 4; //Se ci fai caso, è ripetuto troppe volte!

$somma = $a + $b; //-> Scriverlo cosi rende tutto più semplice e pulito!


//Funzioni Built in
round(56.000000, 2); //Arrotonda un numero decimale, con 2 decimali. In questo caso, 56.00!
gettype('sss');
var_dump();
print_r();

//Custom Function
$a = 10;
$b = 3;
$c = 1;
$d = 90;

$somma1 = $a + $b; //Se ci fai caso, è ripetuto troppe volte!
$somma2 = $c + $d; //Se ci fai caso, è ripetuto troppe volte!
$somma3 = $somma2 + $c + $somma1; //Se ci fai caso, è ripetuto troppe volte!
$somma4 = $somma1 + $somma2; //Se ci fai caso, è ripetuto troppe volte!

function sum($ciccio, $pippo) //parametri formali oppure per valore!
{
    return $ciccio + $pippo;
}
echo sum($a, $b); //echo sum potevamo pure scriverlo sotto le Custom Function, non cambia nulla;
//Poichè questa "echo sum" CHIAMA LA FUNZIONE SUM!



$persons = ['Francesco', 'Antonio', 'Laura'];

echo 'Ciao mi chiamo' . saluta($persons[0]);
echo 'Ciao mi chiamo' . saluta($persons[1]);
echo 'Ciao mi chiamo' . saluta($persons[2]);

saluta($persons[0]); //Pure cosi si puo scrivere
saluta($persons[1]); //Pure cosi si puo scrivere
saluta($persons[2]); //Pure cosi si puo scrivere

foreach ($persons as $person) { //Oppure utilizziamo foreach, cosi con 2 righe di codice si scrive tutto ciò che c'è scritto prima!
    saluta($person);
}

function saluta($string)
{
    echo 'Ciao mi chiamo' . $string;
}

// <------------------------------------------------------------------------------->

$persons =  [ 
            ['name' => 'Francesco', 'age' => 12],
            ['name' => 'Silvia', 'age' => 20],
            ['name' => 'Luca',],
]

function saluta($string, $intero = 0){ //ssecondo valore ( = 0) facoltativo!
    return 'Ciao mi chaimo ' . $string . ' e ho anni ' . $intero . "\n";
}

foreach($persons as $person){
    $name = checkIsset($person['name']) ? $person['name'] : 'Nome non presente';
    $age = checkIsset($person['age']) ? $person['age'] : ' - ';
    echo saluta(checkIsset($person['name']), checkIsset($person['age']));
}

function checkIsset($element){
    return isset($element) ? $element : ' - ';
}