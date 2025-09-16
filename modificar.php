<?php
$ci = $_GET["CI"];
$db = mysqli_connect('localhost', 'root', '', 'sitio');
$resultado = mysqli_query($db, 'SELECT * FROM persona WHERE ci=' . $ci);
$fila = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000, #0a0a0a, #101010);
            color: #d0eaff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-neon {
            background-color: #0d0d0d;
            border-radius: 15px;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 0 25px rgba(0, 191, 255, 0.25);
        }

        .card-neon h2 {
            text-align: center;
            color: #80dfff;
            margin-bottom: 25px;
            text-shadow: 0 0 10px rgba(128, 223, 255, 0.6);
        }

        .form-label {
            color: #80dfff;
        }

        .form-control {
            background-color: #121212;
            border: 1px solid #80dfff;
            color: #d0eaff;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(128, 223, 255, 0.5);
            border-color: #00ccff;
        }

        .btn-primary {
            background-color: #00e6b8;
            border: none;
        }

        .btn-secondary {
            background-color: #ff4d4d;
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
<div class="card-neon">
    <h2>Modificar Persona</h2>
    <form method="GET" action="gmodificar.php">
        <input type="hidden" name="CI" value="<?php echo $fila["CI"]; ?>"/>

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $fila["nombre"]; ?>"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?php echo $fila["apellido"]; ?>"/>
        </div>

        <div class="d-flex justify-content-between">
            <input type="submit" name="Aceptar" value="Aceptar" class="btn btn-primary"/>
            <input type="submit" name="Cancelar" value="Cancelar" class="btn btn-secondary"/>
        </div>
    </form>
</div>
</body>
</html>
