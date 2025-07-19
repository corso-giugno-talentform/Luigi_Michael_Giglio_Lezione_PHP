<?php

for ($i = 1; $i < 30; $i++) {
    if (!(($i % 3) == 0 || ($i % 5) == 0)) {
        echo $i . "\n";
    } else {
        if (($i % 3) == 0 && ($i % 5) == 0) {
            echo "Francesco" . "\n";
        } elseif (($i % 3) == 0) {
            echo "PHP" . "\n";
        } else {
            echo "JAVASCRIPT" . "\n";
        }
    }
};
