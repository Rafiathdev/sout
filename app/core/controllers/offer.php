<?php
// reformatage du code dans le fichier offer.php
class Offer{

    public function publish($_type, $_titre, $_adresse, $_date_exp, $_annee_exp, $_diplome, $_nbr_post, $_act_principal, $_description, $_comp_req) 
    {
    
            if(
                isset($type) && !empty($type)
                &&
                isset($titre) && !empty($titre)
                &&
                isset($adresse) && !empty($adresse)
                &&
                isset($date_exp) && !empty($date_exp)
                &&
                isset($annee_exp) && !empty($annee_exp)
                &&
                isset($diplome) && !empty($diplome)
                &&
                isset($nbr_post) && !empty($nbr_post)
                &&
                isset($act_principal) && !empty($act_principal)
                &&
                isset($description) && !empty($description)
                &&
                isset($comp_req) && !empty($comp_req)
            ){
    
                require_once 'app/core/database/models.php';
                require_once 'app/utils/methods.php';
                
                 $database = new Model();
                 
                 $table = 'offre';
                 $fields = 'type, titre, adresse, date_exp, annee_exp, diplome, nbr_post, act_principal, description, comp_req';
                 $values = '?,?,?,?,?,?,?,?,?,?';
                $slug = generate_slug($title);
                $author = $_SESSION['user_info'][0]['id'];
    
                
    
                $data = array($type, $titre, $adresse, $date_exp, $annee_exp, $diplome, $nbr_post, $act_principal, $description, $comp_req);
                $database -> add($table, $fields, $values, $data);
                echo '<script>alert("Succes")</script>';
    
            }
            else {
                echo '<script>alert("Tous les champs sont requis")</script>';
            }
    
    }
    
    }
?>