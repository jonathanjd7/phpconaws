<?php

// config/cors.php



return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],



    'allowed_methods' => ['*'],



    'allowed_origins' => ['*'], // En producción cambia a dominios específicos



    'allowed_origins_patterns' => [],



    'allowed_headers' => ['*'],



    'exposed_headers' => [],



    'max_age' => 0,



    'supports_credentials' => false,

];

 