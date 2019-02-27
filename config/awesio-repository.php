<?php

return [

    /*
    |--------------------------------------------------------------------------
    | $repository->smartPaginate() related parameters
    |--------------------------------------------------------------------------
    */
    'smart_paginate' => [
        'request_parameter' => 'limit',
        'default_limit' => 10,
        'max_limit' => 100,
    ]
    
];
