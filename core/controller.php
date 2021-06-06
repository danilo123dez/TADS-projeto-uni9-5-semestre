<?php

class controller
{

    public $title = 'home';
    public $css = [];
    public $js = [];

    public function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require 'views/' . $viewName . ".php";
    }

    public function loadTemplateCliente($viewName, $viewData = array())
    {
        require 'views/Cliente/template.php';
    }

    public function loadTemplatePainel($viewName, $viewData = array())
    {
        require 'views/Painel/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array())
    {
        extract($viewData);
        require 'views/' . $viewName . ".php";
    }

    public function setTitle($t)
    {
        $this->title = $t;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitlePage($t)
    {
        $this->titlePage = $t;
    }

    public function getTitlePage()
    {
        return $this->titlePage;
    }

    public function setCss(array $css)
    {
        $this->css = $css;
    }

    public function getCss()
    {
        return $this->css;
    }

    public function setJs(array $js)
    {
        $this->js = $js;
    }

    public function getJs()
    {
        return $this->js;
    }
}