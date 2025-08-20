<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Editar Usuario</h1>
                <form action="<?=base_url('editar_usuario')?>" method="post">
                    <label for="txt_id" class="form-label">Usuario ID</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?=$datos['usuario_id'];?>" readonly>

                    <label for="txt_usuario" class="form-label">Usuario</label>
                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control" value="<?=$datos['usuario'];?>">

                    <label for="txt_email" class="form-label">Email</label>
                    <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?=$datos['email'];?>">

                    <label for="txt_password" class="form-label">Password</label>
                    <input type="password" name="txt_password" id="txt_password" class="form-control" value="<?=$datos['password'];?>">

                    <label for="txt_estado" class="form-label">Estado</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control" list="estadoOptions"
                        choice="true" value="<?=$datos['estado'];?>">
                    <datalist id="estadoOptions">
                        <option value="Activo">
                        <option value="Inactivo">
                    </datalist>

                    <label for="txt_rol_id" class="form-label">Rol ID</label>
                    <input type="number" name="txt_rol_id" id="txt_rol_id" class="form-control" value="<?=$datos['rol_id'];?>">

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