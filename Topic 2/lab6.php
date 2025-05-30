<!-- Сессии.
По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран. -->
<?php
session_start();
$_SESSION['text'] = 'test';
echo "Содержимое сессии: " . $_SESSION['text'];
?>

<!-- Сессии.
Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. Скрипт должен выводить на экран количество обновлений. 
При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу. -->
<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
    echo "<p>Вы ещё не обновляли эту страницу.</p>";
} else {
    $_SESSION['counter']++;
    echo "<p>Количество обновлений страницы: {$_SESSION['counter']}</p>";
}
?>

<!-- Сессии.
Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. -->
<?php
session_start();
if (!isset($_SESSION['entry_time'])) {
    $_SESSION['entry_time'] = time();
    echo "<p>Вы только что зашли на сайт.</p>";
} else {
    // Вычисляем разницу во времени
    $seconds_passed = time() - $_SESSION['entry_time'];
    echo "<p>Вы зашли на сайт {$seconds_passed} секунд назад.</p>";
}
?>

<!-- Куки.
По заходу на страницу запишите в куку с именем test текст '123'. Затем обновите страницу и выведите содержимое этой куки на экран. -->
<?php
if (!isset($_COOKIE['test'])) {
    setcookie('test', '123');
    echo "Кука 'test' установлена. Пожалуйста, обновите страницу.";
} else {
    echo "Содержимое куки 'test': '{$_COOKIE['test']}'";
}
?>

<!-- Куки.
Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'. -->
<?php
if (isset($_COOKIE['counter'])) {
    $count = $_COOKIE['counter'] + 1;
} else {
    $count = 1;
}
setcookie('counter', $count);
echo "<p>Вы посетили наш сайт {$_COOKIE['counter']} раз!</p>"
?>