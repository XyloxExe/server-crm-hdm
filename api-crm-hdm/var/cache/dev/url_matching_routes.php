<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/partners' => [
            [['_route' => 'api_partners_create', '_api_resource_class' => 'App\\Entity\\Partner', '_controller' => 'App\\Controller\\PartnerController::addPartner'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_partners_get', '_api_resource_class' => 'App\\Entity\\Partner', '_controller' => 'App\\Controller\\PartnerController::getPartner'], null, ['GET' => 0], null, false, false, null],
            [['_route' => '_api_/partners_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => '_api_/partners_post', '_controller' => 'App\\Controller\\PartnerController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners_post'], null, ['POST' => 0], null, false, false, null],
        ],
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
        '/api/contracts' => [[['_route' => '_api_/contracts_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts_post'], null, ['POST' => 0], null, false, false, null]],
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
                        .'|contracts/([^/]++)/update_pdf(*:47)'
                        .'|users/([^/]++)/(?'
                            .'|messages/([^/]++)(?'
                                .'|(*:92)'
                            .')'
                            .'|update_photo(*:112)'
                            .'|remove_photo(*:132)'
                        .')'
                        .'|interns/([^/]++)/(?'
                            .'|update_photo(*:173)'
                            .'|remove_photo(*:193)'
                        .')'
                        .'|\\.well\\-known/genid/([^/]++)(*:230)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:267)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:298)'
                        .'|c(?'
                            .'|o(?'
                                .'|nt(?'
                                    .'|exts/([^.]+)(?:\\.(jsonld))?(*:346)'
                                    .'|racts/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:391)'
                                        .')'
                                        .'|([^/]++)/update_pdf(*:419)'
                                    .')'
                                .')'
                                .'|mpanies(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:465)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:491)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:529)'
                                    .')'
                                .')'
                            .')'
                            .'|lients(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:575)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:601)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:639)'
                                .')'
                            .')'
                        .')'
                        .'|interns(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:689)'
                            .')'
                            .'|(?:\\.([^/]++))?(*:713)'
                            .'|/([^/]++)/update_photo(*:743)'
                        .')'
                        .'|user(?'
                            .'|s/(?'
                                .'|([^/]++)/messages/([^/]++)(?'
                                    .'|(*:793)'
                                .')'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:830)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|update_photo(*:863)'
                                    .'|remove_photo(*:883)'
                                .')'
                            .')'
                            .'|/([^/]++)(*:902)'
                        .')'
                        .'|p(?'
                            .'|artners/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:951)'
                            .')'
                            .'|oles(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:993)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1019)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1058)'
                                .')'
                            .')'
                            .'|rojects(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1105)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1132)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1171)'
                                .')'
                            .')'
                        .')'
                        .'|status(?'
                            .'|es(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1223)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1250)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1289)'
                                .')'
                            .')'
                            .'|_clients(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1337)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1364)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1403)'
                                .')'
                            .')'
                        .')'
                        .'|tasks(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1449)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1476)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1515)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/public/uploads/(?'
                    .'|intern/([^/]++)(*:1562)'
                    .'|pdf/contract/([^/]++)(*:1592)'
                    .'|([^/]++)(*:1609)'
                    .'|intern/([^/]++)(*:1633)'
                    .'|pdf/contract/([^/]++)(*:1663)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1704)'
                    .'|wdt/([^/]++)(*:1725)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1772)'
                            .'|router(*:1787)'
                            .'|exception(?'
                                .'|(*:1808)'
                                .'|\\.css(*:1822)'
                            .')'
                        .')'
                        .'|(*:1833)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'api_contracts_upload', '_controller' => 'App\\Controller\\ContractController::updatePdfContract'], ['id'], ['POST' => 0], null, false, false, null]],
        92 => [
            [['_route' => 'getUserMessage', '_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::getUserMessage'], ['senderId', 'recipientId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'sendMessage', '_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], ['senderId', 'recipientId'], ['POST' => 0], null, false, true, null],
        ],
        112 => [[['_route' => 'api_users_upload', '_controller' => 'App\\Controller\\UserController::updateUserPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        132 => [[['_route' => 'api_users_remove_photo', '_controller' => 'App\\Controller\\UserController::removeUserPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        173 => [[['_route' => 'api_interns_upload', '_controller' => 'App\\Controller\\UpdateInternPhotoController::updateInternPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        193 => [[['_route' => 'api_interns_remove_photo', '_controller' => 'App\\Controller\\UpdateInternPhotoController::removeInternsPhoto'], ['id'], ['POST' => 0], null, false, false, null]],
        230 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        298 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        346 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        391 => [
            [['_route' => '_api_/contracts/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contracts/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/contracts/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        419 => [[['_route' => '_api_/contracts/{id}/update_pdf_post', '_controller' => 'App\\Controller\\ContractController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}/update_pdf_post'], ['id'], ['POST' => 0], null, false, false, null]],
        465 => [[['_route' => '_api_/companies/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        491 => [
            [['_route' => '_api_/companies.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/companies.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        529 => [
            [['_route' => '_api_/companies/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/companies/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/companies/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        575 => [[['_route' => '_api_/clients/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        601 => [
            [['_route' => '_api_/clients.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/clients.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        639 => [
            [['_route' => '_api_/clients/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/clients/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        689 => [
            [['_route' => '_api_/interns/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/interns/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/interns/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        713 => [[['_route' => '_api_/interns.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        743 => [[['_route' => '_api_/interns/{id}/update_photo_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}/update_photo_post'], ['id'], ['POST' => 0], null, false, false, null]],
        793 => [
            [['_route' => '_api_/users/{senderId}/messages/{recipientId}_get', '_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_get'], ['senderId', 'recipientId'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{senderId}/messages/{recipientId}_post', '_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_post'], ['senderId', 'recipientId'], ['POST' => 0], null, false, true, null],
        ],
        830 => [
            [['_route' => '_api_/users/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        863 => [[['_route' => '_api_/users/{id}/update_photo_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}/update_photo_post'], ['id'], ['POST' => 0], null, false, false, null]],
        883 => [[['_route' => '_api_/users/{id}/remove_photo_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}/remove_photo_post'], ['id'], ['POST' => 0], null, false, false, null]],
        902 => [[['_route' => '_api_/user/{id}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/user/{id}_get'], ['id'], ['GET' => 0], null, false, true, null]],
        951 => [
            [['_route' => '_api_/partners/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/partners/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/partners/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        993 => [[['_route' => '_api_/poles/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1019 => [
            [['_route' => '_api_/poles.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/poles.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1058 => [
            [['_route' => '_api_/poles/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/poles/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/poles/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1105 => [[['_route' => '_api_/projects/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1132 => [
            [['_route' => '_api_/projects.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/projects.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1171 => [
            [['_route' => '_api_/projects/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/projects/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/projects/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1223 => [[['_route' => '_api_/statuses/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1250 => [
            [['_route' => '_api_/statuses.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/statuses.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1289 => [
            [['_route' => '_api_/statuses/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/statuses/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/statuses/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1337 => [[['_route' => '_api_/status_clients/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1364 => [
            [['_route' => '_api_/status_clients.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/status_clients.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1403 => [
            [['_route' => '_api_/status_clients/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/status_clients/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/status_clients/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1449 => [[['_route' => '_api_/tasks/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1476 => [
            [['_route' => '_api_/tasks.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tasks.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1515 => [
            [['_route' => '_api_/tasks/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/tasks/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/tasks/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1562 => [[['_route' => 'app_publicuploads_showphotointern', '_controller' => 'App\\Controller\\PublicUploadsController::showPhotoIntern'], ['filename'], null, null, false, true, null]],
        1592 => [[['_route' => 'app_publicuploads_showpdf', '_controller' => 'App\\Controller\\PublicUploadsController::showPdf'], ['filename'], null, null, false, true, null]],
        1609 => [[['_route' => 'public_uploads', '_controller' => 'App\\Controller\\PublicUploadsController::show'], ['filename'], null, null, false, true, null]],
        1633 => [[['_route' => 'public_uploads_interns', '_controller' => 'App\\Controller\\PublicUploadsController::showPhotoIntern'], ['filename'], null, null, false, true, null]],
        1663 => [[['_route' => 'pdf_uploads_contracts', '_controller' => 'App\\Controller\\PublicUploadsController::showPdf'], ['filename'], null, null, false, true, null]],
        1704 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1725 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1772 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1787 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1808 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1822 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1833 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
