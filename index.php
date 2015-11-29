<?php
//a supr : cd ../../progra~2/wamp/www/timsam_git/le-timsam
//git add -A
// git commit -a -m ""
//git push
$nav = file_get_contents('view/templates/nav.phtml');
$actualite = file_get_contents('view/pages/actualite.html');
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

//function

switch ($action) {
	//onglet1 accueil
	case 'home':
		$title = 'Accueil';
		$main = file_get_contents('view/pages/home.html');
		break;
	//onglet2 services
	case 'services':
		$title = 'Les services';
		$main = file_get_contents('view/pages/services.html');
		break;
		//sous-onglet
		case 'restaurant':
		$title = 'Le restaurant';
		$main = file_get_contents('view/pages/restaurant.html');
		break;
		case 'cartecadeau':
		$title = 'Notre carte cadeau';
		$main = file_get_contents('view/pages/cartecadeau.html');
		break;
	//onglet3 produits
	case 'carte':
		$title = 'Menu et carte';
		$main = file_get_contents('view/pages/carte.html');
		break;
		//sous-onglet
		case 'entrees':
		$title = 'Nos entrées';
		$main = file_get_contents('view/pages/entrees.html');
		break;
		case 'plats':
		$title = 'Nos plats';
		$main = file_get_contents('view/pages/plats.html');
		break;
		case 'desserts':
		$title = 'Nos desserts';
		$main = file_get_contents('view/pages/desserts.html');
		break;
	//onglet4 animations
	case 'event':
		$title = 'Nos animations';
		$main = file_get_contents('view/pages/event.html');
		break;
		//sous-onglet
		case 'galerie':
		$title = 'La galerie';
		$main = file_get_contents('view/pages/galerie.html');
		break;
		case 'agenda':
		$title = 'Notre agenda';
		$main = file_get_contents('view/pages/agenda.html');
		break;
	//onglet5 contact
	case 'contact':
		$title = 'Contact';
		$main = file_get_contents('view/pages/contact.html');
		break;
}

$title .= ' - Restaurant le Timsam';

include('view/base.phtml');