<?php

return [

    // Supported locales for this application.
    // Key is the URL segment / locale code used by mcamara/laravel-localization.
    'supportedLocales' => [
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB'],
        'ar' => ['name' => 'Arabic',  'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE'],
    ],

    // Show the locale selector in the order listed here. Empty = supportedLocales order.
    'localesOrder' => ['en', 'ar'],

    // Use the browser's Accept-Language header to pick the locale on first visit.
    'useAcceptLanguageHeader' => true,

    // Hide the default locale (en) from the URL: `/about` instead of `/en/about`.
    'hideDefaultLocaleInURL' => false,

    'localesMapping' => [],

    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    'urlsIgnored' => ['/skipped'],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],

];
