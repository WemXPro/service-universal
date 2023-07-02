<?php

return [

    'name' => 'Universal Module',
    'icon' => '',
    'author' => 'WemX',
    'version' => '1.0.0',
    'wemx_version' => '1.0.0',

    'service' => \App\Services\Universal\Service::class,
    'controller' => \App\Services\Universal\Http\Controllers\UniversalController::class,
    
    'handlers' => [
        'new_order' => \App\Services\Universal\Handlers\NewOrder::class,
        'renewal' => \App\Services\Universal\Handlers\Renewal::class,
        'cancel' => \App\Services\Universal\Handlers\Cancel::class,
    ],

];
