<?php
$manifestFile = __DIR__.'/../../sandbox/public/build/manifest.json';
if (!is_file($manifestFile)) {
    file_put_contents($manifestFile, '{}', LOCK_EX);
}
return [
    'doctrine' =>[
        'connection' =>[
            'odm_default' =>[
                'connectionString' => 'mongodb://localhost:27017/YAWIK_TEST',
            ]
        ],
        'configuration' => [
            'odm_default' => [
                'default_db'    => 'YAWIK_TEST',
                'proxy_dir'     => __DIR__.'/../../cache/DoctrineMongoODMModule/Proxy',
                'hydrator_dir'  => __DIR__.'/../../cache/DoctrineMongoODMModule/Hydrator',
            ]
        ],
    ],
    'core_options' => [
        'system_message_email' => 'me@itstoni.com',
    ],
    'view_helper_config' => [
        'asset' => [
            'resource_map' => json_decode(file_get_contents($manifestFile), true),
        ]
    ]
];
