<?php

const BUDGET = 1000;

$input = 600;
$valore_calcolato = round($input / 3, 2);

if ($input > BUDGET) {
    echo "Non è possibile effettuare l'operazione, scegli un'importo più basso.";
} elseif ($input >= 1 && ($input < BUDGET || $input == BUDGET)) {
    echo "Paga in 3 comode rate da: " . $valore_calcolato . " Euro";
} else {
    echo "L'importo è troppo basso.";
};
