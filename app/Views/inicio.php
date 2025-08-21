<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">
            INICIO
        </h1>
        <div class="row justify-content-center mt-5">
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('usuarios');?>" class="btn btn-dark">Ir a Usuarios</a>
                </div>
            </div>
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Puestos de Empleados</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('puestos');?>" class="btn btn-dark">Ir a Puestos</a>
                </div>
            </div>
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Empleados</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('empleados');?>" class="btn btn-dark">Ir a Empleados</a>
                </div>
            </div>
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Equipos</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('equipos');?>" class="btn btn-dark">Ir a Equipos</a>
                </div>
            </div>
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Marcas</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('marcas');?>" class="btn btn-dark">Ir a Marcas</a>
                </div>
            </div>
            <div class="card mb-3 col-4 me-3" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Tipos Equipos</h5>
                    <p class="card-text">Tabla organizada en formato de lista para seleccionar, agregar y eliminar
                        datos.</p>
                    <a href="<?=base_url('tipos_equipos');?>" class="btn btn-dark">Ir a Tipos Equipos</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>