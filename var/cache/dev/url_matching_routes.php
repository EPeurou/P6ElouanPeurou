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
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\ResetController::resetPassword'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reset/resetemail' => [[['_route' => 'resetemail', '_controller' => 'App\\Controller\\ResetController::resetemail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tricks' => [[['_route' => 'tricks_index', '_controller' => 'App\\Controller\\TricksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tricks/new' => [[['_route' => 'tricks_new', '_controller' => 'App\\Controller\\TricksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/emailCheck' => [[['_route' => 'emailCheck', '_controller' => 'App\\Controller\\UserController::emailCheck'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'main', '_controller' => 'App\\Controller\\homeController::homepage'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\homeController::homepage'], null, null, null, false, false, null],
        ],
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
                .'|/comment/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/tricks/([^/]++)(?'
                    .'|(*:237)'
                    .'|/(?'
                        .'|ajaxsupprm(?'
                            .'|ainimage(*:270)'
                            .'|edia(*:282)'
                        .')'
                        .'|edit(*:295)'
                    .')'
                    .'|(*:304)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:330)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:366)'
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
        188 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'tricks_show', '_controller' => 'App\\Controller\\TricksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'ajaxMainImage', '_controller' => 'App\\Controller\\TricksController::ajaxSupprMainImage'], ['id'], null, null, false, false, null]],
        282 => [[['_route' => 'ajax', '_controller' => 'App\\Controller\\TricksController::ajaxSupprMedia'], ['id'], null, null, false, false, null]],
        295 => [[['_route' => 'tricks_edit', '_controller' => 'App\\Controller\\TricksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'tricks_delete', '_controller' => 'App\\Controller\\TricksController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        330 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        366 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
