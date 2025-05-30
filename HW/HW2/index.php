<?php
// index.php — Форма обратной связи
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img src="mospolytech.jpg" alt="МосПолитех Логотип">
        <div class="header-title">Форма обратной связи</div>
    </header>
    <main class="container">
        <form method="POST" action="https://httpbin.org/post">
            <div class="form-group">
                <label for="name">Имя пользователя</label>
                <input type="text" id="name" name="name" required maxlength="40">
            </div>
            <div class="form-group">
                <label for="email">e-mail пользователя</label>
                <input type="email" id="email" name="email" required maxlength="40">
            </div>
            <div class="form-group">
                <label for="type">Тип обращения</label>
                <select id="type" name="type" required>
                    <option value="Жалоба">Жалоба</option>
                    <option value="Предложение">Предложение</option>
                    <option value="Благодарность">Благодарность</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Текст обращения</label>
                <textarea id="message" name="message" required maxlength="500"></textarea>
            </div>
            <div class="form-group">
                <label>Вариант ответа:</label>
                <label><input type="checkbox" name="reply_sms" value="sms"> СМС</label>
                <label><input type="checkbox" name="reply_email" value="email"> e-mail</label>
            </div>
            <button type="submit" class="button">Отправить</button>
        </form>
        <a href="result.php" class="link">Посмотреть результат get_headers</a>
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
