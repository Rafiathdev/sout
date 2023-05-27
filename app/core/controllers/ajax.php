<?php
require_once 'app/core/database/models.php';

///var_dump($id);
require 'user1.php';
$modl = new User();
///$data = $modl->add_info_entretien($_POST['date'], $_POST['time'], $_POST['ido'], $_POST['idc']);
$data = $modl->add_info_entretien($_POST);
echo json_encode($data);
if ($data) 
{
    echo json_encode(array("statusCode"=>200));
} 
else
{
    return false;
}



?>


<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assurez-vous que les champs requis sont renseignés
    if (empty($_POST['date']) || empty($_POST['time']) || empty($_POST['ido']) || empty($_POST['idc'])) {
        // Erreur : champs manquants
        http_response_code(400);
        echo json_encode(['error' => 'Veuillez renseigner tous les champs.']);
        exit;
    }

    // Traitement des données
    $date = $_POST['date'];
    $time = $_POST['time'];
    $ido = $_POST['ido'];
    $idc = $_POST['idc'];

    // Exemple : Enregistrement des informations d'entretien dans la base de données
    // require_once 'app/core/database/models.php';
    // $profile = new Model();
    // $profile->add_info_entretien($date, $time, $ido, $idc);

    // Réponse JSON en cas de succès
    echo json_encode(['success' => 'Informations d\'entretien ajoutées avec succès.']);
} else {
    // Erreur : méthode de requête invalide
    http_response_code(405);
    echo json_encode(['error' => 'Méthode de requête invalide.']);
}
?>*/
