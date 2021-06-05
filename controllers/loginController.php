<?php


class loginController extends controller
{
    public function index()
    {
        $this->setTitle('Login');
        $this->loadTemplateCliente('Cliente/login');
    }

    public function logar()
    {
        $empresa = new Empresa;
        $email = $_POST['email'];
        $search = [
            'email' => $email,
        ];
        $empresa = $empresa->findBy($search);

        if(empty($empresa['Senha'])){
            $_SESSION['login_error'] = 'Email ou senha estão incorretos';
            header("Location: ".BASE_URL."login ");
            die();
        }

        if(!password_verify($_POST['senha'], $empresa['Senha'])){
            $_SESSION['login_error'] = 'Email ou senha estão incorretos';
            header("Location: ".BASE_URL."login ");
            die();
        }

        $_SESSION['logged'] = true;
        $_SESSION['user'] = $empresa['Nome_fantasia'];

        header("Location: ".BASE_URL."");
        die();
    }
}