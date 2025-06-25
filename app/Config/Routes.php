<?php

namespace Config;


 $routes = Services::routes();



$routes->setDefaultNamespace('App\controllers');
$routes->setDefaultController('home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();






 
$routes->get('/', 'Home::index');
$routes->get('index.html', 'Home::index');
$routes->get('nosotros.html', 'Home::nosotros');
$routes->get('register.html', 'Home::registro');
$routes->get('loger.html', 'Home::login');