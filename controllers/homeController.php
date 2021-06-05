<?php


class homeController extends controller
{
    public function index()
    {
        $this->setTitle('Home');
        $this->loadTemplateCliente('Cliente/home');
    }
}