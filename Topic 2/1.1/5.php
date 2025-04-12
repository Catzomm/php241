<!-- Динамическая типизация. Дано: $a = 2; $b = 2.0; $c = ‘2’; $d = ‘two’; $g = true; $f = false; 
 Найти: Все возможные арифметические операции над переменными, результатом которых будет строка. -->
<?php
$a = 2;
$b = 2.0;
$c = '2';
$d = 'two';
$g = true;
$f = false;

echo "Результаты с приведением к строке:\n";
echo (string)($a + $b)."\n"; // 4
echo (string)($a + $c)."\n"; // 4
echo (string)($a - $g)."\n"; // 1
echo (string)($a * $f)."\n"; // 0

echo (string)($b + $a)."\n"; // 4
echo (string)($b + $c)."\n"; // 4
echo (string)($b - $g)."\n"; // 1
echo (string)($b * $f)."\n"; // 0
?>