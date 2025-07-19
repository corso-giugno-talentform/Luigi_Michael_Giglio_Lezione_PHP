<?php
//Scrivere un programma funzionale che, dato un numero in input 
//($max), stampi a video:

//PRIMA tutti i numeri Dispari
//DOPO tutti i numeri PARI
//Esempio max = 10
//1,3,5,7,9
//0,2,4,6,8,10

function controlloNumero($max)
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 !== 0) {
            echo $i . ', ';
        }
    }

    echo "\n";

    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 === 0) {
            echo $i . ', ';
        }
    }
}

controlloNumero(10);
