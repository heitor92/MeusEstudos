<?php
class Portfolio extends Model {
    
    public function getTrabalhos($n = null){
        $array = [];
        $sql = 'SELECT * FROM portfolio ';
        if(!empty($n)){
            $sql .= "LIMIT {$n}";
        }
        
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}

