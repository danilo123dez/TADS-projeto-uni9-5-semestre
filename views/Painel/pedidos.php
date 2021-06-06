<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover js--table-orders">
                <thead>
                <tr>
                    <th></th>
                    <th>Cliente</th>
                    <th>Entrega/Retirada</th>
                    <th>Horario</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($pedidos)) {
                    foreach ($pedidos as $p) {
                        ?>
                        <tr>
                            <td><i class="fas fa-chevron-down js--info-pedido" data-id-pedido="<?= $p['id_pedido'] ?>" style="cursor: pointer;"></i></td>
                            <td><?= $p['Nome'] ?></td>
                            <td><?= $p['Entrega'] === 0 ? 'Retirada' : 'Entrega' ?></td>
                            <td><?= date('d/m/Y H:i:s', strtotime($p['Data_pedido'])) ?></td>
                            <td><a href="#"
                                   class="btn btn-block btn-primary"><i class="fas fa-print"></i></a> <a
                                        data-id-pedido="<?= $p['id_pedido'] ?>"
                                        class="btn btn-block btn-success js--confirm-pedido"><i
                                            class="far fa-check-circle"></i></a></td>
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