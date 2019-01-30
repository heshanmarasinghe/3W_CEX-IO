<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '294250821283249',
        'client_secret' => '69343cd9875f1e7f0852c8fb9bcfbacc',
        'redirect' => 'http://localhost:8000/callback'
    ],


    'google' => [
        'client_id' => '27034210086-um5lrd33ulg207bqv0o40mvptlqno6mv.apps.googleusercontent.com',
        'client_secret' => '-8Yh7BBWbfl7XLftdJeFGksP',
        'redirect' => 'http://localhost:8000/callback'
    ],

    'github' => [
        'client_id' => '1116352188628863292c',
        'client_secret' => '87e5eea9d8fb84a44d259847adc32093116c5eaf',
        'redirect' => 'http://localhost:8000/callback'
    ],

];
