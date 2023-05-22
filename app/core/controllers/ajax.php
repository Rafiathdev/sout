<?php
require 'user.php';
$modl = new User();
$data = $modl->add_info_entretien($_POST['ido'], $_POST['ido'],$_POST['ido'], $_POST['ido']);

if ($data) {
    return json_encode($data);
} else {
    return false;
}



?>