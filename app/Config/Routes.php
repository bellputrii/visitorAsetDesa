<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rute untuk masing-masing kategori aset
$routes->get('aset_tanah', 'AsetDesa::tanah');
$routes->get('aset_tanah/detail_tanah/(:segment)', 'AsetDesa::detail_tanah/$1');

$routes->get('/aset_gedung_bangunan', 'AsetDesa::gedung');

$routes->get('/aset_alat_mesin', 'AsetDesa::asetAlatMesin');





