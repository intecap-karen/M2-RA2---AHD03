<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body class="row">
    <div class="col-2 ">
        <div class="d-flex justify-content-center mt-5">
            <a href="<?=base_url('inicio')?>" class="btn btn-dark" style=" width:60%;">Inicio</a>
        </div>
    </div>
    <div class="col-8 mt-4">
        <h1>Usuarios</h1>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Usuario
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Usuario ID</th>
                    <th>Nombre del Puesto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datos as $puesto) {
                ?>
                <tr>
                    <td><?=$puesto['puesto_id'];?></td>
                    <td><?=$puesto['puesto'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-2"></div>
</body>
</html>