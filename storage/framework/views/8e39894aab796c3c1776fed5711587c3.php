


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla con botón de impresión</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Tabla de Contenidos</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Título</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sección 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sección 2</td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
      </tbody>
    </table>
    <!-- Botón para imprimir la tabla -->
    <button class="btn btn-primary" onclick="printTable()">Imprimir Tabla</button>
  </div>

  <!-- Bootstrap JS (opcional si no necesitas funcionalidades de JavaScript adicionales de Bootstrap) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Función JavaScript para imprimir la tabla -->
  <script>
    function printTable() {
      window.print();
    }
  </script>
</body>
</html>
<?php /**PATH C:\laragon\www\delegaciones\resources\views/config/delegaciones/date.blade.php ENDPATH**/ ?>