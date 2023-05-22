<?php

/**
 * THIS FILE HELPS US TO DISPACTH THE ROUTES AND CALL THE SUITABLE CONTROLLER
 **/
$cleanRoute = explode('?', $_SERVER['REQUEST_URI']);

$route = $cleanRoute[0]; // Get the request URI

if ($route === '/') {
    require_once 'app/core/views/home.php';
} else if ($route === '/register') {
    if ($_GET['actor'] == 'company') {
        require_once 'app/core/views/register_employer.php';
    } else {
        require_once 'app/core/views/register_candidat.php';
    }

} else if ($route === '/choice') {
    require_once 'app/core/views/choice.php';

} else if ($route === '/info') {
    if ($_GET['actor'] == 'company') {
        require_once 'app/core/views/info_recruteur.php';
    } else {
        require_once 'app/core/views/info_candidat.php';
    }


} 
 else if ($route === '/profile') {
    if ($_GET['actor'] == 'company') {
        require_once 'app/core/views/profile_recruteur.php';
    } else {
        require_once 'app/core/views/profile_candidat.php';
    }

}

else if ($route === '/liste') {
    require_once 'app/core/views/liste.php';

} 

else if ($route === '/decrire') {
    require_once 'app/core/views/decrire.php';

} 

else if ($route === '/offre') {
    require_once 'app/core/views/offer_list.php';

} 

else if ($route === '/candidature') {
    require_once 'app/core/views/candidature.php';

} 

else if ($route === '/entretien') {
    require_once 'app/core/views/entretien.php';

} 

else if ($route === '/voirModifie') {
    require_once 'app/core/views/voir_modifier.php';

} 

else if ($route === '/delete') {
    require_once 'app/core/views/delete.php';

} 

else if ($route === '/login') {
    require_once 'app/core/views/login.php';
    
} else if ($route === '/logout') {
    require_once 'app/core/controllers/user.php';
    $user = new User();
    $user->logout();

} else if ($route === '/offer') {
    require_once 'app/core/views/offer.php';

} else {
    echo '404 vous etes perdue ;(';
}

// author : kemi
