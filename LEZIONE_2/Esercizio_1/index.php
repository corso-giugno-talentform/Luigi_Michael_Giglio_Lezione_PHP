 <?php

    //<------------------------ESERCIZIO 1------------------------>
    //Utilizzando un approccio funzionale (piccole funzioni 
    //che risolvono un piccolo problema), riscrivere 
    //il programma fatto in precedenza che stampi 
    //in console tutti i numeri da 1 a 30.

    //Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”;
    //Se multiplo di 5 deve stampare “JAVASCRIPT”;
    //Se multiplo di 3 e 5 (15) deve stampare “Aulab”;


    /* function multiplo($number, $divisor)
{
    return $number % $divisor === 0;
}

function testoCorretto($number)
{
    if (multiplo($number, 3)) {
        return "PHP";
    } else if (multiplo($number, 5)) {
        return "JAVASCRIPT";
    } else if (multiplo($number, 15)) {
        return "AULAB";
    } else {
        return $number;
    }
}

function stampaNumeri($start, $end)
{
    foreach (range($start, $end) as $number) {
        echo testoCorretto($number) . "\n";
    }
}

stampaNumeri(1, 30); */

    function checknumber3($intero)
    {
        if ($intero % 3 === 0 && $intero % 5 !== 0) {
            echo 'PHP' . "\n\n";
            return true;
        }
        return false;
    }

    function checknumber5($intero)
    {
        if ($intero % 5 === 0 && $intero % 3 !== 0) {
            echo 'JAVASCRIPT' . "\n\n";
            return true;
        }
        return false;
    }

    function checknumber15($intero)
    {
        if ($intero % 3 === 0 && $intero % 5 === 0) {
            echo 'AULAB' . "\n\n";
            return true;
        }
        return false;
    }

    for ($i = 1; $i <= 30; $i++) {
        if (checknumber15($i)) {
        } elseif (checknumber3($i)) {
        } elseif (checknumber5($i)) {
        } else {
            echo 'Numero => ' . $i . "\n\n";
        }
    }

    //O SI SCRIVE COME SCRITTO SOPRA... OPPURE SI SCRIVO COME SCRITTO SOTTO!
    function checkNumber($intero, $divisore)
    {
        if ($intero % $divisore === 0) {
            return true;
        }
        return false;
    }
    checkNumber(3);
    checkNumber(5);

    if (checkNumber(3) && checkNumber(5)) {
    }
