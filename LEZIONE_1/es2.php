<?php

$year = 2002;
$this_year = 2025;
$age = $this_year - $year;

if ($age < 0) {
    echo "Il numero da te inserito non può essere elaborato";
} elseif ($age >= 0 && $age <= 3) {
    echo "Troppo piccolo per scrivere a macchina.";
} else {
    echo "Il nostro sistema ha calcolato che hai: Hai " . $age . " anni.";
}
