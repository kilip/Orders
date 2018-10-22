<?php
return [
    'doctrine' => [
            'connection' => [
                'odm_default' =>[
                    'connectionString' => 'mongodb://localhost:27017/YAWIK_TEST',
                    'dbname' => 'YAWIK_TEST',
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
        'Organizations',
        'Orders',
    ]),
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        // What configuration files should be autoloaded
        'config_glob_paths' => array(
            __DIR__.'/autoload/{,*.}{global,local}.php',
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
];
