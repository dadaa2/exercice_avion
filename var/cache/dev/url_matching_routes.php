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
        '/avion' => [[['_route' => 'app_avion_index', '_controller' => 'App\\Controller\\AvionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avion/new' => [[['_route' => 'app_avion_new', '_controller' => 'App\\Controller\\AvionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/companies' => [[['_route' => 'app_companiesapp_companies', '_controller' => 'App\\Controller\\CompaniesController::index'], null, null, null, true, false, null]],
        '/companies/add' => [[['_route' => 'app_companies_add', '_controller' => 'App\\Controller\\CompaniesController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_intervention', '_controller' => 'App\\Controller\\InterventionController::index'], null, null, null, false, false, null]],
        '/liste-intervention' => [[['_route' => 'liste_intervention', '_controller' => 'App\\Controller\\InterventionController::liste'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/statues' => [[['_route' => 'app_statues_index', '_controller' => 'App\\Controller\\StatuesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/statues/new' => [[['_route' => 'app_statues_new', '_controller' => 'App\\Controller\\StatuesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:227)'
                    .'|vion/([^/]++)(?'
                        .'|(*:251)'
                        .'|/edit(*:264)'
                        .'|(*:272)'
                    .')'
                .')'
                .'|/companies/(?'
                    .'|edit/([^/]++)(*:309)'
                    .'|delete/([^/]++)(*:332)'
                .')'
                .'|/intervention/([^/]++)(?'
                    .'|(*:366)'
                    .'|/(?'
                        .'|delete(*:384)'
                        .'|update(*:398)'
                    .')'
                .')'
                .'|/statues/([^/]++)(?'
                    .'|(*:428)'
                    .'|/edit(*:441)'
                    .'|(*:449)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        251 => [[['_route' => 'app_avion_show', '_controller' => 'App\\Controller\\AvionController::show'], ['immatriculation'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_avion_edit', '_controller' => 'App\\Controller\\AvionController::edit'], ['immatriculation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'app_avion_delete', '_controller' => 'App\\Controller\\AvionController::delete'], ['immatriculation'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_companies_edit', '_controller' => 'App\\Controller\\CompaniesController::edit'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'app_companies_delete', '_controller' => 'App\\Controller\\CompaniesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'intervention', '_controller' => 'App\\Controller\\InterventionController::interventionDetail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        384 => [[['_route' => 'intervention_delete', '_controller' => 'App\\Controller\\InterventionController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        398 => [[['_route' => 'intervention_update', '_controller' => 'App\\Controller\\InterventionController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        428 => [[['_route' => 'app_statues_show', '_controller' => 'App\\Controller\\StatuesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_statues_edit', '_controller' => 'App\\Controller\\StatuesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [
            [['_route' => 'app_statues_delete', '_controller' => 'App\\Controller\\StatuesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
