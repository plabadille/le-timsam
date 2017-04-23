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
}

if (isset($_GET['action']) && $_GET['action'] != 'event') {
    array_push($breadcrumb, ["Nos animations", "./event.php"]);
}
$title .= ' - Restaurant le Timsam';

include('view/base.phtml');
