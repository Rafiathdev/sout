<?php
//require_once 'app/core/database/models.php';

//var_dump($id);
require 'user1.php';
$modl = new User();
//$data = $modl->add_info_entretien($_POST['date'], $_POST['time'], $_POST['ido'], $_POST['idc']);
$data = $modl->add_info_entretien($_POST);
echo json_encode($data);
/*if ($data) {
    echo json_encode(array("statusCode"=>200));
} else {
    return false;
}*/



?>