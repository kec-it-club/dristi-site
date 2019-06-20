<?php
define("CHECK", true);

$request = $_SERVER["REQUEST_URI"];

if (preg_match('/^\/events\/([a-zA-Z0-9_-]+)*$/', $request, $output_array)) {
    $dir = __DIR__ . '/pages/events/' . $output_array[1]. ".php";

    // var_dump($dir);
    // var_dump(file_exists($dir));
    // die;

    if (file_exists($dir)) {
        require $dir;
        exit;
    }
}
switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/pages/index.php';
        break;
    case '/about':
        require __DIR__ . '/pages/about.php';
        break;
    case '/events':
        require __DIR__ . '/pages/events.php';
        break;
    case '/contact-us':
        require __DIR__ . '/pages/contact-us.php';
        break;
    default:
        require __DIR__ . '/pages/404.php';
        break;
}
