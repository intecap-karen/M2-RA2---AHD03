<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="row">
    <div class="col-2 ">
        <div class="d-flex justify-content-center mt-5">
            <a href="<?=base_url('inicio')?>" class="btn btn-dark" style=" width:60%;">Inicio</a>
        </div>
    </div>
    <div class="col-8 mt-4">
        <h1>Equipos</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Equipo
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="agregarEquipo" method="post">
                            <label for="txt_id" class="form-label">Equipo ID</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_serie" class="form-label">No. Serie</label>
                            <input type="number" name="txt_serie" id="txt_serie" class="form-control" maxlength="10">

                            <label for="txt_marca_id" class="form-label">Marca ID</label>
                            <input type="number" name="txt_marca_id" id="txt_marca_id" class="form-control">
                            
                            <label for="txt_desc" class="form-label">Descripción</label>
                            <input type="text" name="txt_desc" id="txt_desc" class="form-control">

                            <label for="txt_fecha_compra" class="form-label">Fecha de Compra</label>
                            <input type="date" name="txt_fecha_compra" id="txt_fecha_compra" class="form-control">

                            <label for="txt_precio" class="form-label">Precio</label>
                            <input type="number" name="txt_precio" id="txt_precio" class="form-control" step="0.01">

                            <label for="txt_tipo_equipo" class="form-label">Tipo de Equipo</label>
                            <input type="number" name="txt_tipo_equipo" id="txt_tipo_equipo" class="form-control">

                            <label for="txt_empleado_id" class="form-label">Empleado ID</label>
                            <input type="number" name="txt_empleado_id" id="txt_empleado_id" class="form-control">

                            <button type="submit" class="form-control btn btn-dark mt-3">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Equipo ID</th>
                    <th>No. Serie</th>
                    <th>Marca ID</th>
                    <th>Descripción</th>
                    <th>Fecha de Compra</th>
                    <th>Precio</th>
                    <th>Tipo de Equipo</th>
                    <th>Empleado ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $equipo) {
            ?>
                <tr>
                    <td><?=$equipo['equipo_id'];?></td>
                    <td><?=$equipo['no_serie'];?></td>
                    <td><?=$equipo['marca_id'];?></td>
                    <td><?=$equipo['descripcion'];?></td>
                    <td><?=$equipo['fecha_compra'];?></td>
                    <td><?=$equipo['precio'];?></td>
                    <td><?=$equipo['tipo_equipo'];?></td>
                    <td><?=$equipo['empleado_id'];?></td>
                    <td>
                        <a href="<?=base_url('eliminar_equipo/').$equipo['equipo_id'];?>" class="btn btn-danger"><i class="bi bi-trash-fill "></i></a>
                        <a href="<?=base_url('buscar_equipo/').$equipo['equipo_id'];?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
                <?php
                    };
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-2"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</body>

</html>