<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\BusController;

 $routes->get('/', 'TrajetController::index'); 
$routes->post('/BusController/rechercherBus', 'TrajetController::rechercherBus');  

 


