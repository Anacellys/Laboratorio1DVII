<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Area y perimetro</title>
      <link rel="stylesheet" href="estilo.css">
</head>
<body>
      <div class="contenedor">
            <div class="card">
                  <h1>
                        Calculo el area y perimetro de un circulo
                  </h1>

                  <form method="post">
                        <label>Ingrese el radio del circulo:</label>
                        <input type="number" step="any" name="radio" required>
                        <button type="submit">Calcular</button>
                  </form>

                  <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $radio = $_POST["radio"];
                              $area = pi() * pow($radio, 2);
                              $perimetro = 2 * pi() * $radio;

                              print "<div class='resultado exito'><p>El area del circulo es: " . $area . "</p><p>El perimetro del circulo es: " . $perimetro . "</p></div>";
                        }
                  ?>
            </div>
      </div>
      
</body>
</html>