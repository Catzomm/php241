<!-- array_sum. Дан массив $arr. 
 С помощью функций array_sum и count найдите среднее арифметическое элементов данного массива. -->
<?php
$arr = [10, 20, 30, 40, 50];

$average = array_sum($arr) / count($arr);

echo "Среднее: $average";
?>