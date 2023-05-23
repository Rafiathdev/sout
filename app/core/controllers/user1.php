<?php

class User
{


    //public function add_info_entretien($_POST['ido'], $_POST['ido'],$_POST['ido'], $_POST['ido'])
    public function add_info_entretien($post)
    {
       

         
       // require_once 'app/core/database/models.php';
        require_once '../database/model.php';

            $database = new Model();
            $table = 'entretien';
            $fields = 'date_entretien, heure, id_offre, id_candidat';
            $values = '?,?,?,?';
            
            $data = array($post['date'], $post['time'], $post['ido'], $post['idc']);

            $result = $database->add($table, $fields, $values, $data);

            return $result;

           
        
    }



    
}
