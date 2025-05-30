<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>get_headers — Feedback form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img src="mospolytech.jpg" alt="МосПолитех Логотип">
        <div class="header-title">Результат работы get_headers</div>
    </header>
    <main>
    <?php 
      $result = get_headers("https://httpbin.org/post");
      echo "<textarea>";
      print_r($result);
      echo "</textarea>";
    ?>
    </main>
    <footer class="footer">
        Задание для самостоятельной работы «Feedback form»
        <br>Собрать сайт из двух страниц.
        1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.
        2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.
        <br>Дано:
        <br>Header = слева логотип МосПолитеха, по центру название работы.
        <br>Footer = задание для самостоятельно работы (без описания).
        <br>Main 1. {Имя пользователя,e-mail пользователя, Тип обращения (жалоба, предложение, благодарность), Текст обращения, Вариант ответа(смс, e-mail) (checkbox), Кнопка отправить, Ссылка на 2 страницу}
        <br>Main 2{Результат работы функции get_headers вывести в textarea}
    </footer>
</body>
</html>