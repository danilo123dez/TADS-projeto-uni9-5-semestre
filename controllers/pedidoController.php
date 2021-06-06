<?php


class pedidoController
{
    public function find($id_pedido)
    {
        $pedido = new Pedido();
        $pedido = $pedido->find($id_pedido);
        echo json_encode(['error' => 0, 'data' => $pedido]);
        exit;
    }

    public function confirm($id_pedido)
    {
        $pedido = new Pedido();
        $pedido = $pedido->confirm($id_pedido);
        echo json_encode(['error' => 0]);
        exit;
    }
}