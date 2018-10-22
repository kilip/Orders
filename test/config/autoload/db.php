<?php
$foo = $bar;
return array(
    'doctrine' =>
        array(
            'connection' =>
                array(
                    'odm_default' =>
                        array(
                            'connectionString' => 'mongodb://localhost:27017/',
                        ),
                ),
            'configuration' =>
                array(
                    'odm_default' =>
                        array(
                            'default_db' => 'YAWIK_TEST',
                        ),
                ),
        ),
    'core_options' =>
        array(
            'system_message_email' => 'me@itstoni.com',
        ),
);
