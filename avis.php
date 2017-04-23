<?php

$title = 'Nos avis - Restaurant le Timsam';

$current_page = " Nos avis";
$breadcrumb = [ ["Accueil", "./index.php"] ];

$main = file_get_contents('view/pages/produits.html');

include('view/base.phtml');
