<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Mi');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$uri = $this->request->uri;
$stri = $uri->getSegment(1);

if(isset($this->request->uri)){
    $stri1 = str_replace('-', '', $stri);
    $routes->add('mi/php-development',"Mi::phpDevelopment" );
    $routes->add('mi/web-designer',"Mi::webDesigner" );
    $routes->add('mi/business-development-officer',"Mi::businessDevelopmentOfficer" );
    $routes->add('mi/project-manager',"Mi::projectManager" );
    $routes->add('overview',"Aboutus::index" );

//    $route['(:any)'] = str_replace('-', '', $stri);
//    $route['overview'] = "aboutus";
}
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
