<?php
$status = $_GET['status'] ?? "indefinido";
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Resultado del pago</title></head>
<body>
<h1>Estado del pago: <?= htmlspecialchars($status) ?></h1>
<a href="index.php">Volver</a>
</body>
</html>
