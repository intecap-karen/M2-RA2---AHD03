<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//('ruta', 'Controlador::método')

//rutas de inicio
$routes->get('inicio', 'Home::inicio');

//rutas de Puestos (vista_puestos.php)
$routes->get('puestos','PuestoController::vistaPuestos');
$routes->post('agregarPuesto', 'PuestoController::agregarPuesto');
$routes->get('eliminar_puesto/(:num)', 'PuestoController::eliminar/$1');
$routes->get('buscar_puesto/(:num)', 'PuestoController::buscar/$1');
$routes->post('editar_puesto', 'PuestoController::editar');

//rutas de empleados (vista_empleados.php)
$routes->get('empleados','EmpleadoController::index');
$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');
$routes->get('eliminar_empleado/(:num)', 'EmpleadoController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('editar_empleado', 'EmpleadoController::editar');

//rutas de usuarios (vista_usuarios.php)
$routes->get('usuarios','UsuarioController::index');
$routes->post('agregarUsuario', 'UsuarioController::agregarUsuario');
$routes->get('eliminar_usuario/(:num)', 'UsuarioController::eliminar/$1');
$routes->get('buscar_usuario/(:num)', 'UsuarioController::buscar/$1');
$routes->post('editar_usuario', 'UsuarioController::editar');

//rutas de equipos (vista_equipos.php)
$routes->get('equipos','EquipoController::index');
$routes->post('agregarEquipo', 'EquipoController::agregarEquipo');
$routes->get('eliminar_equipo/(:num)', 'EquipoController::eliminar/$1');
$routes->get('buscar_equipo/(:num)', 'EquipoController::buscar/$1');
$routes->post('editar_equipo', 'EquipoController::editar');

//rutas de marcas (vista_marcas.php)
$routes->get('marcas','MarcaController::index');
$routes->post('agregarMarca', 'MarcaController::agregarMarca');
$routes->get('eliminar_marca/(:num)', 'MarcaController::eliminar/$1');
$routes->get('buscar_marca/(:num)', 'MarcaController::buscar/$1');
$routes->post('editar_marca', 'MarcaController::editar');

//rutas de tipo de equipos (vista_tipos_equipos.php)
$routes->get('tipos_equipos','TipoEquipoController::index');
$routes->post('agregarTipoEquipo', 'TipoEquipoController::agregarTipoEquipo');
$routes->get('eliminar_tipo_equipo/(:num)', 'TipoEquipoController::eliminar/$1');
$routes->get('buscar_tipo_equipo/(:num)', 'TipoEquipoController::buscar/$1');
$routes->post('editar_tipo_equipo', 'TipoEquipoController::editar');