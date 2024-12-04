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
        '/payment' => [[['_route' => 'payment_method', '_controller' => 'App\\Controller\\PaymentController::choisirMethodePaiement'], null, null, null, false, false, null]],
        '/payment/process' => [[['_route' => 'payment_process', '_controller' => 'App\\Controller\\PaymentController::traiterPaiement'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'passenger_profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'passenger_profile_edit', '_controller' => 'App\\Controller\\ProfileController::editProfile'], null, null, null, false, false, null]],
        '/profile/trajets' => [[['_route' => 'passenger_profile_trajets', '_controller' => 'App\\Controller\\ProfileController::viewTrajets'], null, null, null, false, false, null]],
        '/profile/notifications' => [[['_route' => 'passenger_profile_notifications', '_controller' => 'App\\Controller\\ProfileController::manageNotifications'], null, null, null, false, false, null]],
        '/profile/payments' => [[['_route' => 'passenger_profile_payments', '_controller' => 'App\\Controller\\ProfileController::viewPayments'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/trajets' => [[['_route' => 'trajet_search', '_controller' => 'App\\Controller\\TrajetController::search'], null, null, null, false, false, null]],
        '/welcome' => [[['_route' => 'app_welcome', '_controller' => 'App\\Controller\\WelcomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/annonce/(?'
                    .'|edit/([^/]++)(*:67)'
                    .'|delete/([^/]++)(*:89)'
                .')'
                .'|/reservation/([^/]++)(?'
                    .'|(*:121)'
                    .'|/edit(*:134)'
                    .'|(*:142)'
                .')'
                .'|/trajet/([^/]++)(*:167)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'app_annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'app_annonce_delete', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], null, null, false, true, null]],
        121 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        167 => [
            [['_route' => 'trajet_details', '_controller' => 'App\\Controller\\TrajetController::details'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
