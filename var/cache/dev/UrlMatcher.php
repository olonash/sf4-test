<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/livre/ajout' => [[['_route' => 'livre_ajout', '_controller' => 'App\\Controller\\LivreController::ajout'], null, null, null, false, false, null]],
        '/livre/liste' => [[['_route' => 'livre_liste', '_controller' => 'App\\Controller\\LivreController::liste'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AuteurController::liste'], null, null, null, false, false, null]],
        '/json' => [[['_route' => 'home_json', '_controller' => 'App\\Controller\\HomeController::homeJson'], null, null, null, false, false, null]],
        '/dynamic' => [[['_route' => 'home_dynamic', '_controller' => 'App\\Controller\\HomeController::homeDynamic'], null, null, null, false, false, null]],
        '/auteur/ajout' => [[['_route' => 'auteur_ajout', '_controller' => 'App\\Controller\\AuteurController::ajout'], null, null, null, false, false, null]],
        '/auteur/ajout-form' => [[['_route' => 'auteur_ajout_form', '_controller' => 'App\\Controller\\AuteurController::ajoutAvecForm'], null, null, null, false, false, null]],
        '/auteur/liste' => [[['_route' => 'auteur_liste', '_controller' => 'App\\Controller\\AuteurController::liste'], null, null, null, false, false, null]],
        '/auteur/service' => [[['_route' => 'auteur_service', '_controller' => 'App\\Controller\\AuteurController::utilisationService'], null, null, null, false, false, null]],
        '/is-granted' => [[['_route' => 'acces_granted', '_controller' => 'App\\Controller\\AdminController::accesAvecRole'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/livre/editer/([^/]++)(*:191)'
                .'|/auteur/(?'
                    .'|editer/([^/]++)(*:225)'
                    .'|supprimer/([^/]++)(*:251)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'livre_editer', '_controller' => 'App\\Controller\\LivreController::editer'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'auteur_editer', '_controller' => 'App\\Controller\\AuteurController::editer'], ['id'], null, null, false, true, null]],
        251 => [
            [['_route' => 'auteur_supprimer', '_controller' => 'App\\Controller\\AuteurController::supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
