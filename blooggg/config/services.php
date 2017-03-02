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
    'client_id' => '1040746146069600',
    'client_secret' => 'b82a83ae344a2e5e2fd00c659b96cef9',
    //'redirect' => 'http://localhost/blooggg/public/home',
    //'redirect'=> 'http://localhost/auth/facebook/callback',
   // 'redirect'=> 'http://localhost:8000/callback',
    'redirect' => 'http://localhost/blooggg/auth/facebook/callback',
    ],
/*
    'facebook' => [
        'client_id' => '409563006060362',
        'client_secret' => '25aa40c646dacb4feaee30a4686ea9e9',
        'redirect' => 'http://localhost:8000/callback',
    ],
*/
    'google' => [
    'client_id' => '531942979192-pab6r0l3jl112rjgtkdms0tfas0qlknf.apps.googleusercontent.com',
    'client_secret' => 'lr4jVCHm38MHaVN24nlxcU8X',
    'redirect' => 'http://localhost/auth/google/callback',
    ],

];
