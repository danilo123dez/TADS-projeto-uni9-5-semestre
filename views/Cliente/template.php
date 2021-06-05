<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
    <?php
    $css = $this->getCss();
    if (!empty($css)) {
        foreach ($css as $val) {

            ?>
            <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/<?php echo $val ?>.css">
            <?php
        }
    }
    ?>
    <title><?php echo $this->getTitle(); ?></title>
</head>
<body>

<header>
    <div class="wrapper header-container">
        <h1 class="navbar-brand"><a href="#">FastSystem</a></h1>
        <nav class="navbar-main">
            <a href="/">home</a>
            <a href="#">sobre nós</a>
            <a href="#">nossos serviços</a>
            <a href="#">clientes</a>
            <a href="#">fale conosco</a>

        </nav>
        <div class="navbar-auth">
            <a class="navbar-auth-login" href="/login">login</a>
            <a class="navbar-auth-register" href="/cadastro">cadastrar-se</a>
        </div>
        <span class="hamburguer">
                    <img class="open active" src="assets/img/svg/menu.svg" alt="" srcset="">
                    <img class="close" src="assets/img/svg/close.svg" alt="" srcset="">
                </span>
    </div>
    <nav class="navbar-mobile">
        <a href="#">home</a>
        <a href="#">sobre nós</a>
        <a href="#">nossos serviços</a>
        <a href="#">clientes</a>
        <a href="#">fale conosco</a>
        <div class="navbar-auth-mobile">
            <a class="navbar-auth-login" href="">login</a>
            <a class="navbar-auth-register" href="">cadastrar-se</a>
        </div>
    </nav>
</header>


<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<footer>
    <div class="footer-container wrapper">
        <h2 class="footer-brand"><a href="#">FastSystem</a></h2>
        <div class="footer-social">
            <a href="#"><img src="assets/img/svg/facebook.svg" alt=""></a>
            <a href="#"><img src="assets/img/svg/twitter.svg" alt=""></a>
            <a href="#"><img src="assets/img/svg/instagram.svg" alt=""></a>
        </div>
        <p class="footer-copyright">©2020FastSystems</p>
        <nav class="footer-nav-links">
            <a href="#">Termos e condições</a>
            <a href="#">Trabalhe conosco</a>
            <a href="#">Contato</a>
        </nav>
    </div>
</footer>

<?php
$js = $this->getJs();
if (!empty($js)) {
    foreach ($js as $val) {

        ?>
        <script src="<?php BASE_URL; ?>assets/js/<?php echo $val ?>.js"></script>
        <?php
    }
}
?>

<!--<script src="https://kit.fontawesome.com/c879721f59.js" crossorigin="anonymous"></script>-->
<script src="assets/js/script.js"></script>

</body>
</html>