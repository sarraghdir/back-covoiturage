<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/ajouter-annonce' => [[['_route' => 'app_annonce_add', '_controller' => 'App\\Controller\\AnnonceController::add'], null, null, null, false, false, null]],
        '/annonce-home' => [[['_route' => 'app_annonce_home', '_controller' => 'App\\Controller\\AnnonceController::home'], null, null, null, false, false, null]],
        '/annonce-dashboard' => [[['_route' => 'app_annonce_dashboard', '_controller' => 'App\\Controller\\AnnonceController::dashboard'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'app_annonce_list', '_controller' => 'App\\Controller\\AnnonceController::list'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/welcome' => [[['_route' => 'app_welcome', '_controller' => 'App\\Controller\\WelcomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/annonce/(?'
                    .'|edit/([^/]++)(*:67)'
                    .'|delete/([^/]++)(*:89)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'app_annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], null, null, false, true, null]],
        89 => [
            [['_route' => 'app_annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
