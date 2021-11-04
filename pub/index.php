<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);

use App\Controller\MainController;
use App\Controller\ArticlesController;
use App\User;
use App\SuperUser;

$firstUser = new User('Bohdan', 20);
$superUser = new SuperUser('Alex', 34, 'Elastic');
$adminUser = User::createEliteUser('Mega');

echo $superUser->showUserType();
echo "<br>";
echo $firstUser->showUserType();

$route = $_SERVER['REQUEST_URI'] ?? '';

$routes = require __DIR__ . '/../app/routes/route.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo 'Страница не найдена!';
    return;
}

unset($matches[0]);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);