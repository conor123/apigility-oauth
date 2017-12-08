<?php
return [
    'doctrine' => [
        'driver' => [
            'Super_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Super/src/V1/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Super' => 'Super_driver',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            'super.rest.doctrine.products' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/products[/:products_id]',
                    'defaults' => [
                        'controller' => 'Super\\V1\\Rest\\Products\\Controller',
                    ],
                ],
            ],
            'super.rest.doctrine.oauth-users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth-users[/:oauth_users_id]',
                    'defaults' => [
                        'controller' => 'Super\\V1\\Rest\\OauthUsers\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'super.rest.doctrine.products',
            1 => 'super.rest.doctrine.oauth-users',
        ],
    ],
    'zf-rest' => [
        'Super\\V1\\Rest\\Products\\Controller' => [
            'listener' => \Super\V1\Rest\Products\ProductsResource::class,
            'route_name' => 'super.rest.doctrine.products',
            'route_identifier_name' => 'products_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'products',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Super\V1\Entity\Products::class,
            'collection_class' => \Super\V1\Rest\Products\ProductsCollection::class,
            'service_name' => 'Products',
        ],
        'Super\\V1\\Rest\\OauthUsers\\Controller' => [
            'listener' => \Super\V1\Rest\OauthUsers\OauthUsersResource::class,
            'route_name' => 'super.rest.doctrine.oauth-users',
            'route_identifier_name' => 'oauth_users_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'oauth_users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Super\V1\Entity\OauthUsers::class,
            'collection_class' => \Super\V1\Rest\OauthUsers\OauthUsersCollection::class,
            'service_name' => 'OauthUsers',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Super\\V1\\Rest\\Products\\Controller' => 'HalJson',
            'Super\\V1\\Rest\\OauthUsers\\Controller' => 'HalJson',
        ],
        'accept-whitelist' => [
            'Super\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.super.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Super\\V1\\Rest\\OauthUsers\\Controller' => [
                0 => 'application/vnd.super.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content-type-whitelist' => [
            'Super\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/json',
            ],
            'Super\\V1\\Rest\\OauthUsers\\Controller' => [
                0 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Super\V1\Entity\Products::class => [
                'route_identifier_name' => 'products_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'super.rest.doctrine.products',
                'hydrator' => 'Super\\V1\\Rest\\Products\\ProductsHydrator',
            ],
            \Super\V1\Rest\Products\ProductsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'super.rest.doctrine.products',
                'is_collection' => true,
            ],
            \Super\V1\Entity\OauthUsers::class => [
                'route_identifier_name' => 'oauth_users_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'super.rest.doctrine.oauth-users',
                'hydrator' => 'Super\\V1\\Rest\\OauthUsers\\OauthUsersHydrator',
            ],
            \Super\V1\Rest\OauthUsers\OauthUsersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'super.rest.doctrine.oauth-users',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Super\V1\Rest\Products\ProductsResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Super\\V1\\Rest\\Products\\ProductsHydrator',
            ],
            \Super\V1\Rest\OauthUsers\OauthUsersResource::class => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Super\\V1\\Rest\\OauthUsers\\OauthUsersHydrator',
            ],
        ],
    ],
    'doctrine-hydrator' => [
        'Super\\V1\\Rest\\Products\\ProductsHydrator' => [
            'entity_class' => \Super\V1\Entity\Products::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
        'Super\\V1\\Rest\\OauthUsers\\OauthUsersHydrator' => [
            'entity_class' => \Super\V1\Entity\OauthUsers::class,
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => [],
            'use_generated_hydrator' => true,
        ],
    ],
    'zf-content-validation' => [
        'Super\\V1\\Rest\\Products\\Controller' => [
            'input_filter' => 'Super\\V1\\Rest\\Products\\Validator',
        ],
        'Super\\V1\\Rest\\OauthUsers\\Controller' => [
            'input_filter' => 'Super\\V1\\Rest\\OauthUsers\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Super\\V1\\Rest\\Products\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 100,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'description',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
        ],
        'Super\\V1\\Rest\\OauthUsers\\Validator' => [
            0 => [
                'name' => 'password',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 2000,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'firstName',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'lastName',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => 255,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'Super\\V1\\Rest\\Products\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
