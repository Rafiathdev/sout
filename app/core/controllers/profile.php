<?php

class Profile{

        function get_company_info($id){

            require_once 'app/core/database/models.php';
            $database = new Model();
            $table = 'employeur';
            $field = '*';
            $value = array($id);
            $sfield = 'user_id';

            $temp = $database->read_filter_once($table, $field, $sfield, $value);
            $data = $temp->fetch();
            
            return $data;

        }

        // function get_candidat($nom_c, $prenom_c, $email, $telephone, $qualification, $photo){

        //     require_once 'app/core/database/models.php';
        //     $database = new Model();
        //     $table = 'candidat';
        //     $field = '?,?,?,?,?,?';
        //     $value = array($nom_c, $prenom_c, $email, $telephone, $qualification, $photo);
            
        //     $temp = $database->read_filter_once($table, $field, $sfield, $value);
        //     $data = $temp->fetch();
            
        //     return $data;

        // }


}

?>