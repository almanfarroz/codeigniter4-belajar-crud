<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MainController::index', ['as' => 'home']);
$routes->get('/list', 'MainController::list', ['as' => 'list_student']);

$routes->get('/list/(:num)', 'MainController::view/$1', ['as' => 'view_student']);

$routes->get('/list/(:num)/edit', 'MainController::edit/$1', ['as' => 'edit_student']);
$routes->post('/list/(:num)/edit/update', 'MainController::update/$1', ['as' => 'update_student']);

$routes->get('/list/create', 'MainController::create', ['as' => 'create_student']);
$routes->post('/list/create/save', 'MainController::save', ['as' => 'save_student']);

$routes->get('/list/(:num)/delete', 'MainController::delete/$1', ['as' => 'delete_student']);

// Authentication
$routes->get('/login', 'AuthController::signin', ['as' => 'login']);
$routes->post('/login/auth', 'AuthController::loginauth', ['as' => 'auth']);

$routes->get('/register', 'AuthController::register', ['as' => 'register']);
$routes->post('/register/store', 'AuthController::store', ['as' => 'store']);

$routes->get('/logout', 'AuthController::logout', ['as' => 'logout']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
