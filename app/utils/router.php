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
         require_once 'app/core/controllers/user1.php';
         $recruteur = new User();
         $recruteur->add_info_entretien();
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


else if ($route === '/responsive') {
    require_once 'app/core/views/admin/responsive.php';

} 

else if ($route === '/adminlog') {
    require_once 'app/core/views/admin/login.php';

} 

else if ($route === '/advanced') {
    require_once 'app/core/views/admin/advanced.php';

} 

else if ($route === '/payer') {
    require_once 'app/core/controllers/payer.php';

} 

else if ($route === '/basic') {
    if($_GET['action']){
        require_once 'app/core/database/models.php';
        $profile = new Model();
        $candidats = $profile->validate_candidat($_GET['action'],$_GET['target']);
        header('Location:/basic');
    }
    if($_GET['actionemp']){
        require_once 'app/core/database/models.php';
        $profile = new Model();
        $candidats = $profile->validate_employeur($_GET['actionemp'],$_GET['target']);
        header('Location:/basic');
    }
    require_once 'app/core/views/admin/basic.php';

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

}
 else if ($route === '/admin') {
    require_once 'app/core/views/admin/home.php';

}

else if ($route === '/liste_comptes') {
    
    require_once 'app/core/views/admin/liste_comptes.php';

}

else if ($route === '/liste_offres') {
    require_once 'app/core/views/admin/liste_offres.php';

}

else if ($route === '/gerer_offres') {
    if($_GET['action']){
        require_once 'app/core/database/models.php';
        $profile = new Model();
        $candidats = $profile->validate_offre($_GET['action'],$_GET['target']);
        header('Location:/gerer_offres');
    }
    require_once 'app/core/views/admin/gerer_offres.php';

}






/*else if ($route === '/validecand') {
    require_once 'app/core/views/admin/responsive.php';

}*/


else if ($route === '/consulter') {
    require_once 'app/core/controllers/offer.php';
    $offer = new Offer();
    $cv = $_GET ['cv'];
    $motiv = $_GET ['motiv'];
    $offer-> get_documents($cv, $motiv);

}else if ($route === '/decision') {
    require_once 'app/core/controllers/offer.php';
    $statut = new Offer();
    $decision = $_GET['action']; // Exemple : récupère la valeur de la décision à partir d'un formulaire POST
    $target = $_GET['target']; // Exemple : récupère
    // Appel de la fonction de traitement de la décision
    $statut->processDecision($decision, $target);
    echo '<script>alert("Candidature mis a jour !")</script>';
    header('location: /profile?actor=company&action=gestion');


   


// Obtention de la décision (vous pouvez la récupérer à partir d'une requête HTTP ou d'une autre source)


}else {
    echo '404 vous etes perdue ;(';
}



// author : kemi
