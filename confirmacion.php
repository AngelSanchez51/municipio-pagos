<?php
if (isset($_GET['exito']) && $_GET['exito'] == 'true') {
    $message = [
        'title' => 'Pago Exitoso',
        'text' => 'Gracias por su pago del servicio de agua potable en Atlacomulco.',
        'alert_class' => 'alert-success'
    ];
} else {
    $message = [
        'title' => 'Pago Fallido',
        'text' => 'Hubo un problema con su pago. Por favor, intente de nuevo.',
        'alert_class' => 'alert-danger'
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagos de Agua Potable - Atlacomulco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center">Sistema de Pagos de Agua Potable - Atlacomulco</h1>
            </div>
            <div class="card-body">
                <div class="alert <?php echo $message['alert_class']; ?>" role="alert">
                    <h4 class="alert-heading"><?php echo $message['title']; ?></h4>
                    <p><?php echo $message['text']; ?></p>
                </div>
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
