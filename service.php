<?php

$title = 'Nos services - Restaurant le Timsam';

$current_page = " Nos services";
$breadcrumb = [ ["Accueil", "./index.php"] ];

$main = file_get_contents('view/pages/restaurant.html');

include('view/base.phtml');
