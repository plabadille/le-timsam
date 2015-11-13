<?php

$nav = file_get_contents('view/templates/nav.phtml');
$action = isset($GET['action']) ? $_GET['action'] : 'home';

//function

switch ($action) {
	case 'home':
	$title = 'Accueil';
	$main = file_get_contents('view/templates/home.phtml');
	break;
}

include('view/base.phtml');