<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagos de Agua Potable - Atlacomulco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .welcome-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background-color: #6c757d; /* Color gris */
            color: white;
            text-align: center;
            font-size: 1.2em;
        }
        .container {
            margin-top: 50px;
        }
        .btn-logout {
            margin-top: 10px;
        }
        .welcome-card {
            text-align: center;
            margin-top: 50px;
        }
        .welcome-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['user_name'])): ?>
            <!-- Mostrar bienvenida personalizada si el usuario ha iniciado sesión -->
            <div class="welcome-message">
                <?php echo "Bienvenido, " . $_SESSION['user_name'] . "!"; ?>
            </div>
            <div class="card mt-5">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Sistema de Pagos de Agua Potable - Atlacomulco</h1>
                </div>
                <div class="card-body text-center">
                    <form action="pago.php" method="POST">
                        <div class="form-group">
                            <label for="monto">Monto a Pagar:</label>
                            <input type="number" class="form-control" name="monto" id="monto" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success" value="Pagar">
                        </div>
                    </form>
                    <a href="logout.php" class="btn btn-danger btn-logout">Cerrar Sesión</a>
                </div>
            </div>
        <?php else: ?>
            <!-- Mostrar página de bienvenida si el usuario no ha iniciado sesión -->
            <div class="card welcome-card">
                <div class="card-header bg-primary text-white">
                    <h1>Bienvenido al Sistema de Pagos de Agua Potable - Atlacomulco</h1>
                </div>
                <div class="card-body">
                    <p>Por favor, acceda para gestionar sus pagos.</p>
                    <a href="login.php" class="btn btn-success welcome-button">Iniciar Sesión</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
