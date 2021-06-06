<?php


class painelpedidosController extends controller
{
    public function index()
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        header("Location: " . BASE_URL . "painelpedidos/produtos");
        die();
    }

    public function produtos()
    {

        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        $produtos = new Produtos;
        $produtos = $produtos->allBy($_SESSION['id_empresa']);

        $this->setTitle('Painel de pedidos - Produtos');
        $this->setTitlePage('Produtos');
        $this->setJs(['painel/produtos']);
        $this->loadTemplatePainel('Painel/produtos', ['produtos' => $produtos]);
    }

    public function novoproduto()
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        $this->setTitle('Painel de pedidos - Novo Produto');
        $this->setTitlePage('Novo Produto');
        $this->loadTemplatePainel('Painel/novoproduto');
    }

    public function editarProduto($id)
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        $produto = new Produtos;
        $produto = $produto->find($id);

        $this->setTitle('Painel de pedidos - Editar Produto');
        $this->setTitlePage('Editar Produto');
        $this->loadTemplatePainel('Painel/editarproduto', ['produto' => $produto]);
    }

    public function pedidos()
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        $pedidos = new Pedido();
        $pedidos = $pedidos->allBy($_SESSION['id_empresa']);

        $this->setTitle('Painel de pedidos - Pedidos');
        $this->setTitlePage('Pedidos');
        $this->setJs(['painel/pedidos']);
        $this->setCss(['painel/pedidos']);
        $this->loadTemplatePainel('Painel/pedidos', ['pedidos' => $pedidos]);
    }
}