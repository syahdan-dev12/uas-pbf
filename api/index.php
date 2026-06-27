<?php
// Sembunyikan pesan deprecated
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

// Pastikan file index.php dari Laravel dipanggil
require __DIR__ . '/../public/index.php';