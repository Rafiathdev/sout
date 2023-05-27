<?php
/**
 * THIS FILE CONTAINS SOME UTILS FUNCTIONS
**/


function search($word)
{ // fonction du moteur de recherche
    // cette fontion prend en paramètre le mot clé de la recherche
    // la recherche se fait en fonction du titre et de la description
    $query = preg_replace("#[^a-zA-Z ?0-9]#i", "", $word); // nettoyage du mot clé
    $sql = "SELECT * FROM plans WHERE name LIKE ? OR description LIKE ? OR ville LIKE ?"; // requete de reherche
    require('connect_db.php'); // récupération de l'objet de connection à la base de données 
    $req = $db -> prepare($sql); 
    $req -> execute(array('%'.$query.'%', '%'.$query.'%', '%'.$query.'%')); // execution de la requete de recherche
    return $req;
}

// upload and return the uploaded file link
function file_upload($dir, $file)
{
    
    // Check if the file is well loaded
    if ($_FILES[$file]['name']) {
   
        // Check if the file do not contains errors
        if (!$_FILES[$file]['error']) {
         

            $temp_name = $_FILES[$file]['tmp_name']; // get the temp file name
            $type = $_FILES[$file]['type']; // get the file type
         
             // Check the file extensions 
             $typeList = array('png', 'jpg', 'jpeg');
             $clean_type = explode('/', $type);

            
            if (in_array($clean_type[1] ,$typeList)) {
               
               
              
                $name = $_FILES[$file]['name']; // get the real file name
                $urlf = $dir . $name; 
                move_uploaded_file($temp_name, $dir . $name); // upload the file
                return $urlf;
                
            } else {
                echo "<script>alert(\"Error ! Wrong file format ! Try Again\")</script>";
                exit();
            }
        }
    }
   
}

function cv_upload($dir, $file)
{
    
    // Check if the file is well loaded
    if ($_FILES[$file]['name']) {
   
        // Check if the file do not contains errors
        if (!$_FILES[$file]['error']) {
         

            $temp_name = $_FILES[$file]['tmp_name']; // get the temp file name
            $type = $_FILES[$file]['type']; // get the file type
         
             // Check the file extensions 
             $typeList = array('pdf');
             $clean_type = explode('/', $type);

            
            if (in_array($clean_type[1] ,$typeList)) {
               
               
              
                $name = $_FILES[$file]['name']; // get the real file name
                $urlf = $dir . $name; 
                move_uploaded_file($temp_name, $dir . $name); // upload the file
                return $urlf;
                
            } else {
                echo "<script>alert(\"Error ! Wrong file format ! Try Again\")</script>";
                exit();
            }
        }
    }
   
}




function authenticate($data){
 
    $_SESSION['user_info'] = $data;
}

function is_authenticate(){
  
   
    if(isset($_SESSION['user_info'] )){
        return true;
    }
    else{
        return false;
    }
}

function generate_slug($urlString)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
    return $slug;
}


function download($path) // fonction de telechargement d'un ficheier 
 { 
     if (isset($path)) { 
         $q = urldecode($path); // recupéraion du chemin d'accès du fichier 
         $file = ("$q");  
         $type = filetype($file); // recupération de l'extention du fichier 
         $name = basename($file); // récuperation du nom du fichier 
         header("Content-Type: " . $type); // spécification du tupe de fichier à télécharger  
         header("Cotent-Length: " . filesize($file)); // spécification de la taille du fichier 
         header("Content-Disposition: attachment; filename=" . $name); 
  
         readfile($file); // telecargement du fichier 
     } 
 }

function convert_date($date){

   /*  $dateTime = new DateTime($date);
    $formattedDate = $dateTime->format('l j F Y');
    
    // Remplacer les noms anglais des mois et jours par les noms français
    $englishMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $frenchMonths = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $formattedDate = str_replace($englishMonths, $frenchMonths, $formattedDate);

    $englishDays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $frenchDays = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $formattedDate = str_replace($englishDays, $frenchDays, $formattedDate);

    return $formattedDate; */
 


$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$formattedDate = $formatter->format(new DateTime($date));

return $formattedDate; 


    }
 function heure(){
   
 }
    







// author : @kemi
?>

