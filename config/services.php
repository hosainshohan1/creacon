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

    'github' => [
      'client_id' => 'ff282f5521b6d1fc8e4b',
      'client_secret' => '2cb7e19f1f91b1e19342d86d193e1558d7bb8c60',
      'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],

    'google' => [
      'client_id' => '158803128230-igkm8njj97771i7gs5igi7u3reuvispm.apps.googleusercontent.com',
      'client_secret' => 'QvNXJtZ8NLW_Y0T26dbHmVSK',
      'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
