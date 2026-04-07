<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Calculadora Moderna</title>
      <link rel="stylesheet" href="estilo.css">
</head>
<body>

      <div class="contenedor">
            <div class="card">
                  <h1>Calculadora</h1>

                  <form action="" method="post">
                        <input type="number" name="num1" placeholder="Ingresa el primer número" step="any" required>
                        <input type="number" name="num2" placeholder="Ingresa el segundo número" step="any" required>

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
                        $simbolo = "";

                        switch ($operacion) {
                              case "suma":
                                    $resultado = $num1 + $num2;
                                    $simbolo = "+";
                                    break;

                              case "resta":
                                    $resultado = $num1 - $num2;
                                    $simbolo = "-";
                                    break;

                              case "multiplicacion":
                                    $resultado = $num1 * $num2;
                                    $simbolo = "×";
                                    break;

                              case "division":
                                    $simbolo = "÷";
                                    if ($num2 != 0) {
                                          $resultado = $num1 / $num2;
                                    } else {
                                          echo "<div class='resultado error'> Error: No se puede dividir entre cero.</div>";
                                    }
                                    break;
                        }

                        if ($resultado !== null) {
                              echo "<div class='resultado exito'>
                                      <h2>Resultado: $resultado</h2>
                                    </div>";
                        }
                  }
                  ?>
            </div>
      </div>

</body>
</html>