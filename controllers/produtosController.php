<?php


class produtosController extends controller
{

    public function store()
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        if (empty($_POST['Nome'])) {
            $_SESSION['message_error']['Nome'] = 'Preencha o nome';
        }

        if (empty($_POST['Valor'])) {
            $_SESSION['message_error']['Valor'] = 'Preencha o valor';
        }

        if (empty($_POST['Descricao'])) {
            $_SESSION['message_error']['Descricao'] = 'Preencha a Descrição';
        }

        if (!empty($_SESSION['message_error'])) {
            header("Location: " . BASE_URL . "painelpedidos/novoproduto");
            die();
        }

        $model_produtos = new Produtos();
        if ($model_produtos->create($_POST)) {
            $_SESSION['created_sucess'] = 'Cadastro feito com sucesso!';
            header("Location: " . BASE_URL . "painelpedidos/novoproduto");
            die();
        } else {
            $_SESSION['failed_created'] = 'Houve um erro inesperado ao cadastrar o produto';
            header("Location: " . BASE_URL . "painelpedidos/novoproduto");
            die();
        }
    }

    public function update($id)
    {
        if (empty($_SESSION['logged'])) {
            header("Location: " . BASE_URL . "");
            die();
        }

        if (empty($_POST['Nome'])) {
            $_SESSION['message_error']['Nome'] = 'Preencha o nome';
        }

        if (empty($_POST['Valor'])) {
            $_SESSION['message_error']['Valor'] = 'Preencha o valor';
        }

        if (empty($_POST['Descricao'])) {
            $_SESSION['message_error']['Descricao'] = 'Preencha a Descrição';
        }

        if (!empty($_SESSION['message_error'])) {
            header("Location: " . BASE_URL . "painelpedidos/novoproduto");
            die();
        }

        $model_produtos = new Produtos();
        if ($model_produtos->update($_POST, $id)) {
            $_SESSION['updated_sucess'] = 'Cadastro feito com sucesso!';
            header("Location: " . BASE_URL . "painelpedidos/editarProduto/$id");
            die();
        } else {
            $_SESSION['failed_updated'] = 'Houve um erro inesperado ao cadastrar o produto';
            header("Location: " . BASE_URL . "painelpedidos/editarProduto/$id");
            die();
        }
    }

    public function delete($id)
    {
        $model_produtos = new Produtos();
        $delete = $model_produtos->delete($id);
        var_dump($delete);
        die;
        return [
            'error' => 0,
            'description' => 'Produto apagado com sucesso'
        ];
    }
}