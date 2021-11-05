<?php
declare(strict_types=1);

namespace App\Controller;

use App\View\View;
use App\Services\Db;
use App\Models\Articles\Article;

/**
 *
 */
class MainController
{
    /**
     * @var View
     */
    private $view;

    /** @var Db */
    private $db;

    /**
     *
     */
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $db = Db::getInstance();
    }

    /**
     *
     */
    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    /**
     * @param string $name
     */
    public function sayHello(string $name)
    {
        var_dump($name);
        echo 'Привет, ' . $name;
    }
}