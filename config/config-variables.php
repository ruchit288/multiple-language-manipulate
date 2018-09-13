<?php

return [
    'default_db_host'             => 'localhost',
    'default_db_port'             => 3306,
    'default_db_username'         => 'root',
    'default_lang'                => 'en',

    //field post fix which denote language specific data field (key=> table name/module identification,value => field name)
    //Key is same as the table name which is define in config-variable file
    'field_post_fix' => [
        'industry_sector'     => 'industry_sector_name',
    ],
];