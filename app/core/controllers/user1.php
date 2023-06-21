<?php

class User
{


    //public function add_info_entretien($_POST['ido'], $_POST['ido'],$_POST['ido'], $_POST['ido'])
    public function add_info_entretien()
    {
       
        require_once 'app/core/database/models.php';
        $database = new Model();
        if(isset($_POST['btn-add'])){
            $post=$_POST;
            //var_dump($post);die();
            // require_once '../database/model.php';
            $table = 'entretien';
            $fields = 'date_entretien, heure, id_offre, id_candidat';
            $values = '?,?,?,?';   
            $data = array($post['date'], $post['time'], $post['ido'], $post['idc']);
   
            $result = $database->add($table, $fields, $values, $data);
            $database->update_programmed($post['ido'], $post['idc']);
            
            echo '<script>alert("bien recu")</script>';
        } 

            require('app/core/views/profile_recruteur.php');

           
        
    }



    
}
