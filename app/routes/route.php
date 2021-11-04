<?php
return [
    '~^/hello/(.*)$~' => [\App\Controller\MainController::class, 'sayHello'],
    '~^/$~' => [\App\Controller\MainController::class, 'main'],
    '~^/articles/(\d+)$~' => [\App\Controller\ArticlesController::class, 'view'],
];