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
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/choix' => [[['_route' => 'choix', '_controller' => 'App\\Controller\\ChoixController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/d' => [[['_route' => 'd_index', '_controller' => 'App\\Controller\\DController::index'], null, ['GET' => 0], null, true, false, null]],
        '/d/new' => [[['_route' => 'd_new', '_controller' => 'App\\Controller\\DController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/devis' => [[['_route' => 'devis', '_controller' => 'App\\Controller\\DevisController::index'], null, null, null, false, false, null]],
        '/haie' => [[['_route' => 'haie_index', '_controller' => 'App\\Controller\\HaieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/haie/new' => [[['_route' => 'haie_new', '_controller' => 'App\\Controller\\HaieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/mesure' => [[['_route' => 'mesure', '_controller' => 'App\\Controller\\MesureController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/d/([^/]++)(?'
                    .'|(*:231)'
                    .'|/edit(*:244)'
                    .'|(*:252)'
                .')'
                .'|/haie/([^/]++)(?'
                    .'|(*:278)'
                    .'|/edit(*:291)'
                    .'|(*:299)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        187 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        231 => [[['_route' => 'd_show', '_controller' => 'App\\Controller\\DController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'd_edit', '_controller' => 'App\\Controller\\DController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'd_delete', '_controller' => 'App\\Controller\\DController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'haie_show', '_controller' => 'App\\Controller\\HaieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        291 => [[['_route' => 'haie_edit', '_controller' => 'App\\Controller\\HaieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [
            [['_route' => 'haie_delete', '_controller' => 'App\\Controller\\HaieController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
