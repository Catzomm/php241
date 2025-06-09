<?php
function calculateTrig($func, $param) {
    $func = strtolower($func);
    $param_rad = deg2rad($param);

    $available = [
        "sin" => sin($param_rad),
        "cos" => cos($param_rad),
        "tan" => tan($param_rad)
    ];

    return $available[$func] ?? "Неизвестная функция: $func";
}

$expression = trim(file_get_contents(__DIR__ . '/expression.txt'));

if (preg_match('/([\d\.\/]+)\*([a-z]+)\(([\d\.]+)\)/i', $expression, $matches)) {
    if (strpos($matches[1], '/') !== false) {
        list($num, $den) = explode('/', $matches[1]);
        $multiplier = $num / $den;
    } else {
        $multiplier = floatval($matches[1]);
    }

    $trigValue = calculateTrig($matches[2], $matches[3]);
    $result = $multiplier * $trigValue;

    echo "Вычисление выражения: {$expression}<br>";
    echo "Результат: {$result}<br>";
} else {
    echo "Неизвестная функция!";
}
?>
