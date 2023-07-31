<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/users' => [
            [['_route' => 'api_users_create', '_api_resource_class' => 'App\\Entity\\User', '_controller' => 'App\\Controller\\UserController::createUserAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get', '_api_resource_class' => 'App\\Entity\\User', '_controller' => 'App\\Controller\\UserController::getUsers'], null, ['GET' => 0], null, false, false, null],
            [['_route' => '_api_/users_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => '_api_/users_post', '_controller' => 'App\\Controller\\UserController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/user/me' => [
            [['_route' => 'Me', '_controller' => 'App\\Controller\\UserController::Me'], null, ['GET' => 0], null, false, false, null],
            [['_route' => '_api_/user/me_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/user/me_get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|users/([^/]++)/(?'
                            .'|messages/([^/]++)(?'
                                .'|(*:56)'
                            .')'
                            .'|update_photo(*:76)'
                            .'|remove_photo(*:95)'
                        .')'
                        .'|interns/([^/]++)/(?'
                            .'|update_photo(*:135)'
                            .'|remove_photo(*:155)'
                        .')'
                        .'|\\.well\\-known/genid/([^/]++)(*:192)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:229)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:260)'
                        .'|c(?'
                            .'|ont(?'
                                .'|exts/([^.]+)(?:\\.(jsonld))?(*:305)'
                                .'|racts(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:347)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:373)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:411)'
                                    .')'
                                .')'
                            .')'
                            .'|lients(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:457)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:483)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:521)'
                                .')'
                            .')'
                        .')'
                        .'|interns(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:571)'
                            .')'
                            .'|(?:\\.([^/]++))?(*:595)'
                            .'|/([^/]++)/update_photo(*:625)'
                        .')'
                        .'|user(?'
                            .'|s/(?'
                                .'|([^/]++)/messages/([^/]++)(?'
                                    .'|(*:675)'
                                .')'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:712)'
                                .')'
                                .'|([^/]++)/update_photo(*:742)'
                            .')'
                            .'|/([^/]++)(*:760)'
                        .')'
                        .'|p(?'
                            .'|oles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:806)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:832)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:870)'
                                .')'
                            .')'
                            .'|rojects(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:916)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:942)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:980)'
                                .')'
                            .')'
                        .')'
                        .'|statuses(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1028)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1055)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1094)'
                            .')'
                        .')'
                        .'|tasks(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1139)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1166)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1205)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/public/uploads/(?'
                    .'|intern/([^/]++)(*:1252)'
                    .'|([^/]++)(*:1269)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1310)'
                    .'|wdt/([^/]++)(*:1331)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1378)'
                            .'|router(*:1393)'
                            .'|exception(?'
                                .'|(*:1414)'
                                .'|\\.css(*:1428)'
                            .')'
                        .')'
                        .'|(*:1439)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        56 => [
            [['_route' => 'getUserMessage', '_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::getUserMessage'], ['senderId', 'recipientId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sendMessage', '_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], ['senderId', 'recipientId'], ['POST' => 0], null, false, true, null],
        ],
        76 => [[['_route' => 'api_users_upload', '_controller' => 'App\\Controller\\UserController::updateUserPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        95 => [[['_route' => 'api_users_remove_photo', '_controller' => 'App\\Controller\\UserController::removeUserPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        135 => [[['_route' => 'api_interns_upload', '_controller' => 'App\\Controller\\UpdateInternPhotoController::updateInternPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        155 => [[['_route' => 'api_interns_remove_photo', '_controller' => 'App\\Controller\\UpdateInternPhotoController::removeInternsPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        192 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        260 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        305 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        347 => [[['_route' => '_api_/contracts/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        373 => [
            [['_route' => '_api_/contracts.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contracts.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        411 => [
            [['_route' => '_api_/contracts/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/contracts/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/contracts/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        457 => [[['_route' => '_api_/clients/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        483 => [
            [['_route' => '_api_/clients.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clients.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        521 => [
            [['_route' => '_api_/clients/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        571 => [
            [['_route' => '_api_/interns/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/interns/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/interns/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        595 => [[['_route' => '_api_/interns.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        625 => [[['_route' => '_api_/interns/{id}/update_photo_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}/update_photo_post'], ['id'], ['POST' => 0], null, false, false, null]],
        675 => [
            [['_route' => '_api_/users/{senderId}/messages/{recipientId}_get', '_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_get'], ['senderId', 'recipientId'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{senderId}/messages/{recipientId}_post', '_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_post'], ['senderId', 'recipientId'], ['POST' => 0], null, false, true, null],
        ],
        712 => [
            [['_route' => '_api_/users/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        742 => [[['_route' => '_api_/users/{id}/update_photo_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}/update_photo_post'], ['id'], ['POST' => 0], null, false, false, null]],
        760 => [[['_route' => '_api_/user/{id}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/user/{id}_get'], ['id'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => '_api_/poles/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        832 => [
            [['_route' => '_api_/poles.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/poles.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        870 => [
            [['_route' => '_api_/poles/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/poles/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/poles/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        916 => [[['_route' => '_api_/projects/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        942 => [
            [['_route' => '_api_/projects.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/projects.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        980 => [
            [['_route' => '_api_/projects/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/projects/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/projects/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1028 => [[['_route' => '_api_/statuses/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1055 => [
            [['_route' => '_api_/statuses.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/statuses.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1094 => [
            [['_route' => '_api_/statuses/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/statuses/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/statuses/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1139 => [[['_route' => '_api_/tasks/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1166 => [
            [['_route' => '_api_/tasks.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tasks.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1205 => [
            [['_route' => '_api_/tasks/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/tasks/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/tasks/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1252 => [[['_route' => 'app_publicuploads_showphotointern', '_controller' => 'App\\Controller\\PublicUploadsController::showPhotoIntern'], ['filename'], null, null, false, true, null]],
        1269 => [[['_route' => 'public_uploads', '_controller' => 'App\\Controller\\PublicUploadsController::show'], ['filename'], null, null, false, true, null]],
        1310 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1331 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1378 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1393 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1414 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1428 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1439 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
