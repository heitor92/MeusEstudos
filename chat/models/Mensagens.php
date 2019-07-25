<?php
class Mensagens extends Model {

    public function sendMessage($idChamado, $origem, $msg){
        if(!empty($idChamado) && !empty($msg)){
            $sql = "INSERT INTO mensagens SET id_chamado = '{$idChamado}', mensagem = '{$msg}', origem = {$origem}, data_enviado = NOW()";
            $this->db->query($sql);
        }
        
    }

}