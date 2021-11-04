<?php
declare(strict_types=1);

namespace App\Controller;

use App\View\View;
use App\Services\Db;

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
        $this->db = new Db();
    }

    /**
     *
     */
    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    /**
     * @param string $name
     */
    public function sayHello(string $name)
    {
        echo 'Привет, ' . $name;
    }
}