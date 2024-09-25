<?php
function f($n) {
    $a = 1;
    $b = 2;
    if ($n == 1) {
        echo "$a";
    } else if ($n >= 2) {
        echo "$a, $b";
        for ($i = 3; $i <= $n; $i++) {
            $c = $a + $b;
            echo ", $c";
            $a = $b;
            $b = $c;
        }
    }
    echo "\n";
}
$n = intval(readline(""));
f($n);

