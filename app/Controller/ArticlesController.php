<?php
declare(strict_types=1);

namespace App\Controller;

use App\View\View;
use App\Services\Db;

/**
 *
 */
class ArticlesController
{
    /** @var View */
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
     * @param int $articleId
     */
    public function view(int $articleId)
    {
        $result = $this->db->query(
            'SELECT * FROM `articles` WHERE id = :id;',
            [':id' => $articleId]
        );
        if ($result === []) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', ['article' => $result[0]]);
    }
}