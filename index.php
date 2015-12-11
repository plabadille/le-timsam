<?php
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
			//uniquement accessible via event.html
			case 'article1':
			$title = 'Exposition Marie Hamel';
			$main = file_get_contents('view/pages/articles/1_mariehamel.html');
			break;
			case 'article2':
			$title = 'Exposition Jean-Louis Patrice';
			$main = file_get_contents('view/pages/articles/2_jlpatrice.html');
			break;
			case 'article3':
			$title = 'Dîner-concert Charlie Larigot';
			$main = file_get_contents('view/pages/articles/3_charlielarigot.html');
			break;
			case 'article4':
			$title = 'Exposition Cécile Dalnoky';
			$main = file_get_contents('view/pages/articles/4_ceciledalnoky.html');
			break;
			case 'article5':
			$title = 'Exposition Frédéric Filoche';
			$main = file_get_contents('view/pages/articles/5_fredericfiloche.html');
			break;
			case 'article6':
			$title = 'Exposition Zonk';
			$main = file_get_contents('view/pages/articles/6_zonk.html');
			break;
			case 'article7':
			$title = 'Animation culturelle';
			$main = file_get_contents('view/pages/articles/7_animculturelle.html');
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