<?php
function t($n) {
    echo "\t";
    for ($i = 1; $i <= $n; $i++) {
        echo "$i\t";
    }
    echo "\n";
    for ($i = 1; $i <= $n; $i++) {
        echo "$i\t";
        for ($j = 1; $j <= $n; $j++) {
            echo $i * $j . "\t";
        }
        echo "\n";
    }
}
$n = intval(readline(""));
t($n);

