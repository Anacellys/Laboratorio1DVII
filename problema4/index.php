<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Calculadora</title>
      <link rel="stylesheet" href="estilo.css">
</head>
<body>
      <h1>Calculadora</h1>

      <div class="calculator">
            <input type="text" id="display" class="display" readonly placeholder="0">

            <div class="buttons">
                  <button type="button" class="btn" onclick="appendValue('7')">7</button>
                  <button type="button" class="btn" onclick="appendValue('8')">8</button>
                  <button type="button" class="btn" onclick="appendValue('9')">9</button>
                  <button type="button" class="btn op" onclick="appendValue('/')">÷</button>

                  <button type="button" class="btn" onclick="appendValue('4')">4</button>
                  <button type="button" class="btn" onclick="appendValue('5')">5</button>
                  <button type="button" class="btn" onclick="appendValue('6')">6</button>
                  <button type="button" class="btn op" onclick="appendValue('*')">×</button>

                  <button type="button" class="btn" onclick="appendValue('1')">1</button>
                  <button type="button" class="btn" onclick="appendValue('2')">2</button>
                  <button type="button" class="btn" onclick="appendValue('3')">3</button>
                  <button type="button" class="btn op" onclick="appendValue('-')">-</button>

                  <button type="button" class="btn wide" onclick="appendValue('0')">0</button>
                  <button type="button" class="btn op" onclick="appendValue('+')">+</button>
                  <button type="button" class="btn equal" onclick="calculate()">=</button>
                  <button type="button" class="btn clear" onclick="clearDisplay()">C</button>
            </div>
      </div>

      <script>
            function appendValue(value) {
                  document.getElementById("display").value += value;
            }

            function calculate() {
                  let display = document.getElementById("display");

                  try {
                        display.value = eval(display.value);
                  } catch {
                        display.value = "Error";
                  }
            }

            function clearDisplay() {
                  document.getElementById("display").value = "";
            }
      </script>

</body>
</html>