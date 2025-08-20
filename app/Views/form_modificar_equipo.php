<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Equipo</h1>
                <form action="<?=base_url('editar_equipo')?>" method="post">
                    <label for="txt_id" class="form-label">Equipo ID</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?=$datos['equipo_id'];?>" readonly>

                            <label for="txt_serie" class="form-label">No. Serie</label>
                            <input type="number" name="txt_serie" id="txt_serie" class="form-control" value="<?=$datos['no_serie'];?>" maxlength="10" >

                            <label for="txt_marca_id" class="form-label">Marca ID</label>
                            <input type="number" name="txt_marca_id" id="txt_marca_id" class="form-control" value="<?=$datos['marca_id'];?>">

                            <label for="txt_desc" class="form-label">Descripción</label>
                            <input type="text" name="txt_desc" id="txt_desc" class="form-control" value="<?=$datos['descripcion'];?>">

                            <label for="txt_fecha_compra" class="form-label">Fecha de Compra</label>
                            <input type="date" name="txt_fecha_compra" id="txt_fecha_compra" class="form-control" value="<?=$datos['fecha_compra'];?>">

                            <label for="txt_precio" class="form-label">Precio</label>
                            <input type="number" name="txt_precio" id="txt_precio" class="form-control" step="0.01" value="<?=$datos['precio'];?>">

                            <label for="txt_tipo_equipo" class="form-label">Tipo de Equipo</label>
                            <input type="number" name="txt_tipo_equipo" id="txt_tipo_equipo" class="form-control" value="<?=$datos['tipo_equipo'];?>">

                            <label for="txt_empleado_id" class="form-label">Empleado ID</label>
                            <input type="number" name="txt_empleado_id" id="txt_empleado_id" class="form-control" value="<?=$datos['empleado_id'];?>">
                    <button type="submit" class="form-control btn btn-dark mt-3">Modificar Datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>