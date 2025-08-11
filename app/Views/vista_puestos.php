<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puestos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body class="row">
    <div class="col-2 ">
        <div class="d-flex justify-content-center mt-5">
            <a href="<?=base_url('inicio')?>" class="btn btn-dark" style=" width:60%;">Inicio</a>
        </div>
    </div>
    <div class="col-8 mt-4">
        <h1>Puesto de Empleos</h1>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Puesto
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Puesto ID</th>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>