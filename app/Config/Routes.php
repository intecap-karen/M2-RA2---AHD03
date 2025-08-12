<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//('ruta', 'Controlador::método')

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

//rutas de inicio
$routes->get('inicio', 'Home::inicio');