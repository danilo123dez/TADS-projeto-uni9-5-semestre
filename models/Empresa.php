<?php


class Empresa extends model
{
    public function create(array $params)
    {
        try{
            $model_endereco = new Endereco();
            $id_endereco = $model_endereco->create($params['endereco']);
            $sql = $this->db->prepare("INSERT INTO Empresa (Email, Senha, Nome_fantasia, Razao_social, Cnpj, id_endereco) VALUES ( :Email, :Senha, :Nome_fantasia, :Razao_social, :Cnpj, :id_endereco)");
            $sql->execute([
                ':Email' => $params['Email'],
                ':Senha' => password_hash($params['Senha'], PASSWORD_DEFAULT),
                ':Nome_fantasia' => $params['Nome_fantasia'],
                ':Razao_social' => $params['Razao_social'],
                ':Cnpj' => $params['Cnpj'],
                ':id_endereco' => $id_endereco
            ]);
            return $sql->rowCount();
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
            die;
        }
    }

    public function findBy(array $params){
        try{
            $where = '';
            $count = 0;
            foreach($params as $index => $param){
                if($count === 0){
                    $where .= $index . '=' . "'".$param."'" ;
                }else{
                    $where .= ' AND ' .$index . '=' . "'".$param."'";
                }
                $count++;
            }

            $sql = $this->db->query("SELECT Razao_social, Senha FROM Empresa WHERE $where");
            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                return $sql;
            }else{
                return 0;
            }
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }
    }
}