<?php
class Mensagens extends Model {

    public function sendMessage($idChamado, $origem, $msg){
        if(!empty($idChamado) && !empty($msg)){
            $sql = "INSERT INTO mensagens SET id_chamado = '{$idChamado}', mensagem = '{$msg}', origem = {$origem}, data_enviado = NOW()";
            $this->db->query($sql);
        }
        
    }

    public function getMessage($idChamado, $lastMsg){
        $array = [];

        $sql = "SELECT * FROM mensagens WHERE id_chamado = {$idChamado} AND data_enviado > '{$lastMsg}'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        $chamado = new Chamados();
        $area = $_SESSION['area'];
        $chamado->updateLastMsg($idChamado, $area);


        return $array;
    }

}