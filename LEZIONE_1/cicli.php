<?php
//STAMPA I NUMERI DA 1 A 5
$array = [1, 2, 3, 4, 5];

echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];
echo $array[4];

//STAMPA I NUMERI DA 1 A 1000 MA FATTO BENE!

for ($i = 0; $i <= 1000; $i++) {
    echo $i . "\n";
}

$persone = ['Antonio', 'Alberto', 'Luca'];
echo 'Ciao mi chiamo ' . $persone[0] . "\n"; //QUA RIPETIAMO 3 VOLTE IL CODICE
echo 'Ciao mi chiamo ' . $persone[1] . "\n";
echo 'Ciao mi chiamo ' . $persone[2] . "\n";


for ($i = 0; $i < count($persone); $i++) { //QUA SI RIPETE UNA SOLA VOLTA IL CODICE
    echo 'Ciao mi chiamo ' . $persone[$i] . "\n";
}


//FOREACH
foreach ($persone as $persona) { //AS vuol dire "ogni qual volta che visualizza l elemento, crea una variabile temporanea!
    echo 'Ciao mi chiamo ' . $persona . "\n";
}
