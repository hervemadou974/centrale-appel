<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_centrale_index' => [[], ['_controller' => 'App\\Controller\\CentraleController::index'], [], [['text', '/centrale/']], [], [], []],
    'app_centrale_new' => [[], ['_controller' => 'App\\Controller\\CentraleController::new'], [], [['text', '/centrale/new']], [], [], []],
    'app_centrale_show' => [['id'], ['_controller' => 'App\\Controller\\CentraleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/centrale']], [], [], []],
    'app_centrale_edit' => [['id'], ['_controller' => 'App\\Controller\\CentraleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/centrale']], [], [], []],
    'app_centrale_delete' => [['id'], ['_controller' => 'App\\Controller\\CentraleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/centrale']], [], [], []],
    'app_commune_index' => [[], ['_controller' => 'App\\Controller\\CommuneController::index'], [], [['text', '/commune/']], [], [], []],
    'app_commune_new' => [[], ['_controller' => 'App\\Controller\\CommuneController::new'], [], [['text', '/commune/new']], [], [], []],
    'app_commune_show' => [['id'], ['_controller' => 'App\\Controller\\CommuneController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commune']], [], [], []],
    'app_commune_edit' => [['id'], ['_controller' => 'App\\Controller\\CommuneController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commune']], [], [], []],
    'app_commune_delete' => [['id'], ['_controller' => 'App\\Controller\\CommuneController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commune']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_parametre' => [[], ['_controller' => 'App\\Controller\\ParametreController::index'], [], [['text', '/parametre']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_services_index' => [[], ['_controller' => 'App\\Controller\\ServicesController::index'], [], [['text', '/services/']], [], [], []],
    'app_services_new' => [[], ['_controller' => 'App\\Controller\\ServicesController::new'], [], [['text', '/services/new']], [], [], []],
    'app_services_show' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/services']], [], [], []],
    'app_services_edit' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/services']], [], [], []],
    'app_services_delete' => [['id'], ['_controller' => 'App\\Controller\\ServicesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/services']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
];
