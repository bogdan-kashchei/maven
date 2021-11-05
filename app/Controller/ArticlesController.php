<?php
declare(strict_types=1);

namespace App\Controller;

use App\View\View;
use App\Models\Articles\Article;
use App\Models\Users\User;

/**
 *
 */
class ArticlesController
{
    /** @var View */
    private $view;

    /**
     *
     */
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
    }

    /**
     * @param int $articleId
     */
    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }

    /**
     * @param int $articleId
     */
    public function edit(int $articleId): void
    {
        /** @var Article $article */
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $article->setName('Йоу))');
        $article->setText('Новый текст статьи');

        $article->save();
    }

    /**
     *
     */
    public function add(): void
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Абы-что');
        $article->setText('Новый текст статьи');

        $article->save();
    }
}