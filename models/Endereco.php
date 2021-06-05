<?php


class Endereco extends model
{
    public function create(array $params)
    {
        try{
            $sql = $this->db->prepare("INSERT INTO Endereco (Rua, Numero, Cep, Bairro, Cidade, Estado) VALUES ( :Rua, :Numero, :Cep, :Bairro, :Cidade, :Estado)");
            $sql->execute([
                ':Rua' => $params['Rua'],
                ':Numero' => $params['Numero'],
                ':Cep' => $params['Cep'],
                ':Bairro' => $params['Bairro'],
                ':Cidade' => $params['Cidade'],
                ':Estado' => $params['Estado']
            ]);
            return $this->db->lastInsertId();
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }
}