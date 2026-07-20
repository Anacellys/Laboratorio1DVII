<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="estilo.css">
      <title>Resultado Calculadora</title>
</head>

<body>

      <div class="contenedor">
            <h1>Calculadora</h1>

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
            } else {
                  echo "<h2>Error: Método no permitido.</h2>";
            }
            ?>

            <a href="calculadora.php">Volver a calcular</a>
      </div>

</body>
</html>