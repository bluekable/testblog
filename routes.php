<?php

switch ($_GET['controller']) {
    case 'home':
        include_once('controllers/homeController.php');
        $controller = new HomeController();
        break;
    case 'post':
        include_once('controllers/postController.php');
        $controller = new PostController();
        break;
    default:
        include_once('views/404.php');
        break;
}

switch ($_GET['method']) {
    case 'show':
        $controller->show();
        break;
    case 'list':
        $controller->list();
        break;
    default:
        $controller->show();
        break;
}
