<?php

class User
{

    public function register($email, $phone, $type, $password, $confirmPassword)
    {

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
                $fields = 'email, telephone, password, type_compte';
                $values = '?,?,?,?';
                $data = array($email, $phone, sha1($password), $type);

                $database->add($table, $fields, $values, $data);

                echo '<script>alert("Votre compte a été crée avec succes")</script>';
            } else {
                echo '<script>alert("Erreur ! Les mots de passe doivent être identiques ")</script>';
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
            $fields = 'id, password, type';
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
                        $info = array('email' => $email, 'id' => $pass['id'], 'name'=>$user_info['nom_e'], 'type'=>$pass['type']);
                        authenticate($info);
                    }
                    else{
                        $table = 'candidat';
                        $fields = 'nom_c, prenom_c';
                        $sfield = 'user_id';
                        $data = array($pass['id']);
                        $query = $database->read_filter_once($table, $fields, $sfield, $data);
                        $user_info =  $query->fetch();
                        require_once 'app/utils/methods.php';
                        $info = array('email' => $email, 'id' => $pass['id'], 'name'=>$user_info['prenom_c'].' '.$user_info['nom_c'], $pass['type']);
                        authenticate($info);
                    }




                    echo '<script>alert("Bienvenue")</script>';
                    header('location: /');
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
        header('location : /login');
    }

    public function add_info_recruteur($nom_u, $nom_e, $ifu, $rccm, $site_web)
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
            isset($site_web) && !empty($site_web)

        ) {
            require_once 'app/core/database/models.php';

            $database = new Model();
            $table = 'employeur';
            $fields = 'nom_u, nom_e, ifu, rccm, site_web';
            $values = '?,?,?,?,?';
            $data = array($nom_u, $nom_e, $ifu, $rccm, $site_web);

            $database->add($table, $fields, $values, $data);

            echo '<script>alert("information bien enregistrer")</script>';
        } else {
            echo '<script>alert("Tous les champs sont requis")</script>';
        }
    }

    public function add_info_candidat($nom_c, $prenom_c, $date_n, $sexe, $niveau, $nationnalite, $adresse, $qualification, $pdf_cv, $photo)
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
            $fields = 'nom_c, prenom_c, sexe, date_n, niveau, nationnalite, adresse, qualification, pdf_cv, photo';
            $values = '?,?,?,?,?,?,?,?,?,?';
            $pdf = cv_upload('app/media/', $pdf_cv);
            $photoo = file_upload('app/media/', $photo);
            $data = array($nom_c, $prenom_c, $sexe, $date_n, $niveau, $nationnalite, $adresse, $qualification, $pdf, $photoo);

            $database->add($table, $fields, $values, $data);

            echo '<script>alert("information bien enregistrer")</script>';
        } else {
            echo '<script>alert("Tous les champs sont requis")</script>';
        }
    }
}
