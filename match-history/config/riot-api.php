<?php

return [
    'key' => env('RIOT_API_KEY'),

    'region' => env('RIOT_API_REGION', \RiotAPI\Base\Definitions\Region::EUROPE_WEST),

    'cache' => env('RIOT_API_CACHE', true),

    'locale' => env('RIOT_API_LOCALE', 'en_GB'),

    'league' => [
        'ddragon_linking' => env('RIOT_API_LEAGUE_LINKING', true),
        'settings' => [
            //
        ],
    ],

    'ddragon' => [
        'settings' => [
            //
        ],
    ],
];
