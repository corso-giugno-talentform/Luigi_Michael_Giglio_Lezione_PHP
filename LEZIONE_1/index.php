<?php

//ESEMPI!
$stringa = 'Michael';
$intero = 90;
echo gettype($stringa);
echo gettype($intero);

$a = 90;
$b = 12;

echo "La somma è " . $a + $b . "\n";
echo "La somma è " . $a + $b . "\n";

$frase1 = 'Ciao mi chiamo Mike';
$frase2= 'Piacere!';

echo $frase1;
echo $frase2; //Su PHP bisogna andare in sequenza!



//Selezione (IF)
    if (!(1 > 2)) {
echo "Non è maggiore!";
}

$age = 18; //Variabile Dollaro Age, un valore intero (18)
if($age > 120 or $age < 1){ //CONTROLLA CASI LIMITE
    echo "Eta non corretta!"
}
    else{                   //CONTROLLA CASI NORMALI
    if($age > 18){
        echo "Si, ha più di 18 anni!";
    } else if($age < 18){
         echo "No, ha meno di 18 anni!";
    }
    else {
    echo "No, ha esattamente 18 anni!";
}
}

//SWITCH
$role = 'admin' //Definisce il ruolo di chi lo vede;
switch($role){
    case $role === 'admin':
        echo "Si hai più di 18 anni";
        break;
    case $variabile < 18:
        echo "Hai meno di 18 anni";
        break;
    case $variabile == 18:
        echo "Hai esattamente  18 anni";
        break;  
    default:
        echo "Età non corretta!"  
        break;
}


switch($variabile){ 
    case $variabile > 18:
        echo "Si hai più di 18 anni";
        break;
    case $variabile < 18:
        echo "Hai meno di 18 anni";
        break;
    case $variabile == 18:
        echo "Hai esattamente  18 anni";
        break;  
    default:
        echo "Età non corretta!"  
        break;
}
    
//CICLI


