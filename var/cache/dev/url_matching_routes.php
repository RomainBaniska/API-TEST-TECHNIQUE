<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/contacts' => [
            [['_route' => 'contacts', '_controller' => 'App\\Controller\\ContactController::getAllContacts'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'createContact', '_controller' => 'App\\Controller\\ContactController::createBook'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/contacts/([^/]++)(?'
                    .'|(*:67)'
                    .'|/toggle(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [
            [['_route' => 'detailContact', '_controller' => 'App\\Controller\\ContactController::getDetailContacts'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'deleteContact', '_controller' => 'App\\Controller\\ContactController::deleteContact'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'updateContact', '_controller' => 'App\\Controller\\ContactController::updateContact'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        81 => [
            [['_route' => 'toggleContact', '_controller' => 'App\\Controller\\ContactController::toggleContact'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
