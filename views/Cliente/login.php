<main>
    <section class="newsletter wrapper">
        <h2 class="newsletter-title">Login</h2>
        <?php
        if(!empty($_SESSION['login_sucess'])){
            echo "<div class='success-register'><span><i class='fas fa-check-circle'></i>".$_SESSION['login_sucess']."</span></div>";
            unset($_SESSION['login_sucess']);
        }
        if(!empty($_SESSION['login_error'])){
            echo "<div class='error-login'><span><i class='fas fa-check-circle'></i>".$_SESSION['login_error']."</span></div>";
            unset($_SESSION['login_error']);
        }
        ?>
        <form class="newsletter-form" method="POST" action="/login/logar">
            <div class="newsletter-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="newsletter-box">
                <label for="email">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>

            <button class="newsletter-submit" type="submit">
                Entrar
            </button>
        </form>
    </section>
</main>