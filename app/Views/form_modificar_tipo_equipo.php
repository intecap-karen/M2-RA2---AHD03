<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Tipo de Equipo</h1>
                <form action="<?=base_url('editar_tipo_equipo')?>" method="post">
                    <label for="txt_id" class="form-label">Tipo de Equipo ID</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?=$datos['tipo_id'];?>" readonly>
                    <label for="txt_nombre" class="form-label">Nombre del Tipo de Equipo</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?=$datos['nombre'];?>">
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