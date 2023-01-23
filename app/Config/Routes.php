<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers\tps');
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

/**Application Level Route */
/**
 * 
 *
 * @param   [type]  $routes  [$routes description]
 *
 * @return  [type]           [tas/profile/create]
 */
$routes->group('tas', function($routes){
    /**
     * Link to Landing page
     * /tas
     *
     * @var [type]
     */
    $routes->get('', 'Home::index');
    $routes->group('profile', function($routes){
        $routes->get('create', 'Profile::create');
        $routes->get('search', 'Profile::search');
    });
});


/**Processing Level Route */
$routes->group('tps', function($routes){
    /**
     * Link to Landing page
     * /tas
     *
     * @var [type]
     */
    $routes->get('', 'Home::index');
    $routes->group('profile', function($routes){
        $routes->get('create', 'Profile::create');
        $routes->get('search', 'Profile::search');
    });

    $routes->group('setup', function($routes){
        $routes->get('academicSessions', 'Setup::academicSessions');
        $routes->get('schools', 'Setup::schools');
        $routes->get('departments', 'Setup::departments');
        $routes->get('options', 'Setup::options');
        $routes->get('courseDefinition', 'Setup::courseDefinition');
    });

    $routes->group('issuance', function($routes){
        $routes->get('searchResults', 'Issuance::searchResults');
        $routes->get('logResults', 'Issuance::logResults');
    });

    $routes->group('tasks', function($routes){
        $routes->get('scoreEntry', 'Tasks::scoreEntry');
        $routes->get('logResults', 'Tasks::logResults');
    });

    $routes->group('userManagement', function($routes){
        $routes->get('createUser', 'UserManagement::createUser');
        $routes->get('editUser', 'UserManagement::editUser');
        $routes->get('assignPriviledges', 'UserManagement::assignPriviledges');
        $routes->get('changePassword', 'UserManagement::changePassword');
    });
});



// $routes->get('/', 'Home::index');
// $routes->get('login', 'Home::login');
// $routes->get('create', 'Profile::create');
// $routes->get('privacy', 'Home::privacy');

// $routes->group('profile', function($routes){
//     $routes->get('create', 'Profile::create');
//     $routes->get('search', 'Profile::search');
// });



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
