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
        $sql = "INSERT INTO chamados set ip = '{$ip}', nome = '{$nome}', data_inicio = '{$dataInicio}', status = 0, data_last_suporte = '0000-00-00 00:00:00', data_last_cliente = '0000-00-00 00:00:00' ";
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

    public function getLastMsg($idChamado, $area){
        $dt = '';
        if(!empty($idChamado) && !empty($area)){
            $sql = "SELECT data_last_{$area} as dt FROM chamados WHERE id = {$idChamado}";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                $dt = $sql['dt'];
            }
        }

        return $dt;
    }

    public function updateLastMsg($idChamado, $area){
        if(!empty($idChamado) && !empty($area)){
        $sql = "UPDATE chamados SET data_last_{$area} =  NOW() WHERE id = {$idChamado}";
            $this->db->query($sql);
        }

    }
}