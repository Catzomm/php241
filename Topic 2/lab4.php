<!-- На карманы при замене Дана строка вида 'a1b2c3'. Напишите регулярку, которая найдет все цифры и удвоит их количество таким образом: 
'a11b22c33' (то есть рядом с каждой цифрой напишет такую же). -->
<?php
$str = 'a1b2c3';

$result = preg_replace_callback('/\d/', function($matches) {
    return $matches[0] . $matches[0];
}, $str);

echo $result;
?>

<!-- На карманы в самой регулярке Дана строка 'aaa bcd xxx efg'. Найдите строки, состоящие из одинаковых символов (это будет aaa xxx). -->
<?php
$str = 'aaa bcd xxx efg';

preg_match_all('/\b(\w)\1+\b/', $str, $matches);

print_r($matches[0]); 
?>


<!-- На обратный слеш \ Дана строка 'a\a abc'. Напишите регулярку, которая заменит строку 'a\a' на '!'. -->
<?php
$str = 'a\a abc';

$result = preg_replace('/a\\\\a/', '!', $str);

echo $result;
?>


<!-- На позитивный и негативный просмотр С помощью позитивного и 
 негативного просмотра найдите две одинаковые идущие подряд буквы и вторую поменяйте на '!'. -->
<?php
$str = 'baall';

$result = preg_replace('/(?<=(.))\1/', '!', $str);

echo $result;
?>

<!-- На позитивный и негативный просмотр С помощью позитивного и негативного просмотра найдите все строки по шаблону буква b, 
 затем 3 буквы a и поменяйте 3 буквы a на знак '!'. То есть из 'baaa' нужно сделать 'b!'. -->
<?php
$str = 'baaa baaaa baaa baaaaa';

$result = preg_replace('/(?<=b)aaa(?!a)/', '!', $str);

echo $result;
?>