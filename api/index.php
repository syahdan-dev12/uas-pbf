<?php
// Mencegah pesan warning/deprecated muncul
error_reporting(0);
ini_set('display_errors', '0');

// PENTING: Paksa hapus cache rute agar Laravel membaca routes/api.php yang baru
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Menghapus cache rute agar segar kembali
$app->make('files')->delete(base_path('bootstrap/cache/routes-v7.php'));

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);