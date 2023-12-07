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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/centrale' => [[['_route' => 'app_centrale_index', '_controller' => 'App\\Controller\\CentraleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/centrale/new' => [[['_route' => 'app_centrale_new', '_controller' => 'App\\Controller\\CentraleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commune' => [[['_route' => 'app_commune_index', '_controller' => 'App\\Controller\\CommuneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commune/new' => [[['_route' => 'app_commune_new', '_controller' => 'App\\Controller\\CommuneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/parametre' => [[['_route' => 'app_parametre', '_controller' => 'App\\Controller\\ParametreController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/services/new' => [[['_route' => 'app_services_new', '_controller' => 'App\\Controller\\ServicesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|entrale/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|ommune/([^/]++)(?'
                        .'|(*:241)'
                        .'|/edit(*:254)'
                        .'|(*:262)'
                    .')'
                .')'
                .'|/services/([^/]++)(?'
                    .'|(*:293)'
                    .'|/edit(*:306)'
                    .'|(*:314)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:347)'
                    .'|/edit(*:360)'
                    .'|(*:368)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'app_centrale_show', '_controller' => 'App\\Controller\\CentraleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_centrale_edit', '_controller' => 'App\\Controller\\CentraleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'app_centrale_delete', '_controller' => 'App\\Controller\\CentraleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_commune_show', '_controller' => 'App\\Controller\\CommuneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_commune_edit', '_controller' => 'App\\Controller\\CommuneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'app_commune_delete', '_controller' => 'App\\Controller\\CommuneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_services_show', '_controller' => 'App\\Controller\\ServicesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_services_edit', '_controller' => 'App\\Controller\\ServicesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'app_services_delete', '_controller' => 'App\\Controller\\ServicesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
