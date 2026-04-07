<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="estilo.css">
      <title>Calculadora</title>
</head>

<body>

      <div class="contenedor">
            <h1>Calculadora</h1>

            <form action="" method="post">
                  <input type="number" name="num1" placeholder="Número 1" step="any" required>
                  <input type="number" name="num2" placeholder="Número 2" step="any" required>

                  <select name="operacion" required>
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicación</option>
                        <option value="division">División</option>
                  </select>

                  <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $num1 = $_POST["num1"];
                  $num2 = $_POST["num2"];
                  $operacion = $_POST["operacion"];
                  $resultado = null;

                  switch ($operacion) {
                        case "suma":
                              $resultado = $num1 + $num2;
                              break;

                        case "resta":
                              $resultado = $num1 - $num2;
                              break;

                        case "multiplicacion":
                              $resultado = $num1 * $num2;
                              break;

                        case "division":
                              if ($num2 != 0) {
                                    $resultado = $num1 / $num2;
                              } else {
                                    echo "<h2>Error: División por cero no permitida.</h2>";
                              }
                              break;
                  }

                  if ($resultado !== null) {
                        echo "<h2>Resultado: $resultado</h2>";
                  }
            }
            ?>
      </div>

</body>
</html>