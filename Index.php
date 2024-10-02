<?php


$uri = $_SERVER['REQUEST_URI'];

switch ($uri){
    case '/about':
        require '/Views/about.view.php';
        break;
    case '/contact':
        require '/Views/contact.view.php';
        break;
    case '/cv':
        require '/Views/CV.view.php';
        break;
    case '/projecten':
        require '/Views/Projecten.view.php';
        break;
    case '/software':
        require '/Views/Software.view.php';
        break;
    default:
        require __DIR__ . '/Views/Index.view.php';
        break;
}
