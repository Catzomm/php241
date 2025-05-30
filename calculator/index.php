<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calc-iphone">
        <input id="display" type="text" readonly>
        <div class="row">
            <button class="btn btn-clear" onclick="clearDisplay()">C</button>
            <button class="btn" onclick="append('(')">(</button>
            <button class="btn" onclick="append(')')">)</button>
            <button class="btn btn-op" onclick="append('/')">÷</button>
        </div>
        <div class="row">
            <button class="btn" onclick="append('7')">7</button>
            <button class="btn" onclick="append('8')">8</button>
            <button class="btn" onclick="append('9')">9</button>
            <button class="btn btn-op" onclick="append('*')">×</button>
        </div>
        <div class="row">
            <button class="btn" onclick="append('4')">4</button>
            <button class="btn" onclick="append('5')">5</button>
            <button class="btn" onclick="append('6')">6</button>
            <button class="btn btn-op" onclick="append('-')">−</button>
        </div>
        <div class="row">
            <button class="btn" onclick="append('1')">1</button>
            <button class="btn" onclick="append('2')">2</button>
            <button class="btn" onclick="append('3')">3</button>
            <button class="btn btn-op" onclick="append('+')">+</button>
        </div>
        <div class="row">
            <button class="btn btn-zero" onclick="append('0')">0</button>
            <button class="btn" onclick="append('.')">.</button>
            <button class="btn btn-eq" onclick="send()">=</button>
        </div>
    </div>
    <script>
        const display = document.getElementById('display');
        function append(val) {
            display.value += val;
        }
        function clearDisplay() {
            display.value = '';
        }
        function send() {
            fetch('calc.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'expr=' + encodeURIComponent(display.value)
            })
            .then(response => response.text())
            .then(result => display.value = result);
        }
    </script>
</body>
</html>
