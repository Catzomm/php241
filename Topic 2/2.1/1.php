<!-- array_count_values. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. 
 Подсчитайте сколько раз встречается каждая из букв.  -->
<?php
$arr = ['a', 'b', 'c', 'b', 'a'];
$result = array_count_values($arr);

print_r($result);
?>