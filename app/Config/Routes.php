<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Authentification
$routes->get('/admin1/index', 'Admin::index');
$routes->get('/admin1/settings', 'Admin::setting');
$routes->get('/admin1/invoice', 'Admin::demnade');
$routes->get('/admin1/trajet', 'Admin::ways');
$routes->get('/admin1/icons', 'Admin::conducteur');
$routes->get('/admin1/form-elements', 'Admin::users');

// Login
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginPost');
$routes->get('/carte', 'Cart::index');
$routes->post('/carte', 'Cart::validation');

// Signup
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::registerPost');

// Logout
$routes->get('/logout', 'AuthController::logout');

// Admin Dashboard
$routes->get('/admin/index', 'Admin::index');

// Buses Management
$routes->get('/admin/buses', 'BusController::index');
$routes->get('/admin/buses/add', 'BusController::create');
$routes->post('/admin/buses/add', 'BusController::store');
$routes->get('/admin/buses/edit/(:num)', 'BusController::edit/$1');
$routes->post('/admin/buses/edit/(:num)', 'BusController::update/$1');
$routes->get('/admin/buses/delete/(:num)', 'BusController::delete/$1');

// Chauffeurs Management
$routes->get('/admin/chauffeurs', 'ChauffeurController::index');
$routes->get('/admin/chauffeurs/add', 'ChauffeurController::create');
$routes->post('/admin/chauffeurs/add', 'ChauffeurController::store');
$routes->get('/admin/chauffeurs/edit/(:num)', 'ChauffeurController::edit/$1');
$routes->post('/admin/chauffeurs/edit/(:num)', 'ChauffeurController::update/$1');
$routes->get('/admin/chauffeurs/delete/(:num)', 'ChauffeurController::delete/$1');

// Carte Demandées
$routes->get('/admin/carte-demandees', 'CarteDemandeesController::index');

// Trajet Management
$routes->get('/admin/trajets', 'TrajetController::list');
$routes->get('/admin/trajets/add', 'TrajetController::create');
$routes->post('/admin/trajets/add', 'TrajetController::store');
$routes->get('/admin/trajets/edit/(:num)', 'TrajetController::edit/$1');
$routes->post('/admin/trajets/edit/(:num)', 'TrajetController::update/$1');
$routes->get('/admin/trajets/delete/(:num)', 'TrajetController::delete/$1');

// Default Routes
$routes->get('/', 'TrajetController::index');
$routes->post('/rechercher-trajet', 'TrajetController::rechercherTrajet');
$routes->get('/plan-ligne-station', 'PlanLigneStation::index');
