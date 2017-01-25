<?php
$w_routes = array(
    //Page appelé par default au chargement d'index php
    ['GET', '/', 'Default#home', 'default_home'],
    /*********************************************************************
     *                ROUTE ARTICLES
     *
     ********************************************************************/
    ['GET|POST', '/article/', 'Article#home', 'article_home'],
    ['GET|POST', '/article/ecrire/', 'Article#ecrire', 'article_ecrire'],
    ['GET|POST', '/article/niveau/', 'Article#niveau', 'article_niveau'],
    ['GET|POST', '/article/faq/', 'Article#faq', 'article_faq'],
    ['GET|POST', '/article/mentions/', 'Article#mentions', 'article_mentions'],
    ['GET|POST', '/articles/liquides/', 'Article#liquides', 'article_liquides'],
    ['GET|POST', '/articles/eliquid/', 'Article#eliquidHome', 'eliquid_home'],
    ['GET|POST', '/articles/eliquid/menthol', 'Article#articlesMenthol', 'eliquid_menthol'],
    /*********************************************************************
     *                ROUTE UTILISATEURS
     *
     ********************************************************************/
    ['GET|POST', '/user/', 'User#home', 'user_home'],
    ['GET|POST', '/user/login/', 'User#loginFrom', 'user_loginForm'],
    ['POST', '/user/login/', 'User#loginSubmit', 'user_loginSubmit'],
    ['GET|POST', '/user/logout/', 'User#logout', 'user_logout'],
    ['GET|POST', '/user/inscription/', 'User#inscription', 'user_inscription'],  //Page avec le formulaire d'inscription
    ['GET|POST', '/user/createuser/', 'User#createUser', 'user_create_user'],    //Page requete d'inscription

    ['GET|POST', '/contact/', 'Contact#home', 'contact_home'],
    /*********************************************************************
     *                ROUTE ADMINISTRATEUR
     *
     ********************************************************************/
    ['GET|POST', '/admin/', 'Admin#admin', 'admin_users'],
    ['GET|POST', '/admin/delete_user/', 'Admin#deleteUser', 'delete_user'],
    ['GET|POST', '/admin/update_user/', 'Admin#updateFindUser', 'update_user_find'],
    ['GET|POST', '/admin/updateUser/', 'Admin#updateUser', 'update_user'],

    ['GET|POST', '/admin/add_article/', 'Admin#addArticle', 'add_article'],



);