<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Empleado</h1>
                <form action="<?=base_url('editar_empleado')?>" method="post">
                    <label for="txt_id" class="form-label">ID</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?=$datos['empleado_id'];?>" readonly>
                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>">
                    <label for="txt_apellido" class="form-label">Apellido</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?=$datos['apellido'];?>">
                    <label for="txt_telefono" class="form-label">Teléfono</label>
                    <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" value="<?=$datos['telefono'];?>">
                    <label for="txt_puesto_id" class="form-label">Puesto ID</label>
                    <input type="number" name="txt_puesto_id" id="txt_puesto_id" class="form-control" value="<?=$datos['puesto_id'];?>">
                    <label for="txt_fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento"class="form-control" value="<?=$datos['fecha_nacimiento'];?>">
                    <button type="submit" class="form-control btn btn-primary mt-">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>