<?php
$db = new PDO('mysql:host=localhost;dbname=practicasgenios','root','');
$motos = $db->query("SELECT * FROM motos")->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-hover table-dark">
            <tr>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Marca</th>               
                 <th>Opciones</th>
            </tr>
            <?php foreach ($motos as $moto): ?>
                <tr>
                    <td><?php echo $moto->placa;?></td>
                    <td><?php echo $moto->modelo;?></td>
                    <td><?php echo $moto->color;?></td>
                    <td><?php echo $moto->marca;?></td>
                    <td>                
                         <a href="eliminar.php?placa=<?php echo $moto->placa;?>">
                            <i class="bi bi-trash"></i>
                        </a>
                        <a href="editar.php?placa=<?php echo $moto->placa;?>">
                            <i class="bi bi-pencil"></i>
                        </a>
                     </td>           
                </tr>
            <?php endforeach;?>
        </table>
        <a href="index.php" class="btn btn-info">Nueva moto</a>
    </div>
</body>
</html>