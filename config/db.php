<?php

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '../.env');
// $dotenv->load();

db()->connect([
    'dbtype' => 'pgsql',
    'port' => null,
    'host' => 'dpg-ci0ob182qv21rs5dh3bg-a.oregon-postgres.render.com',
    'username' => 'playlistplace_user',
    'password' => '54j0zbw1QMzholGon5Z1ibuvGWe6BOLH',
    'dbname' => 'playlistplace',
]);
