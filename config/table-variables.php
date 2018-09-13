<?php

use App\IndustrySector;
use App\User;

return [
    /*
     * Users table used to store users
     */
    'users_table' => 'users',

    'user' => User::class,

    /*
     * Industry Sector table used to store industry sector
     */
    'industry_sector_table' => 'industry_sectors',

    'industry_sector' => IndustrySector::class,
];