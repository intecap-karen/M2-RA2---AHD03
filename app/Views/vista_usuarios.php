<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
        <h1>Usuarios</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Usuario
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="agregarUsuario" method="post">
                            <label for="txt_id" class="form-label">Usuario ID</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">
                            
                            <label for="txt_usuario" class="form-label">Usuario</label>
                            <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">
                            
                            <label for="txt_email" class="form-label">Email</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control">
                            
                            <label for="txt_password" class="form-label">Password</label>
                            <input type="password" name="txt_password" id="txt_password" class="form-control">
                            
                            <label for="txt_estado" class="form-label">Estado</label>
                            <input type="text" name="txt_estado" id="txt_estado" class="form-control" list="estadoOptions" choice="true" >
                            <datalist id="estadoOptions">
                                <option value="Activo">
                                <option value="Inactivo">
                            </datalist>

                            <label for="txt_rol_id" class="form-label">Rol ID</label>
                            <input type="number" name="txt_rol_id" id="txt_rol_id" class="form-control">

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
                    <th>Usuario ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Estado</th>
                    <th>Rol ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($datos as $puesto) {
                ?>
                <tr>
                    <td><?=$puesto['usuario_id'];?></td>
                    <td><?=$puesto['usuario'];?></td>
                    <td><?=$puesto['email'];?></td>
                    <td><?=$puesto['password'];?></td>
                    <td><?=$puesto['estado'];?></td>
                    <td><?=$puesto['rol_id'];?></td>
                    <td>
                        <a href="<?=base_url('eliminar_usuario/').$puesto['usuario_id'];?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                        <a href="<?=base_url('buscar_usuario/').$puesto['usuario_id'];?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
                <?php
                    }
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