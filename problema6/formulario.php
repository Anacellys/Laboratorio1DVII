<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de entrada del dato</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <div class="contenedor">
    <div class="card">
      <h1>Validar Derecho a Votar</h1>
      <form method="post">
        <label>Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label>Ingrese su Edad:</label>
        <input type="number" name="edad" id="edad" required min="1" max="120">
        
        <input type="submit" value="Verificar">
      </form>
      
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nombre = $_POST["nombre"];
          $edad = intval($_POST["edad"]);
          
          if ($edad >= 18) {
            echo "<div class='resultado exito'>";
            echo "<h2>¡Buenas noticias, $nombre!</h2>";
            echo "<p>Tienes $edad años y <strong>SÍ PUEDES VOTAR</strong>.</p>";
            echo "</div>";
          } else {
            echo "<div class='resultado error'>";
            echo "<h2>Lo sentimos, $nombre</h2>";
            echo "<p>Tienes $edad años y <strong>NO PUEDES VOTAR</strong>. Debes tener al menos 18 años.</p>";
            echo "</div>";
          }
        }
      ?>
    </div>
  </div>
</body>

</html>