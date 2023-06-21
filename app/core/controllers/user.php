<?php

class User
{

    public function register($email, $phone, $type, $password, $confirmPassword)
   /*{

        if (
            isset($email) && !empty($email)
            &&
            isset($password) && !empty($password)
            &&
            isset($confirmPassword) && !empty($confirmPassword)
            &&
            isset($phone) && !empty($phone)
            &&
            isset($type) && !empty($type)

        ) {

            if (
                $password === $confirmPassword
            ) {
                require_once 'app/core/database/models.php';

                $database = new Model();
                $table = 'user';
                $fields = 'email, telephone, password, type';
                $values = '?,?,?,?';
                $data = array($email, $phone, sha1($password), $type);

                $database->add($table, $fields, $values, $data);

                $temp = $database->get_last_row('user','id');

                $new_user = $temp->fetch();

                return $new_user['id'];

                echo '<script>alert("Votre compte a été crée avec succes")</script>';
            } else {
                echo '<script>alert("Erreur ! Les mots de passe doivent être identiques ")</script>';
            }
        } else {
            echo '<script>alert("Erreur ! Tous les champs sont requis")</script>';
        }
    }*/

    
{
    if (
        isset($email) && !empty($email) &&
        isset($password) && !empty($password) &&
        isset($confirmPassword) && !empty($confirmPassword) &&
        isset($phone) && !empty($phone) &&
        isset($type) && !empty($type)
    ) {
        if ($password === $confirmPassword) {
            require_once 'app/core/database/models.php';
            $database = new Model();
            
            // Vérifier si l'adresse e-mail est déjà utilisée
            $table = 'user';
            $fields = 'COUNT(*) AS count';
            $sfield = 'email';
            $data = array($email);
            $query = $database->read_filter_once($table, $fields, $sfield, $data);
            $result = $query->fetch();
            
            if ($result['count'] > 0) {
                echo '<script>alert("Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.")</script>';
            } else {
                $table = 'user';
                $fields = 'email, telephone, password, type';
                $values = '?,?,?,?';
                $data = array($email, $phone, sha1($password), $type);
                $database->add($table, $fields, $values, $data);

                $temp = $database->get_last_row('user','id');
                $new_user = $temp->fetch();

                return $new_user['id'];

                echo '<script>alert("Votre compte a été créé avec succès")</script>';
            }
        } else {
            echo '<script>alert("Erreur ! Les mots de passe doivent être identiques")</script>';
        }
    } else {
        echo '<script>alert("Erreur ! Tous les champs sont requis")</script>';
    }
}


    public function login($email, $password)
    {

        if (
            isset($email) && !empty($email)
            &&
            isset($password) && !empty($password)


        ) {

            require_once 'app/core/database/models.php';
            $database = new Model();
            $table = 'user';
            $fields = 'id, password, type, telephone';
            $sfield = 'email';
            $data = array($email);

            $query = $database->read_filter_once($table, $fields, $sfield, $data);
            $pass =  $query->fetch();


            if ($pass) {


                if ($pass['password'] == sha1($password)) {

                    if ($pass['type'] == 1) {

                        $table = 'employeur';
                        $fields = 'nom_e';
                        $sfield = 'user_id';
                        $data = array($pass['id']);
                        $query = $database->read_filter_once($table, $fields, $sfield, $data);
                        $user_info =  $query->fetch();
                        require_once 'app/utils/methods.php';
                        $info = array('email' => $email, 'phone' => $pass['telephone'],  'id' => $pass['id'], 'name' => $user_info['nom_e'], 'type' => $pass['type']);
                        authenticate($info);
                        header('Location: /profile?actor=company');
                        echo '<script>alert("Bienvenue '.$user_info['nom_e'].'")</script>';
                    } else if($pass['type'] == 2) {
                        $table = 'candidat';
                        $fields = 'nom_c, prenom_c';
                        $sfield = 'user_id';
                        $data = array($pass['id']);
                        $query = $database->read_filter_once($table, $fields, $sfield, $data);
                        $user_info =  $query->fetch();
                        require_once 'app/utils/methods.php';
                        $info = array('email' => $email, 'phone' => $pass['telephone'], 'id' => $pass['id'], 'name' => $user_info['prenom_c'] . ' ' . $user_info['nom_c'], 'type' => $pass['type']);
                        authenticate($info);
                        header('Location: /profile');
                        echo '<script>alert("Bienvenue '.$user_info['prenom_c'].'")</script>';
                    }else{
                        $table = 'admin';
                        $fields = 'nom, prenom, adresse';
                        $sfield = 'user_id';
                        $data = array($pass['id']);
                        $query = $database->read_filter_once($table, $fields, $sfield, $data);
                        $user_info =  $query->fetch();
                        require_once 'app/utils/methods.php';
                        $info = array('email' => $email, 'phone' => $pass['telephone'], 'id' => $pass['id'], 'name' => $user_info['prenom'] . ' ' . $user_info['nom'], 'type' => $pass['type']);
                        authenticate($info);
                        header('Location: /admin');
                       
                    }




                    
                } else {
                    echo '<script>alert("Nom d\'utilisateur ou mot de passe incorrect")</script>';
                }
            } else {
                echo '<script>alert("Nom d\'utilisateur ou mot de passe incorrect")</script>';
            }
        }
    }

