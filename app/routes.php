<?php
$w_routes = array(
    //Page appelé par default au chargement d'index php
    ['GET', '/', 'Default#home', 'default_home'],
    /*********************************************************************
     *                ROUTES ARTICLES
     *
     ********************************************************************/
    ['GET', '/article/', 'Article#home', 'article_home'],
    ['GET', '/article/faq/', 'Faq#faqHome', 'article_faq'],
    ['GET', '/article/mentions/', 'Mentions#mentions', 'article_mentions'],
    ['GET', '/article/api/', 'Api#apiHome', 'article_api'],

    /*********************************************************************
     *                ROUTE CONTACT
     *
     ********************************************************************/
    ['GET', '/contact/', 'Contact#contactHome', 'contact_home'],


    // ROUTES LIQUIDES
    ['GET|POST', '/article/liquides/', 'Article#liquides', 'article_liquides'],
    ['GET', '/article/eliquid/', 'Article#eliquidHome', 'eliquid_home'],
    ['GET', '/article/eliquid/menthol/', 'Article#articlesMenthol', 'eliquid_menthol'],
    ['GET', '/article/eliquid/tabac/', 'Article#articlesTabac', 'eliquid_tabac'],
    ['GET', '/article/eliquid/gourmand/', 'Article#articlesGourmand', 'eliquid_gourmand'],
    ['GET', '/article/eliquid/fruite/', 'Article#articlesFruite', 'eliquid_fruite'],

    // ROUTES ECIG
    ['GET', '/article/ecig/', 'Article#ecigHome', 'ecig_home'],
    ['GET', '/article/ecig/debutant/', 'Article#articlesDebutant', 'ecig_debutant'],
    ['GET', '/article/ecig/intermediaire/', 'Article#articlesIntermediaire', 'ecig_intermediaire'],
    ['GET', '/article/ecig/expert/', 'Article#articlesExpert', 'ecig_expert'],

    //ROUTES COMMENTAIRES
    ['GET|POST', '/article/comment/', 'Comment#addNewComment', 'add_comment'],

    /*********************************************************************
     *                ROUTES UTILISATEURS
     *
     ********************************************************************/
    ['GET|POST', '/user/', 'User#myHome', 'user_home'],
    ['GET', '/user/login/', 'User#loginFrom', 'user_loginForm'],
    ['GET|POST', '/user/loginUser/', 'User#loginSubmit', 'user_loginSubmit'],
    ['GET', '/user/logout/', 'User#logout', 'user_logout'],
    ['GET', '/user/inscription/', 'User#inscription', 'user_inscription'],  //Page avec le formulaire d'inscription
    ['GET|POST', '/user/createuser/', 'User#createUser', 'user_create_user'],    //Page requete d'inscription
    ['GET|POST', '/contact/', 'Contact#contactHome', 'contact_contact'],

    /*********************************************************************
     *                ROUTES ADMINISTRATEUR
     *
     ********************************************************************/
    ['GET', '/admin/', 'Admin#admin', 'admin_users'],
    ['GET|POST', '/admin/delete_user/', 'Admin#deleteUser', 'delete_user'],
    ['GET|POST', '/admin/update_user/', 'Admin#updateFindUser', 'update_user_find'],
    ['GET|POST', '/updateUser/', 'Admin#updateUser', 'update_user'],
    ['GET|POST', '/admin/add_article/', 'Admin#addArticle', 'add_article'],
    ['GET|POST', '/admin/update_article/', 'Admin#updateFindArticle', 'update_article_find'],
    ['GET|POST', '/admin/updateArticle/', 'Admin#updateArticle', 'update_article'],
    ['GET|POST', '/admin/delete_article/', 'Admin#deleteArticle', 'delete_article'],

);