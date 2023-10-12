<?php

class Controller {
    private $title;
    private $file;
    private $template;

    function __construct($title, $file, $template)
    {
        $this->title = $title;
        $this->file = sprintf('%s/%s', PAGE_DIR, $file);
        $this->template = sprintf('%s/%s', LAYOUT_DIR, $template);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

}

?>