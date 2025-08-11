<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//('ruta', 'Controlador::método')

$routes->get('puestos','PuestoController::vistaPuestos');
$routes->get('empleados','EmpleadoController::index');
$routes->post('agregarEmpleado', 'EmpleadoController::agregarEmpleado');
$routes->get('eliminar_empleado/(:num)', 'EmpleadoController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('editar_empleado', 'EmpleadoController::editar');
$routes->get('inicio', 'Home::inicio');