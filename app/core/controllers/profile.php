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

        function get_candidat_info($id){

            require_once 'app/core/database/models.php';
            $database = new Model();
            $table = 'candidat';
            $field = '*';
            $value = array($id);
            $sfield = 'user_id';

            $temp = $database->read_filter_once($table, $field, $sfield, $value);
            $data = $temp->fetch();
            
            return $data;

        }


}

?>