    public function logout()
    {
        session_start(); // demarrer la session
        session_destroy(); // supprimer les informations en session
        session_abort();
        header('location: /login');
    }

    public function add_info_recruteur($nom_u, $nom_e, $ifu, $rccm, $site_web, $photo,$user)
    {
        if (
            isset($nom_u) && !empty($nom_u)
            &&
            isset($nom_e) && !empty($nom_e)
            &&
            isset($ifu) && !empty($ifu)
            &&
            isset($rccm) && !empty($rccm)
            &&
            isset($photo) && !empty($photo)
            &&
            isset($site_web) && !empty($site_web)

        ) {
            require_once 'app/core/database/models.php';

            $database = new Model();
            $table = 'employeur';
            $fields = 'nom_u, nom_e, ifu, rccm, site_web,photo, user_id';
            $values = '?,?,?,?,?,?,?';
            $photo = $_FILES['photo']['name'];
            $tmp = $_FILES['photo']['tmp_name'];
            $dossier = 'app/media/'.$photo;
            //file_upload($tmp, "$dossier");
            move_uploaded_file($tmp, "$dossier");
            $data = array($nom_u, $nom_e, $ifu, $rccm, $site_web, $dossier, $user);

            $database->add($table, $fields, $values, $data);

            echo '<script>alert("information bien enregistrer")</script>';
        } else {
            echo '<script>alert("Tous les champs sont requis")</script>';
        }
    }

    public function add_info_candidat($nom_c, $prenom_c, $date_n, $sexe, $niveau, $nationnalite, $adresse, $qualification, $pdf_cv, $photo, $user)
    {
        if (
            isset($nom_c) && !empty($nom_c)
            &&
            isset($prenom_c) && !empty($prenom_c)
            &&
            isset($date_n) && !empty($date_n)
            &&
            isset($sexe) && !empty($sexe)
            &&
            isset($niveau) && !empty($niveau)
            &&
            isset($nationnalite) && !empty($nationnalite)
            &&
            isset($adresse) && !empty($adresse)
            &&
            isset($qualification) && !empty($qualification)
            &&
            isset($pdf_cv) && !empty($pdf_cv)
            &&
            isset($photo) && !empty($photo)

        ) {
            require_once 'app/core/database/models.php';
            require_once 'app/utils/methods.php';

            $database = new Model();
            $table = 'candidat';
            $fields = 'nom_c, prenom_c, sexe, date_n, niveau, nationnalite, adresse, qualification, pdf_cv, photo, user_id';
            $values = '?,?,?,?,?,?,?,?,?,?,?';
            $pdf = cv_upload('app/media/', $pdf_cv);
            $photoo = file_upload('app/media/', $photo);
            $data = array($nom_c, $prenom_c, $sexe, $date_n, $niveau, $nationnalite, $adresse, $qualification, $pdf, $photoo, $user);

            $database->add($table, $fields, $values, $data);

            header('Location:login');
            echo '<script>alert("information bien enregistrer")</script>';
        } else {
            echo '<script>alert("Tous les champs sont requis")</script>';
        }
    }

    public function update_offer($date_exp, $act_principal, $description, $comp_req, $id)
    {
        if (
            isset($date_exp) && !empty($date_exp)
            &&
            isset($act_principal) && !empty($act_principal)
            &&
            isset($description) && !empty($description)
            &&
            isset($comp_req) && !empty($comp_req)
            &&
            isset($id) && !empty($id)

        ) {
            require_once 'app/core/database/models.php';
            require_once 'app/utils/methods.php';

            $database = new Model();
            

            $database->update($date_exp, $act_principal, $description, $comp_req, $id);

            echo '<script>alert("Bien modifie")</script>';
        } else {
            echo '<script>alert("Tous les champs sont requis")</script>';
        }
    }

    public function delete_offre($id)
    {
        if(true){
            require_once 'app/core/database/models.php';
            $database = new Model();
            $table = 'offre';
            $field1 = 'id';
            $values = array($id);
            $field2 = '';
            $database->delete($table, $field1, $field2 = '', $values);

        
            echo '<script>alert("Bien supprime")</script>';
        } else {
            echo '<script>alert("Erreur de suppression")</script>';
        }
    }

    //public function add_info_entretien($_POST['ido'], $_POST['ido'],$_POST['ido'], $_POST['ido'])
    /*public function add_info_entretien($post)
    {
       

         
       require_once 'app/core/database/models.php';
       

            $database = new Model();
            $table = 'entretien';
            $fields = 'date_entretien, time, id_offre, id_candidat';
            $values = '?,?,?,?';
            
            $data = array($post['date'], $post['time'], $post['ido'], $post['idc']);

            $result = $database->add($table, $fields, $values, $data);

            return $result;

           
        
    }*/



    
}
