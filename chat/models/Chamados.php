<?php
class Chamados extends Model {

    /** Consulta todos os chamados **/
    public function getChamados(){
        $array = [];
        $sql ="SELECT * FROM chamados WHERE status IN (0,1)";
        $sql = $this->db->query($sql);

        if($sql->rowCount()){
            $array = $sql->fetchAll();
        }

        return $array;
    }
    /** Atualiza o status do chamados **/
    public function updateStatus($id, $status) {
        if(!empty($id) && !empty($status)){

            $sql = "UPDATE chamados SET status = {$status} WHERE id = {$id}";
            $this->db->query($sql);
        }
    }
    /** Adiciona um novo chamado no banco de dados **/
    public function addChamado($ip, $nome, $dataInicio){
        $id = 0;
        $sql = "INSERT INTO chamados set ip = '{$ip}', nome = '{$nome}', data_inicio = '{$dataInicio}', status = 0 ";
        $sql = $this->db->query($sql);
        $id = $this->db->lastInsertId();

        return $id;
    }
    /** Consulta um chamado com id e retorna o resultado em array **/
    public function getChamado($idchamado){
        $array = [];
        if(!empty($idchamado)){
            $sql = "SELECT nome FROM chamados WHERE id = '{$idchamado}'";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
               $array = $sql->fetch();
            }
        }

        return $array;
        
    }
}