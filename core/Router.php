<?php

class Router {
    private $routes;
    private $matched;
    private $currentUrl;
    private $notFoundFile;

    function __construct($routes, $notFoundFile = '404.php')
    {
        $this->routes = $routes;
        $this->currentUrl = $_SERVER['REQUEST_URI'];
        $this->notFoundFile = $notFoundFile;
        $this->matched = false;
    }

    public function start() {
        foreach($this->getRoutes() as $route => $controller) {
            if ($this->currentUrl === $route) {
                $content = $controller->getFile();
                $title = $controller->getTitle();
                include $controller->getTemplate();
                $this->matched = true;
            }
        }
        if (!$this->isMatchedRoute()) {
            $content = sprintf('%s/%s', PAGE_DIR, $this->notFoundFile);
            include sprintf('%s/%s', LAYOUT_DIR, 'layout.php');
        }
    }

    private function isMatchedRoute() {
        return $this->matched;
    }

    public function getRoutes() {
        return $this->routes;
    }

}

?>