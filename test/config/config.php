<?php
return [
    'doctrine' => [
            'connection' => [
                'odm_default' =>[
                    'connectionString' => 'mongodb://localhost:27017/',
                ]
            ],
            'configuration' => [
                'odm_default' => [
                    'default_db' => 'YAWIK_TEST',
                ]
            ]
    ],
    'modules' => \Core\Bootstrap::generateModuleConfiguration([
        'Core',
        'Cv',
        'Auth',
        'Jobs',
        'Applications',
        'Settings',
        'Orders',
    ]),
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        // What configuration files should be autoloaded
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        ),
    ],
    'core_options' => [
        'logDir' => __DIR__.'/../log',
        'cacheDir' => __DIR__.'/../cache',
        'publicDir' => __DIR__.'/../sandbox/public'
    ],
    'log' => [
        'Core/Log' => [
            'writers' => [
                [
                    'name' => 'stream',
                    'priority' => 1000,
                    'options' => array(
                        'stream' => __DIR__.'/../log/yawik.log',
                    ),
                ]
            ]
        ]
    ],
    "view_manager" => [
        'template_map' => [
            'layout/layout' => getcwd().'/views/layout.phtml',
            "startpage" => __DIR__.'/../sandbox/views/startpage.phtml',
        ],
        'template_path_stack' => [__DIR__.'/../sandbox/views']
    ],
    'view_helper_config' => [
        'asset' => [
            'resource_map' => json_decode(file_get_contents(__DIR__.'/../sandbox/public/build/manifest.json'), true),
        ]
    ]
];
