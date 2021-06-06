<?php


class Produtos extends model
{
    public function create(array $params)
    {
        try {
            $sql = $this->db->prepare("INSERT INTO Produto (Nome, Descricao, Valor, id_empresa) VALUES (:Nome, :Descricao, :Valor, :id_empresa)");
            $sql->execute([
                ':Nome' => $params['Nome'],
                ':Descricao' => $params['Descricao'],
                ':Valor' => $params['Valor'],
                ':id_empresa' => $_SESSION['id_empresa']
            ]);
            return $sql->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function update(array $params, $id)
    {
        try {
            $sql = $this->db->prepare("UPDATE Produto SET Nome = :Nome, Descricao = :Descricao, Valor = :Valor WHERE id_produto = $id");
            $sql->execute([
                ':Nome' => $params['Nome'],
                ':Descricao' => $params['Descricao'],
                ':Valor' => $params['Valor']
            ]);
            return $sql->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function delete($id_produto)
    {
        try {

            $sql = $this->db->query("SELECT count(*) as count FROM ItemPedido WHERE id_produto = $id_produto");
            $all_item_pedido = $sql->fetch();
            if($all_item_pedido['count'] > 0){
                $sql = $this->db->prepare("UPDATE Produto SET SoftDelete = 1 WHERE id_produto = :id_produto");
            }else{
                $sql = $this->db->prepare("DELETE FROM Produto where id_produto = :id_produto");
            }
            $sql->execute([
                ':id_produto' => $id_produto
            ]);
            return $sql->rowCount();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function allBy($id_empresa)
    {
        try {
            $sql = $this->db->query("SELECT id_produto, Nome, Valor, Descricao FROM Produto WHERE id_empresa = $id_empresa AND SoftDelete = 0");
            return $sql->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function find($id)
    {
        try {
            $sql = $this->db->query("SELECT id_produto, Nome, Valor, Descricao FROM Produto WHERE id_produto = $id");
            return $sql->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}