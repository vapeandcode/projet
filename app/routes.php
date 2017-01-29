<?php
$w_routes = array(
    //Page appelé par default au chargement d'index php
    ['GET', '/', 'Default#home', 'default_home'],
    /*********************************************************************
     *                ROUTES ARTICLES
     *
     ********************************************************************/
    ['GET|POST', '/article/', 'Article#home', 'article_home'],
    ['GET|POST', '/article/ecrire/', 'Article#ecrire', 'article_ecrire'],
    ['GET|POST', '/article/niveau/', 'Article#niveau', 'article_niveau'],
    ['GET|POST', '/article/faq/', 'Faq#faqHome', 'article_faq'],
    ['GET|POST', '/article/mentions/', 'Article#mentions', 'article_mentions'],
    ['GET|POST', '/article/api/', 'Article#api', 'article_api'],

    // ROUTES LIQUIDES
    ['GET|POST', '/article/liquides/', 'Article#liquides', 'article_liquides'],
    ['GET|POST', '/article/eliquid/', 'Article#eliquidHome', 'eliquid_home'],
    ['GET|POST', '/article/eliquid/menthol/', 'Article#articlesMenthol', 'eliquid_menthol'],
    ['GET|POST', '/article/eliquid/tabac/', 'Article#articlesTabac', 'eliquid_tabac'],
    ['GET|POST', '/article/eliquid/gourmand/', 'Article#articlesGourmand', 'eliquid_gourmand'],
    ['GET|POST', '/article/eliquid/fruite/', 'Article#articlesFruite', 'eliquid_fruite'],

    // ROUTES ECIG
    ['GET|POST', '/article/ecig/', 'Article#ecigHome', 'ecig_home'],
    ['GET|POST', '/article/ecig/debutant/', 'Article#articlesDebutant', 'ecig_debutant'],
    ['GET|POST', '/article/ecig/intermediaire/', 'Article#articlesIntermediaire', 'ecig_intermediaire'],
    ['GET|POST', '/article/ecig/expert/', 'Article#articlesExpert', 'ecig_expert'],

    //ROUTES COMMENTAIRES
    ['GET|POST', '/article/comment/', 'Comment#addNewComment', 'add_comment'],

    /*********************************************************************
     *                ROUTES UTILISATEURS
     *
     ********************************************************************/
    ['GET|POST', '/user/', 'User#home', 'user_home'],
    ['GET|POST', '/user/login/', 'User#loginFrom', 'user_loginForm'],
    ['GET|POST', '/user/loginUser/', 'User#loginSubmit', 'user_loginSubmit'],
    ['GET|POST', '/user/logout/', 'User#logout', 'user_logout'],
    ['GET|POST', '/user/inscription/', 'User#inscription', 'user_inscription'],  //Page avec le formulaire d'inscription
    ['GET|POST', '/user/createuser/', 'User#createUser', 'user_create_user'],    //Page requete d'inscription
    ['GET|POST', '/contact/', 'Contact#contactHome', 'contact_contact'],

    /*********************************************************************
     *                ROUTES ADMINISTRATEUR
     *
     ********************************************************************/
    ['GET|POST', '/admin/', 'Admin#admin', 'admin_users'],
    ['GET|POST', '/admin/delete_user/', 'Admin#deleteUser', 'delete_user'],
    ['GET|POST', '/admin/update_user/', 'Admin#updateFindUser', 'update_user_find'],
    ['GET|POST', '/admin/updateUser/', 'Admin#updateUser', 'update_user'],
    ['GET|POST', '/admin/add_article/', 'Admin#addArticle', 'add_article'],

);