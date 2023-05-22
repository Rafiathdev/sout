<?php
// reformatage du code dans le fichier offer.php
class Offer{

    public function publish($type, $titre, $adresse, $date_exp, $annee_exp, $diplome, $nbr_post, $act_principal, $description, $comp_req, $cat) 
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
                 $fields = 'type, titre, adresse, date_exp, annee_exp, diplome, nbr_post, act_principal, description, comp_req, author, categories_id';
                 $values = '?,?,?,?,?,?,?,?,?,?,?,?';
                // $slug = generate_slug($title);
                // $author = $_SESSION['user_info'][0]['id'];
    
                
    
                $data = array($type, $titre, $adresse, $date_exp, $annee_exp, $diplome, $nbr_post, $act_principal, $description, $comp_req, $_SESSION['user_info']['id'], $cat);
                $database -> add($table, $fields, $values, $data);
                echo '<script>alert("Succes")</script>';
    
            }
            else {
                echo '<script>alert("Tous les champs sont requis")</script>';
            }
    
    }

    public function recupCategorie() 
    {
                require_once 'app/core/database/models.php';
               // require_once 'app/utils/methods.php';
                
                 $database = new Model();
                 $table = 'categories';
                 $fields = '*';
    
                 $result = $database -> read($table, $fields);
                return $result;
                //echo '<script>alert("Succes")</script>';
    
            }

            public function recupOffer_user() 
            {
                require_once 'app/core/database/models.php';
               // require_once 'app/utils/methods.php';
                
                 $database = new Model();
                 
                 $table = 'offre';
                 $fields = '*';
    
                 $result = $database -> read($table, $fields);
                return $result;
    
            }

            public function recup_CV() 
            {
                require_once 'app/core/database/models.php';
               // require_once 'app/utils/methods.php';
                
                 $database = new Model();
                 
                 $table = 'candidat';
                 $fields = '*';
    
                 $result = $database -> read($table, $fields);
                return $result;
    
            }

            function read_offre($id){
                require_once 'app/core/database/models.php';
               // require_once 'app/utils/methods.php';
                
                 $database = new Model();
                 
                 $table = 'offre';
                 $field = '*';
                 $sfield = 'author';
                 $value = array($id);
    
                 $result = $database -> read_filter_once($table, $field, $sfield, $value);
                return $result;
            }


            public function candidature($lettre_motiv, $id_cand, $id_offre) 
            {
            
                    if(
                        
                        isset($lettre_motiv) && !empty($lettre_motiv)
                        
                        
                        
                    ){
            
                        require_once 'app/core/database/models.php';
                        require_once 'app/utils/methods.php';
                        
                         $database = new Model();
                         
                         $table = 'candidature';
                         $fields = 'lettre_motiv, id_candidat, id_offre';
                         $values = '?,?,?';
                         $photo = $_FILES['lettre_motiv']['name'];
                        $tmp = $_FILES['lettre_motiv']['tmp_name'];
                        $dossier = 'app/media/'.$photo;
                        //file_upload($tmp, "$dossier");
                        move_uploaded_file($tmp, "$dossier");
                        // $slug = generate_slug($title);
                        // $author = $_SESSION['user_info'][0]['id'];
            
                        
            
                        $data = array($dossier, $id_cand, $id_offre);
                        $database -> add($table, $fields, $values, $data);
                        echo '<script>alert("Succes")</script>';
            
                    }
                    else {
                        echo '<script>alert("Tous les champs sont requis")</script>';
                    }
            
            }
        
            

            // public function recupOffer($id) 
            // {
            //             require_once 'app/core/database/models.php';
            //            // require_once 'app/utils/methods.php';
                        
            //              $database = new Model();
                         
            //              $table = 'offre';
            //              $field = '*';
            //              $sfield = 'id';
            //              $value = array($id);
            //              //select * from user s, offre o, employeur e WHERE s.id = e.user_id and s.id = o.author and o.id = 8
            //              $temp = $database -> read_filter_once($table, $field, $sfield, $value);
            //             // $data = $temp->fetch();
            
            //             return $temp;


                       
            //             //echo '<script>alert("Succes")</script>';
            
            //         }
    }
?>