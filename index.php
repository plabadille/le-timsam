<?php
$nav = file_get_contents('view/templates/nav.phtml');
$actualite = file_get_contents('view/pages/actualite.html');
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

//function

switch ($action) {
	case 'home':
		$title = 'Accueil';
		$main = file_get_contents('view/pages/home.html');
		break;

	case 'restaurant':
	$title = 'Le restaurant';
	$main = file_get_contents('view/pages/restaurant.html');
	break;
	
	case 'produits':
	$title = 'Nos produits';
	$main = file_get_contents('view/pages/produits.html');
	break;
		
	case 'event':
		$title = 'Nos animations';
		$main = file_get_contents('view/pages/event.html');
		break;
			//uniquement accessible via event.html
			case 'article1':
			$title = 'Nos animations';
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
		
	case 'carte':
		$title = 'Carte et réservation en ligne';
		$main = file_get_contents('view/pages/carte.html');
		break;
}

$title .= ' - Restaurant le Timsam';

include('view/base.phtml');