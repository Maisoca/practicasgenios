<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="guardar.php" method="post">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control">
            <br>
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control">
            <br>
            <label>Color</label>
            <input type="text" name="color" class="form-control">
            <br>
            <label>Marca</label>
            <input type="text" name="marca" class="form-control">
            <br>
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
</body>
</html>