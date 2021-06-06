<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <?php if (!empty($_SESSION['created_sucess'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION['created_sucess'] ?>
                </div>
                <?php
                unset($_SESSION['created_sucess']);
            }
            if (!empty($_SESSION['failed_created'])) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['failed_created'] ?>
                </div>
                <?php
                unset($_SESSION['failed_created']);
            }
            ?>
            <form method="POST" action="/produtos/store">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome_produto">Nome</label>
                        <input type="text"
                               class="form-control <?= !empty($_SESSION['message_error']['Nome']) ? 'is-invalid' : ''; ?>"
                               name="Nome" id="nome_produto" placeholder="Digite o nome do produto">
                    </div>
                    <div class="form-group">
                        <label for="descricao_produto">Descrição</label>
                        <textarea rows="4" cols="50"
                                  class="form-control <?= !empty($_SESSION['message_error']['Descricao']) ? 'is-invalid' : ''; ?>"
                                  name="Descricao" id="descricao_produto"
                                  placeholder="Digite a descrição do produto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="valor_produto">Valor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$</span>
                            </div>
                            <input type="number" step="any"
                                   class="form-control <?= !empty($_SESSION['message_error']['Valor']) ? 'is-invalid' : '' ?>"
                                   name="Valor" id="valor_produto" placeholder="Digite o valor do produto">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php unset($_SESSION['message_error']) ?>