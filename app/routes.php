<?php
// ce fichier contient la liste des routes = url ) que l'on va accepter
//silex va parcourir les routes de haut en bas et s'arrête à la première qui correspond

//page d'accueil
$app->get('/', 'WF3\Controller\HomeController::homePageAction')->bind('index');
//bind permet de nommer une route
//on peut alors appeler cette route dans une vue twig pour générer l'url correspondante

//cours collectif
$app->get('/cours_collectifs', 'WF3\Controller\HomeController::homePageCoursCollectifs')->bind('cours_collectifs');

//fitness_cardio_physique
$app->get('/article', 'WF3\Controller\HomeController::articleAction')->bind('fitness_cardio_physique');

//cours_boxe
$app->get('/article/delete', 'WF3\Controller\HomeController::deleteArticleAction')->bind('cours_boxe');

//cours_pilates
$app->get('/users/list', 'WF3\Controller\HomeController::usersListAction')->bind('cours_pilates');

//cours_yoga
$app->get('/user', 'WF3\Controller\HomeController::userAction')
->bind('cours_yoga');

//equipe
$app->match('/contact/moi', 'WF3\Controller\HomeController::contactAction')->bind('equipe');

//tarifs
$app->get('/seurche', 'WF3\Controller\HomeController::seurcheAction')
    ->bind('tarifs');

//partenaires
$app->match('/recherche', 'WF3\Controller\HomeController::rechercheAction')
    ->bind('partenaires');

//contact
$app->match('/ajout/article', 'WF3\Controller\HomeController::ajoutArticleAction')->bind('contact');