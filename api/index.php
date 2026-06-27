<?php
// Gunakan nilai error_reporting yang tidak memicu deprecation untuk E_STRICT
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
ini_set('display_errors', '0');

require __DIR__ . '/../public/index.php';