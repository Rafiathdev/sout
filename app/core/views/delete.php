<?php
                
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        require_once 'app/core/controllers/user.php';
        $info = new User();
        $info->delete_offre($id);
        
        // var_dump($data);
    }
    ?>