<!-- Условный оператор. Дано: $c = -27; $b = 12; 
 Найти: Если обе переменные положительные, то выполнить операцию возведения в степень одного числа в другое, 
 иначе если переменные отрицательные, то выполнить операцию сложения, иначе перемножить переменные. -->

<?php
$c = -27;
$b = 12;

if ($c > 0 && $b > 0) {
    $result = $c ** $b;
} elseif ($c < 0 && $b < 0) {
    $result = $c + $b;
} else {
    $result = $c * $b;
}

echo "Результат: $result";
?>