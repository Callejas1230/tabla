<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000, #0a0a0a, #101010);
            color: #d0eaff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-neon {
            width: 90%;
            max-width: 1000px;
            background: #0d0d0d;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 191, 255, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #80dfff;
            text-shadow: 0 0 10px rgba(128, 223, 255, 0.6);
        }

        .table {
            color: #d0eaff;
            background-color: #121212;
        }

        .table th {
            background-color: #1a1a1a;
            color: #80dfff;
            border-bottom: 2px solid #80dfff;
        }

        .table td {
            vertical-align: middle;
        }

        .btn {
            box-shadow: 0 0 10px rgba(128, 223, 255, 0.4);
        }

        .btn-success {
            background-color: #00e6b8;
            border: none;
        }

        .btn-danger {
            background-color: #ff4d4d;
            border: none;
        }

        .btn-success:hover, .btn-danger:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
<div class="container-neon">
    <h2>Lista de Personas</h2>
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'sitio');
    $resultado = mysqli_query($db, 'SELECT * FROM persona');
    ?>
    <table class="table table-hover text-center table-bordered">
        <thead>
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>$fila[CI]</td>";
            echo "<td>$fila[nombre]</td>";
            echo "<td>$fila[apellido]</td>";
            echo "<td>
                    <a href='modificar.php?CI=$fila[CI]' class='btn btn-success btn-sm me-2'>Modificar</a>
                    <a href='eliminar.php?CI=$fila[CI]' class='btn btn-danger btn-sm'>Eliminar</a>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
