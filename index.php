<?php
require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pagar con MercadoPago</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">

<h2 class="mb-4">Formulario de compra con MercadoPago</h2>

<form action="crear-preferencia.php" method="POST" class="w-50">
    <div class="mb-3">
        <label class="form-label">Descripción del producto</label>
        <input type="text" name="descripcion" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="number" name="precio" step="0.01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Continuar al pago</button>
</form>

</body>
</html>
