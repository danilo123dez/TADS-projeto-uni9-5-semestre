<?php


class Pedido extends model
{
    public function allBy($id_empresa)
    {
        try {
            $sql = $this->db->query("SELECT P.id_pedido, P.Descricao, P.Data_pedido, P.Entrega, C.Nome  FROM Pedido P INNER JOIN Cliente C ON C.id_cliente = P.id_cliente where P.id_empresa = $id_empresa AND Status <> 'entregue'");
            return $sql->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function find($id_pedido)
    {
        try {
            $sql = $this->db->query("SELECT I.Quantidade, P.Nome, P.Valor FROM ItemPedido I INNER JOIN Produto P ON P.id_produto = I.id_produto WHERE I.id_pedido = $id_pedido");
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function confirm($id_pedido)
    {
        try {
            $sql = $this->db->prepare("UPDATE Pedido SET Status = 'entregue' WHERE id_pedido = $id_pedido");
            $sql->execute();
            return $sql->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}