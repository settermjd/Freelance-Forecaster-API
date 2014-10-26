<?php
return array(
    'router' => array(
        'routes' => array(
            'freelance-forecaster.rest.article' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/article[/:article_id]',
                    'defaults' => array(
                        'controller' => 'FreelanceForecaster\\V1\\Rest\\Article\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'freelance-forecaster.rest.article',
        ),
    ),
    'zf-rest' => array(
        'FreelanceForecaster\\V1\\Rest\\Article\\Controller' => array(
            'listener' => 'FreelanceForecaster\\V1\\Rest\\Article\\ArticleResource',
            'route_name' => 'freelance-forecaster.rest.article',
            'route_identifier_name' => 'article_id',
            'collection_name' => 'article',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'FreelanceForecaster\\V1\\Rest\\Article\\ArticleEntity',
            'collection_class' => 'FreelanceForecaster\\V1\\Rest\\Article\\ArticleCollection',
            'service_name' => 'Article',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'FreelanceForecaster\\V1\\Rest\\Article\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'FreelanceForecaster\\V1\\Rest\\Article\\Controller' => array(
                0 => 'application/vnd.freelance-forecaster.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'FreelanceForecaster\\V1\\Rest\\Article\\Controller' => array(
                0 => 'application/vnd.freelance-forecaster.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'FreelanceForecaster\\V1\\Rest\\Article\\ArticleEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'freelance-forecaster.rest.article',
                'route_identifier_name' => 'article_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'FreelanceForecaster\\V1\\Rest\\Article\\ArticleCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'freelance-forecaster.rest.article',
                'route_identifier_name' => 'article_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(),
    ),
    'service_manager' => array(
        'factories' => array(
            'FreelanceForecaster\\V1\\Rest\\Article\\ArticleResource' => 'FreelanceForecaster\\V1\\Rest\\Article\\ArticleResourceFactory',
        ),
    ),
);
