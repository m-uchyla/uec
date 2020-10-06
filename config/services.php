<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'toornament_api' => [
        'clientID' => env('CLIENT_ID', 'e61fd46a3437441ae2ed72085mqhuwuo8gsggggskgk4og8owcckkckgcskws4kkk0000ocws8'),
        'clientSecret' => env('CLIENT_SECRET', '1l80dg7iyxs0s8ggocwg80s4k8gwcscc0k4gog04w4gs4gw40o'),
        'apiKey' => env('API_KEY', 'QxqirJ6zBGM45sI4xZo1X5X9_XTB4Q_54P1TyixXl2U'),
    ]

];
