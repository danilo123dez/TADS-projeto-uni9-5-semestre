<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover js--table-products">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($produtos)) {
                    foreach ($produtos as $p) {
                        ?>
                        <tr>
                            <td><?= $p['Nome'] ?></td>
                            <td><?= $p['Descricao'] ?></td>
                            <td>R$ <?= number_format($p['Valor'], 2, ',', '.') ?></td>
                            <td><a href="/painelpedidos/editarProduto/<?= $p['id_produto'] ?>" class="btn btn-block btn-primary"><i class="far fa-edit"></i></a> <a
                                        data-nome-produto="<?= $p['Nome']; ?>" data-id-produto="<?= $p['id_produto'] ?>"
                                        class="btn btn-block btn-danger js--delete-produto"><i
                                            class="far fa-trash-alt"></i></a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem certeza que quer apagar o produto <span class="js--modal-nome-produto"></span> ?

                <div class="js--modal-alert"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger js--button-delete-produto">Sim, apagar</button>
            </div>
        </div>
    </div>
</div>