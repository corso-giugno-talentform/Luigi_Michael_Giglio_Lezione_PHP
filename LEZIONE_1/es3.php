<?php

$order = ucfirst(strtolower('insalata')); // Normalizzo l'input prima facendolo tutto minuscolo e poi mettendo la prima lettera maiuscola
$item_price = 0;
$availability = true;

switch ($order) {

    case 'Pizza':
        $item_price = 6;
        break;

    case 'Birra':
        $item_price = 3;
        break;

    case 'Panino':
        $item_price = 8;
        break;

    case 'Insalata':
        $availability = false;
        break;

    case 'Dessert':
        $item_price = 3;
        break;

    default:
        $item_price = null;
        break;
}

if (is_null($item_price)) {

    echo "Non è stato possibile processare il tuo ordine, scegli un'altra pietanza.";
} else {
    if (!$availability) {
        echo "Hai ordinato " . $order . ", ma al momento non è disponibile. Ti invitiamo a scegliere un'altra pietanza.\n";
    } else {
        echo "Hai ordinato " . $order . " con un costo di " . $item_price . " Euro.\n";
    }
}
