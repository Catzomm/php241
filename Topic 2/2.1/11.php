<!-- array_replace. Дан массив ['a', 'b', 'c', 'd', 'e']. 
 Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'. -->
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

$result = array_replace($arr, [0 => '!', 3 => '!!']);

print_r($result);
?>