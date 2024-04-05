<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'home::index');
$routes->get('/kendaraan', 'kendaraan::index');
// Halaman Tambah
$routes->get('kendaraan/tambah', 'kendaraan::tambah');
// Halaman Edit
$routes->get('kendaraan/edit/(:any)', 'kendaraan::edit/$1');
// Proses CRUD

// Insert
$routes->post('kendaraan/add', 'kendaraan::add');
// Update
$routes->post('kendaraan/update', 'kendaraan::update');
// Hapus
$routes->get('kendaraan/hapus/(:any)', 'kendaraan::hapus/$1');
