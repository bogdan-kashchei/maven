<?php
require_once '../vendor/autoload.php';

use App\User;
use App\SuperUser;

$firstUser = new User('Bohdan', 20);
$superUser = new SuperUser('Alex',34, 'Elastic');
$adminUser = User::createEliteUser('Mega');

echo $superUser->showUserType();
echo "<br>";
echo $firstUser->showUserType();
var_dump($adminUser);