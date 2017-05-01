<?php
if( isset($_SERVER['HTTPS'] ) ) {
    $url_domain = "https://" . $_SERVER['HTTP_HOST'];
} else {
    $url_domain = "http://" . $_SERVER['HTTP_HOST'];
}
$breadcrumb = [ ["Accueil", "/index.php"] ];
$action = isset($_GET['articles']) ? $_GET['articles'] : 'event';
switch ($action) {
    case 'event':
        $title = 'Nos animations';    
        $current_page = " Nos animations";
        $main = file_get_contents('view/pages/event.html');
        break;
    case 'exposition-marie-hamel':
        $title = 'Exposition Marie Hamel';    
        $current_page = " Exposition Marie Hamel";
        $main = file_get_contents('view/pages/articles/1_mariehamel.html');
        break;
    case 'exposition-jean-louis-patrice':
        $title = 'Exposition Jean-Louis Patrice';    
        $current_page = " Exposition Jean-Louis Patrice";
        $main = file_get_contents('view/pages/articles/2_jlpatrice.html');
        break;
    case 'diner-concert-charlie-larigot':
        $title = 'Dîner-concert Charlie Larigot';    
        $current_page = " Dîner-concert Charlie Larigot";
        $main = file_get_contents('view/pages/articles/3_charlielarigot.html');
        break;
    case 'exposition-cecile-dalnoky':
        $title = 'Exposition Cécile Dalnoky';    
        $current_page = " Exposition Cécile Dalnoky";
        $main = file_get_contents('view/pages/articles/4_ceciledalnoky.html');
        break;
    case 'exposition-frederic-filoche':
        $title = 'Exposition Frédéric Filoche';    
        $current_page = " Exposition Frédéric Filoche";
        $main = file_get_contents('view/pages/articles/5_fredericfiloche.html');
        break;
    case 'exposition-zonk':
        $title = 'Exposition Zonk';    
        $current_page = " Exposition Zonk";
        $main = file_get_contents('view/pages/articles/6_zonk.html');
        break;
    case 'animation-culturelle':
        $title = 'Animation culturelle';    
        $current_page = " Animation culturelle";
        $main = file_get_contents('view/pages/articles/7_animculturelle.html');
        break;
    case 'conference-secret-d-un-chef-dans-la-nature':
        $title = 'Conférence : Secret d\'un chef dans la nature';    
        $current_page = " Conférence : Secret d\'un chef dans la nature";
        $main = file_get_contents('view/pages/articles/9_secretDunChef.html');
        break;
    case 'animation-culturelle-2':
        $title = 'Animation culturelle 2';    
        $current_page = " Animation culturelle 2";
        $main = file_get_contents('view/pages/articles/10_animculturelle.html');
        break;
    case 'soiree-speciale-a-la-table-du-chef':
        $title = 'Soirée spéciale : Soirée à la table du chef';    
        $current_page = " Soirée spéciale : Soirée à la table du chef";
        $main = file_get_contents('view/pages/articles/11_soireeTableChef.html');
        break;
    case 'conference-secret-d-un-chef-dans-la-nature-2':
        $title = 'Conférence : Secret d\'un chef dans la nature 2ème édition';    
        $current_page = " Conférence : Secret d'un chef dans la nature 2ème édition";
        $main = file_get_contents('view/pages/articles/12_secretDunChef2.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-1':
        $title = 'Retour sur la soirée à la table du chef';    
        $current_page = " Retour sur la soirée à la table du chef";
        $main = file_get_contents('view/pages/articles/13_soireeTableChefDebrief1.html');
        break;
    case 'soiree-speciale-a-la-table-du-chef-2':
        $title = 'Soirée spéciale : Soirée à la table du chef (2ème édition)';    
        $current_page = " Soirée à la table du chef (2ème édition)";
        $main = file_get_contents('view/pages/articles/14_soireeTableChef2.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-2':
        $title = 'Retour sur la soirée à la table du chef (2ème édition)';    
        $current_page = " Retour sur la soirée à la table du chef (2ème édition)";
        $main = file_get_contents('view/pages/articles/15_soireeTableChefDebrief2.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-3':
        $title = 'Retour sur la soirée à la table du chef (3ème édition)';    
        $current_page = " Retour sur la soirée à la table du chef (3ème édition)";
        $main = file_get_contents('view/pages/articles/16_soireeTableChefDebrief3.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-4':
        $title = 'Retour sur la soirée à la table du chef (4ème édition)';    
        $current_page = " Retour sur la soirée à la table du chef (4ème édition)";
        $main = file_get_contents('view/pages/articles/17_soireeTableChefDebrief4.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-5':
        $title = 'Retour sur la soirée à la table du chef (5ème édition)';    
        $current_page = " Retour sur la soirée à la table du chef (5ème édition)";
        $main = file_get_contents('view/pages/articles/18_soireeTableChefDebrief5.html');
        break;
    case 'animation-culturelle-3':
        $title = 'Animation culturelle 3';    
        $current_page = " Animation culturelle 3";
        $main = file_get_contents('view/pages/articles/19_animculturelle.html');
        break;
    case 'retour-soiree-a-la-table-du-chef-6':
        $title = 'Retour sur la soirée à la table du chef (6ème édition)';    
        $current_page = " Retour sur la soirée à la table du chef (6ème édition)";
        $main = file_get_contents('view/pages/articles/20_soireeTableChefDebrief6.html');
        break;
    case 'exposition-celine-azorin':
        $title = 'L\'exposition de Céline Azorin';    
        $current_page = " L'exposition de Céline Azorin";
        $main = file_get_contents('view/pages/articles/21_expoCecileAzorin.html');
        break;
    case 'exposition-sista-jahia':
        $title = 'L\'exposition de Sista Jahia';    
        $current_page = " L'exposition de Sista Jahia";
        $main = file_get_contents('view/pages/articles/22_expoSistaJahia.html');
        $og_url = $url_domain . "/articles/" . $action;
        $og_title = $title;
        $og_description = "Nous exposons en ce moment l'artiste Sista Jahia. Nous vous invitons à découvrir son travail très personnel, des tableaux aux influences très pop, colorés et géométriques ! Chaque tableau et uniques et a son histoire, il ne tient qu'à vous de venir les découvrir tout en mangeant votre plat favoris.";
        $og_image =  $url_domain . "/img/galerie/event/article/sista_jahia/1_mini.jpg";
        break;
    default:
        $title = 'Nos animations';    
        $current_page = " Nos animations";
        $main = file_get_contents('view/pages/event.html');
        break;

}

if (isset($action) && $action != 'event') {
    array_push($breadcrumb, ["Nos animations", "/evenement.php"]);
    $meta_facebook = true;
}
$title .= ' - Restaurant le Timsam';

include('view/base.phtml');
