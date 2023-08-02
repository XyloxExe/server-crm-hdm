<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_contracts_upload' => [['id'], ['_controller' => 'App\\Controller\\ContractController::updatePdfContract'], [], [['text', '/update_pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/contracts']], [], [], []],
    'getUserMessage' => [['senderId', 'recipientId'], ['_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::getUserMessage'], [], [['variable', '/', '[^/]++', 'recipientId', true], ['text', '/messages'], ['variable', '/', '[^/]++', 'senderId', true], ['text', '/api/users']], [], [], []],
    'sendMessage' => [['senderId', 'recipientId'], ['_api_resource_class' => 'App\\Entity\\Message', '_controller' => 'App\\Controller\\MessageController::sendMessage'], [], [['variable', '/', '[^/]++', 'recipientId', true], ['text', '/messages'], ['variable', '/', '[^/]++', 'senderId', true], ['text', '/api/users']], [], [], []],
    'api_partners_create' => [[], ['_api_resource_class' => 'App\\Entity\\Partner', '_controller' => 'App\\Controller\\PartnerController::addPartner'], [], [['text', '/api/partners']], [], [], []],
    'api_partners_get' => [[], ['_api_resource_class' => 'App\\Entity\\Partner', '_controller' => 'App\\Controller\\PartnerController::getPartner'], [], [['text', '/api/partners']], [], [], []],
    'app_publicuploads_showphotointern' => [['filename'], ['_controller' => 'App\\Controller\\PublicUploadsController::showPhotoIntern'], [], [['variable', '/', '[^/]++', 'filename', true], ['text', '/public/uploads/intern']], [], [], []],
    'app_publicuploads_showpdf' => [['filename'], ['_controller' => 'App\\Controller\\PublicUploadsController::showPdf'], [], [['variable', '/', '[^/]++', 'filename', true], ['text', '/public/uploads/pdf/contract']], [], [], []],
    'api_interns_upload' => [['id'], ['_controller' => 'App\\Controller\\UpdateInternPhotoController::updateInternPhoto'], [], [['text', '/update_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/interns']], [], [], []],
    'api_interns_remove_photo' => [['id'], ['_controller' => 'App\\Controller\\UpdateInternPhotoController::removeInternsPhoto'], [], [['text', '/remove_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/interns']], [], [], []],
    'api_users_create' => [[], ['_api_resource_class' => 'App\\Entity\\User', '_controller' => 'App\\Controller\\UserController::createUserAction'], [], [['text', '/api/users']], [], [], []],
    'Me' => [[], ['_controller' => 'App\\Controller\\UserController::Me'], [], [['text', '/api/user/me']], [], [], []],
    'api_users_get' => [[], ['_api_resource_class' => 'App\\Entity\\User', '_controller' => 'App\\Controller\\UserController::getUsers'], [], [['text', '/api/users']], [], [], []],
    'api_users_upload' => [['id'], ['_controller' => 'App\\Controller\\UserController::updateUserPhoto'], [], [['text', '/update_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'api_users_remove_photo' => [['id'], ['_controller' => 'App\\Controller\\UserController::removeUserPhoto'], [], [['text', '/remove_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'api_login' => [[], [], [], [['text', '/api/login']], [], [], []],
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_/clients/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/clients/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_operation_name' => '_api_/clients/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clients']], [], [], []],
    '_api_/companies/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/companies']], [], [], []],
    '_api_/companies.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/companies']], [], [], []],
    '_api_/companies.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/companies']], [], [], []],
    '_api_/companies/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/companies']], [], [], []],
    '_api_/companies/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/companies']], [], [], []],
    '_api_/companies/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/companies']], [], [], []],
    '_api_/contracts/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contracts']], [], [], []],
    '_api_/contracts/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contracts']], [], [], []],
    '_api_/contracts/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/contracts']], [], [], []],
    '_api_/contracts_post' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts_post'], [], [['text', '/api/contracts']], [], [], []],
    '_api_/contracts/{id}/update_pdf_post' => [['id'], ['_controller' => 'App\\Controller\\ContractController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contract', '_api_operation_name' => '_api_/contracts/{id}/update_pdf_post'], [], [['text', '/update_pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/contracts']], [], [], []],
    '_api_/interns/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/interns']], [], [], []],
    '_api_/interns/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/interns']], [], [], []],
    '_api_/interns/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/interns']], [], [], []],
    '_api_/interns.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/interns']], [], [], []],
    '_api_/interns/{id}/update_photo_post' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Intern', '_api_operation_name' => '_api_/interns/{id}/update_photo_post'], [], [['text', '/update_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/interns']], [], [], []],
    '_api_/users/{senderId}/messages/{recipientId}_get' => [['senderId', 'recipientId'], ['_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_get'], [], [['variable', '/', '[^/]++', 'recipientId', true], ['text', '/messages'], ['variable', '/', '[^/]++', 'senderId', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{senderId}/messages/{recipientId}_post' => [['senderId', 'recipientId'], ['_controller' => 'App\\Controller\\MessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_operation_name' => '_api_/users/{senderId}/messages/{recipientId}_post'], [], [['variable', '/', '[^/]++', 'recipientId', true], ['text', '/messages'], ['variable', '/', '[^/]++', 'senderId', true], ['text', '/api/users']], [], [], []],
    '_api_/partners/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partners']], [], [], []],
    '_api_/partners_get' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners_get'], [], [['text', '/api/partners']], [], [], []],
    '_api_/partners/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partners']], [], [], []],
    '_api_/partners/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partners']], [], [], []],
    '_api_/partners_post' => [[], ['_controller' => 'App\\Controller\\PartnerController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Partner', '_api_operation_name' => '_api_/partners_post'], [], [['text', '/api/partners']], [], [], []],
    '_api_/poles/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/poles']], [], [], []],
    '_api_/poles.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/poles']], [], [], []],
    '_api_/poles.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/poles']], [], [], []],
    '_api_/poles/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/poles']], [], [], []],
    '_api_/poles/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/poles']], [], [], []],
    '_api_/poles/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pole', '_api_operation_name' => '_api_/poles/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/poles']], [], [], []],
    '_api_/projects/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/projects']], [], [], []],
    '_api_/projects.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/projects']], [], [], []],
    '_api_/projects.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/projects']], [], [], []],
    '_api_/projects/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/projects']], [], [], []],
    '_api_/projects/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/projects']], [], [], []],
    '_api_/projects/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Project', '_api_operation_name' => '_api_/projects/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/projects']], [], [], []],
    '_api_/statuses/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/statuses']], [], [], []],
    '_api_/statuses.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/statuses']], [], [], []],
    '_api_/statuses.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/statuses']], [], [], []],
    '_api_/statuses/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/statuses']], [], [], []],
    '_api_/statuses/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/statuses']], [], [], []],
    '_api_/statuses/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Status', '_api_operation_name' => '_api_/statuses/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/statuses']], [], [], []],
    '_api_/status_clients/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/status_clients.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/status_clients.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/status_clients/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/status_clients/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/status_clients/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\StatusClient', '_api_operation_name' => '_api_/status_clients/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/status_clients']], [], [], []],
    '_api_/tasks/{id}.{_format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tasks']], [], [], []],
    '_api_/tasks.{_format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/tasks']], [], [], []],
    '_api_/tasks.{_format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks.{_format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/tasks']], [], [], []],
    '_api_/tasks/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tasks']], [], [], []],
    '_api_/tasks/{id}.{_format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tasks']], [], [], []],
    '_api_/tasks/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/tasks']], [], [], []],
    '_api_/user/me_get' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/user/me_get'], [], [['text', '/api/user/me']], [], [], []],
    '_api_/user/{id}_get' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/user/{id}_get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], [], []],
    '_api_/users_get' => [[], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users_get'], [], [['text', '/api/users']], [], [], []],
    '_api_/users/{id}.{_format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}.{_format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users_post' => [[], ['_controller' => 'App\\Controller\\UserController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users_post'], [], [['text', '/api/users']], [], [], []],
    '_api_/users/{id}/update_photo_post' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}/update_photo_post'], [], [['text', '/update_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_api_/users/{id}/remove_photo_post' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}/remove_photo_post'], [], [['text', '/remove_photo'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'public_uploads' => [['filename'], ['_controller' => 'App\\Controller\\PublicUploadsController::show'], [], [['variable', '/', '[^/]++', 'filename', true], ['text', '/public/uploads']], [], [], []],
    'public_uploads_interns' => [['filename'], ['_controller' => 'App\\Controller\\PublicUploadsController::showPhotoIntern'], [], [['variable', '/', '[^/]++', 'filename', true], ['text', '/public/uploads/intern']], [], [], []],
    'pdf_uploads_contracts' => [['filename'], ['_controller' => 'App\\Controller\\PublicUploadsController::showPdf'], [], [['variable', '/', '[^/]++', 'filename', true], ['text', '/public/uploads/pdf/contract']], [], [], []],
];
