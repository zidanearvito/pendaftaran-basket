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
$routes->setAutoRoute(true);
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
// route utama
$routes->get('/', 'Home::index');
$routes->get('jadwal', 'Jadwal::data');
$routes->get('tentang-kami', 'Home::tentang');
$routes->add('daftar', 'Registrasi::create');

//route admin
// $routes->group('admin', function($routes){
//     $routes->add('', 'Admin/User::login');
//     $routes->add('login', 'Admin/User::login');
//     $routes->add('sukses', 'Admin/User::sukses');
//     $routes->get('dashboard', 'Registrasi::index');
//     $routes->get('data', 'Registrasi::data');
    // $routes->get('edit/(:num)', 'Registrasi::edit/$1');
    // $routes->post('update', 'Registrasi::update');
//     $routes->get('delete/(:num)', 'Registrasi::delete/$1');
// });
$routes->add('admin/logout', 'Admin\User::logout');

$routes->group('admin', ['filter' => 'noauth'], function ($routes) {
    $routes->add('', 'Admin\User::login');
    $routes->add('login', 'Admin\User::login');
});

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'Admin\User::sukses');

    $routes->add('dashboard', 'Admin\Dashboard::index');
    $routes->add('data', 'Registrasi::data');
    $routes->add('detail/(:num)', 'Registrasi::detail/$1');
    $routes->add('delete/(:num)', 'Registrasi::delete/$1');

    // jadwal routes
    $routes->add('jadwal', 'Jadwal::index');
    $routes->add('jadwal/add', 'Jadwal::create');
    $routes->add('jadwal/update(:num)', 'Jadwal::update/$1');

    // Galeri routes
    $routes->add('galeri', 'Galeri::index');
    $routes->add('galeri/add', 'Galeri::create');
    $routes->add('galeri/update(:num)', 'Galeri::update/$1');
    $routes->add('galeri/delete(:num)', 'Galeri::delete/$1');
});


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
