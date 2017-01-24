<?php
$w_routes = array(
    ['GET', '/', 'Default#home', 'default_home'],

    ['GET', '/article/', 'Article#home', 'article_home'],
    ['GET', '/article/ecrire/', 'Article#ecrire', 'article_ecrire'],
    ['GET', '/article/niveau/', 'Article#niveau', 'article_niveau'],
    ['GET', '/article/faq/', 'Article#faq', 'article_faq'],
    ['GET', '/article/mentions/', 'Article#mentions', 'article_mentions'],
    ['GET', '/articles/liquides/', 'Article#liquides', 'article_liquides'],


    ['GET', '/user/', 'User#home', 'user_home'],
    ['GET', '/user/login/', 'User#loginFrom', 'user_loginForm'],
    ['POST', '/user/login/', 'User#loginSubmit', 'user_loginSubmit'],
    ['GET', '/user/logout/', 'User#logout', 'user_logout'],
    ['GET', '/user/inscription/', 'User#inscription', 'user_inscription'],

    ['GET|POST', '/contact/', 'Contact#home', 'contact_home'],

    ['GET|POST', '/admin/', 'Admin#admin', 'admin_users'],
    ['GET|POST', '/admin/delete_user', 'Admin#deleteUser', 'delete_user'],
    ['GET|POST', '/admin/update_user', 'Admin#updateFindUser', 'update_user_find'],
    ['GET|POST', '/admin/updateUser', 'Admin#updateUser', 'update_user']


);