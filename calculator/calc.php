<?php
if (!isset($_POST['expr'])) {
    echo 'Ошибка';
    exit;
}
$expr = $_POST['expr'];

if (!preg_match('/^[\d\+\-\*\/\(\)\.\s]+$/', $expr)) {
    echo 'Недопустимые символы';
    exit;
}

function calc($expr) {
    $expr = preg_replace('/\s+/', '', $expr);

    while (strpos($expr, '(') !== false) {
        $expr = preg_replace_callback('/\(([^\(\)]*)\)/', function($m) {
            return calc($m[1]);
        }, $expr);
    }

    $pos = strrpos($expr, '+');
    if ($pos !== false) return calc(substr($expr, 0, $pos)) + calc(substr($expr, $pos+1));
    $pos = strrpos($expr, '-');
    if ($pos !== false && $pos > 0) return calc(substr($expr, 0, $pos)) - calc(substr($expr, $pos+1));

    $pos = strrpos($expr, '*');
    if ($pos !== false) return calc(substr($expr, 0, $pos)) * calc(substr($expr, $pos+1));
    $pos = strrpos($expr, '/');
    if ($pos !== false) {
        $right = calc(substr($expr, $pos+1));
        if ($right == 0) return 'Деление на 0!';
        return calc(substr($expr, 0, $pos)) / $right;
    }

    if (is_numeric($expr)) return $expr;

    return 'Ошибка';
}

echo calc($expr);
