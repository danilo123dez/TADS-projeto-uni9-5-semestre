<main>
    <section class="newsletter wrapper">
        <h2 class="newsletter-title">Cadastro</h2>
        <form class="newsletter-form" method="POST" action="/cadastro/store">
            <div class="newsletter-box">
                <label for="email">Razão Social</label>
                <input type="text" required name="Razao_social" id="nome_empresa">
                <?php
                if(!empty($_SESSION['message_error']['Razao_social'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Razao_social']."</span>";
                }
                ?>
            </div>
            <div class="newsletter-box">
                <label for="email">Nome Fantasia</label>
                <input type="text" required name="Nome_fantasia" id="nome_empresa">
                 <?php
                if(!empty($_SESSION['message_error']['Nome_fantasia'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Nome_fantasia']."</span>";
                }
                ?>
            </div>
            <div class="newsletter-box">
                <label for="email">CNPJ</label>
                <input type="text" required name="Cnpj" id="cnpj">
                 <?php
                if(!empty($_SESSION['message_error']['Cnpj'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Cnpj']."</span>";
                }
                ?>
            </div>
            <div class="newsletter-box">
                <label for="email">Email</label>
                <input type="email" required  name="Email" id="email">
                 <?php
                if(!empty($_SESSION['message_error']['Email'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Email']."</span>";
                }
                ?>
            </div>
            <div class="newsletter-box">
                <label for="email">Senha</label>
                <input type="password" required name="Senha" id="senha">
                 <?php
                if(!empty($_SESSION['message_error']['Senha'])){
                    echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Senha']."</span>";
                }
                ?>
            </div>
            <div class="newsletter-box">
                <label for="email">Confirme a senha</label>
                <input type="password" id="confirma_senha">
            </div>

            <p class="newsletter-parag">Endereço</p>

            <div class="newsletter-box box-address">
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Rua</label>
                    <input type="text" required name="endereco[Rua]" id="endereco_Rua">
                    <?php
                    if(!empty($_SESSION['message_error']['Rua'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Rua']."</span>";
                    }
                    ?>
                </div>
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Número</label>
                    <input type="text" required name="endereco[Numero]" id="endereco_Numero">
                    <?php
                    if(!empty($_SESSION['message_error']['Numero'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Numero']."</span>";
                    }
                    ?>
                </div>
            </div>

            <div class="newsletter-box box-address">
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Cep</label>
                    <input type="text" required name="endereco[Cep]" id="endereco_Cep">
                    <?php
                    if(!empty($_SESSION['message_error']['Cep'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Cep']."</span>";
                    }
                    ?>
                </div>
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Bairro</label>
                    <input type="text" required name="endereco[Bairro]" id="endereco_Bairro">
                    <?php
                    if(!empty($_SESSION['message_error']['Bairro'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Bairro']."</span>";
                    }
                    ?>
                </div>
            </div>

            <div class="newsletter-box box-address">
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Cidade</label>
                    <input type="text" required name="endereco[Cidade]" id="endereco_Cidade">
                    <?php
                    if(!empty($_SESSION['message_error']['Cidade'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Cidade']."</span>";
                    }
                    ?>
                </div>
                <div class="newsletter-box box-inputs-address">
                    <label for="email">Estado</label>
                    <input type="text" required name="endereco[Estado]" id="endereco_Estado">
                    <?php
                    if(!empty($_SESSION['message_error']['Estado'])){
                        echo "<span class='message-error'><i class='fas fa-times'></i> ".$_SESSION['message_error']['Estado']."</span>";
                    }
                    ?>
                </div>
            </div>

            <button class="newsletter-submit" type="submit">
                Cadastrar-se
            </button>
        </form>
    </section>
</main>

<?php
if(!empty($_SESSION['message_error'])){
    unset($_SESSION['message_error']);
}
?>