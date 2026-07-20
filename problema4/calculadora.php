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

            <form action="procesar.php" method="post">
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
      </div>

</body>
</html>