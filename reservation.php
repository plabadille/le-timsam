<?php

$title = 'Réservation et carte - Restaurant le Timsam';

$current_page = " Réservation et carte";
$breadcrumb = [ ["Accueil", "./index.php"] ];

$main = file_get_contents('view/pages/carte.html');

include('view/base.phtml');
