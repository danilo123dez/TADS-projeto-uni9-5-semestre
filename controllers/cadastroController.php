<?php


class cadastroController extends controller
{
    public function index()
    {
        $this->setTitle('Cadastro');
        $this->loadTemplateCliente('Cliente/cadastro');
    }

    public function store()
    {
        if(empty($_POST['Nome_fantasia'])){
            $_SESSION['message_error']['Nome_fantasia'] = 'Preencha o Nome Fantasia';
        }

        if(empty($_POST['Senha'])){
            $_SESSION['message_error']['Senha'] = 'Preencha a senha';
        }

        if(empty($_POST['Email'])){
            $_SESSION['message_error']['Email'] = 'Preencha um e-mail';
        }else{
            if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['message_error']['Email'] = 'Digite um e-mail válido';
            }
        }

        if(empty($_POST['Razao_social'])){
            $_SESSION['message_error']['Razao_social'] = 'Preencha a razão social';
        }

        if(empty($_POST['Cnpj'])){
            $_SESSION['message_error']['Cnpj'] = 'Preencha o CNPJ';
        }

        if(empty($_POST['endereco']['Rua'])){
            $_SESSION['message_error']['Rua'] = 'Preencha a Rua';
        }

        if(empty($_POST['endereco']['Numero'])){
            $_SESSION['message_error']['Numero'] = 'Preencha o Número';
        }

        if(empty($_POST['endereco']['Cep'])){
            $_SESSION['message_error']['Cep'] = 'Preencha o Cep';
        }

        if(empty($_POST['endereco']['Bairro'])){
            $_SESSION['message_error']['Bairro'] = 'Preencha o Bairro';
        }

        if(empty($_POST['endereco']['Cidade'])){
            $_SESSION['message_error']['Cidade'] = 'Preencha a cidade';
        }

        if(empty($_POST['endereco']['Estado'])){
            $_SESSION['message_error']['Estado'] = 'Preencha o estado';
        }

        if(!empty( $_SESSION['message_error'])){
            header("Location: ".BASE_URL."cadastro ");
            die;
        }

        $empresa = new Empresa();
        if($empresa->create($_POST) > 0){
            $_SESSION['login_sucess'] = 'Cadastro feito com sucesso!';
            header("Location: ".BASE_URL."login ");
            die();
        }else{
            $_SESSION['message_error']['email'] = 'Este e-mail já está em uso';
            header("Location: ".BASE_URL."cadastro ");
            die();
        }
    }
}