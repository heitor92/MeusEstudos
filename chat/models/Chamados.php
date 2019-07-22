<?php
class Chamados extends Model {

    public function getChamados(){
        $array = [];
        $sql ="SELECT * FROM chamados WHERE status IN (0,1)";
        $sql = $this->db->query($sql);

        if($sql->rowCount()){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function updateStatus($id, $status) {
        if(!empty($id) && !empty($status)){

            $sql = "UPDATE chamados SET status = {$status} WHERE id = {$id}";
            $this->db->query($sql);
        }
    }
}