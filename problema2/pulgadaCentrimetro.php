<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Conversion de Pulgadas a Centímetros</title>
      <link rel="stylesheet" href="estilo.css">
</head>
<body>
      <div class="contenedor">
            <div class="card">
                  <h1> Conversion de Pulgadas a Centímetros </h1>

                  <form method="post">
                        <label>Ingrese la cantidad de pulgadas:</label>
                        <input type="number" step="any" name="pulgadas" required>
                        <button type="submit">Convertir</button>
                  </form>
                  <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $pulgadas = $_POST["pulgadas"];
                              $centimetros = $pulgadas * 2.54;

                              print "<div class='resultado exito'><p>" . $pulgadas . " pulgadas son equivalentes a " . $centimetros . " centímetros.</p></div>";
                        }
                        ?> 
            </div>
      </div>
</body>
</html>