<?php

$breadcrumb = [ ["Accueil", "./index.php"] ];

$action = isset($_GET['action']) ? $_GET['action'] : 'event';
switch ($action) {
    case 'event':
        $title = 'Nos animations';
        $current_page = " Nos animations";
        $main = file_get_contents('view/pages/event.html');
        break;
    case 'article1':
        $title = 'Exposition Marie Hamel';
        $current_page = " Exposition Marie Hamel";
        $main = file_get_contents('view/pages/articles/1_mariehamel.html');
        break;
    case 'article2':
        $title = 'Exposition Jean-Louis Patrice';
        $current_page = " Exposition Jean-Louis Patrice";
        $main = file_get_contents('view/pages/articles/2_jlpatrice.html');
        break;
    case 'article3':
        $title = 'Dîner-concert Charlie Larigot';
        $current_page = " Dîner-concert Charlie Larigot";
        $main = file_get_contents('view/pages/articles/3_charlielarigot.html');
        break;
    case 'article4':
        $title = 'Exposition Cécile Dalnoky';
        $current_page = " Exposition Cécile Dalnoky";
        $main = file_get_contents('view/pages/articles/4_ceciledalnoky.html');
        break;
    case 'article5':
        $title = 'Exposition Frédéric Filoche';
        $current_page = " Exposition Frédéric Filoche";
        $main = file_get_contents('view/pages/articles/5_fredericfiloche.html');
        break;
    case 'article6':
        $title = 'Exposition Zonk';
        $current_page = " Exposition Zonk";
        $main = file_get_contents('view/pages/articles/6_zonk.html');
        break;
    case 'article7':
        $title = 'Animation culturelle';
        $current_page = " Animation culturelle";
        $main = file_get_contents('view/pages/articles/7_animculturelle.html');
        break;
    case 'article9':
        $title = 'Conférence : Secret d\'un chef dans la nature';
        $current_page = " Conférence : Secret d\'un chef dans la nature";
        $main = file_get_contents('view/pages/articles/9_secretDunChef.html');
        break;
    case 'article10':
        $title = 'Animation culturelle 2';
        $current_page = " Animation culturelle 2";
        $main = file_get_contents('view/pages/articles/10_animculturelle.html');
        break;
    case 'article11':
        $title = 'Soirée spéciale : Soirée à la table du chef';
        $current_page = " Soirée spéciale : Soirée à la table du chef";
        $main = file_get_contents('view/pages/articles/11_soireeTableChef.html');
        break;
    case 'article12':
        $title = 'Conférence : Secret d\'un chef dans la nature 2ème édition';
        $current_page = " Conférence : Secret d'un chef dans la nature 2ème édition";
        $main = file_get_contents('view/pages/articles/12_secretDunChef2.html');
        break;
    case 'article13':
        $title = 'Retour sur la soirée à la table du chef';
        $current_page = " Retour sur la soirée à la table du chef";
        $main = file_get_contents('view/pages/articles/13_soireeTableChefDebrief1.html');
        break;
    case 'article14':
        $title = 'Soirée spéciale : Soirée à la table du chef (2ème édition)';
        $current_page = " Soirée à la table du chef (2ème édition)";
        $main = file_get_contents('view/pages/articles/14_soireeTableChef2.html');
        break;
    case 'article15':
        $title = 'Retour sur la soirée à la table du chef (2ème édition)';
        $current_page = " Retour sur la soirée à la table du chef (2ème édition)";
        $main = file_get_contents('view/pages/articles/15_soireeTableChefDebrief2.html');
        break;
    case 'article16':
        $title = 'Retour sur la soirée à la table du chef (3ème édition)';
        $current_page = " Retour sur la soirée à la table du chef (3ème édition)";
        $main = file_get_contents('view/pages/articles/16_soireeTableChefDebrief3.html');
        break;
    case 'article17':
        $title = 'Retour sur la soirée à la table du chef (4ème édition)';
        $current_page = " Retour sur la soirée à la table du chef (4ème édition)";
        $main = file_get_contents('view/pages/articles/17_soireeTableChefDebrief4.html');
        break;
    case 'article18':
        $title = 'Retour sur la soirée à la table du chef (5ème édition)';
        $current_page = " Retour sur la soirée à la table du chef (5ème édition)";
        $main = file_get_contents('view/pages/articles/18_soireeTableChefDebrief5.html');
        break;
    case 'article19':
        $title = 'Animation culturelle 3';
        $current_page = " Animation culturelle 3";
        $main = file_get_contents('view/pages/articles/19_animculturelle.html');
        break;
    case 'article20':
        $title = 'Retour sur la soirée à la table du chef (6ème édition)';
        $current_page = " Retour sur la soirée à la table du chef (6ème édition)";
        $main = file_get_contents('view/pages/articles/20_soireeTableChefDebrief6.html');
        break;
    case 'article21':
        $title = 'L\'exposition de Céline Azorin';
        $current_page = " L'exposition de Céline Azorin";
        $main = file_get_contents('view/pages/articles/21_expoCecileAzorin.html');
        break;
    case 'article22':
        $title = 'L\'exposition de Sista Jahia';
        $current_page = " L'exposition de Sista Jahia";
        $main = file_get_contents('view/pages/articles/22_expoSistaJahia.html');
        break;
}

if (isset($_GET['action']) && $_GET['action'] != 'event') {
    array_push($breadcrumb, ["Nos animations", "./evenement.php"]);
}
$title .= ' - Restaurant le Timsam';

include('view/base.phtml');
