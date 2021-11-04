<?php
declare(strict_types=1);

namespace App\View;

/**
 *
 */
class View
{
    /**
     * @var string
     */
    private $templatesPath;

    /**
     * @param string $templatesPath
     */
    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    /**
     * @param string $templateName
     * @param array $vars
     * @param int $code
     */
    public function renderHtml(string $templateName, array $vars = [], int $code = 200)
    {
        http_response_code($code);
        extract($vars);

        include $this->templatesPath . '/' . $templateName;
    }
}