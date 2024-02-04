<?php
const VITE_HOST = 'http://localhost:5133';

$uri = $_SERVER["REQUEST_URI"];
$file = __DIR__.''.$uri;

# provide, if file exists
if (is_file($file)) {
    return false;
}

# redirect to vite server
if (preg_match('/\.(png|jpg|jpeg|gif|svg|js|css)$/', $uri)) {
    header("HTTP/1.1 307 Temporary Redirect");
    header("Location: ".VITE_HOST.$uri);
    exit;
}

# otherwise run app
include __DIR__ . '/index.php';
