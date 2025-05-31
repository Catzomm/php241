<?php
$equation = "X * 7 = 49";

$equation = str_replace(' ', '', rtrim($equation, ';'));

if (preg_match('/([\w]+)([\+\-\*\/])([\w]+)=([\w]+)/', $equation, $matches)) {
    $left = $matches[1];
    $op   = $matches[2];
    $right = $matches[3];
    $res   = $matches[4];

    if ($left === 'X') {
        switch ($op) {
            case '+': $X = $res - $right; break;
            case '-': $X = $res + $right; break;
            case '*': $X = $res / $right; break;
            case '/': $X = $res * $right; break;
        }
    } elseif ($right === 'X') {
        switch ($op) {
            case '+': $X = $res - $left; break;
            case '-': $X = $left - $res; break;
            case '*': $X = $res / $left; break;
            case '/': $X = $left / $res; break;
        }
    }
    echo "X = $X";
}
?>
