<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => base_path('Builder/database/migrations/'),

        'model'             => base_path('Builder/Models/'),

        'datatables'        => base_path('Builder/DataTables/'),

        'repository'        => base_path('Builder/Repositories/'),

        'routes'            => base_path('Builder/routes/web.php'),

        'api_routes'        => base_path('Builder/routes/api.php'),

        'request'           => base_path('Builder/Http/Requests/'),

        'api_request'       => base_path('Builder/Http/Requests/API/'),

        'controller'        => base_path('Builder/Http/Controllers/'),

        'api_controller'    => base_path('Builder/Http/Controllers/API/'),

        'test_trait'        => base_path('Builder/tests/traits/'),

        'repository_test'   => base_path('Builder/tests/'),

        'api_test'          => base_path('Builder/tests/'),

        'views'             => base_path('Builder/resources/views/'),

        'schema_files'      => base_path('Builder/resources/model_schemas/'),

        'templates_dir'     => base_path('Builder/resources/infyom/infyom-generator-templates/'),

        'modelJs'           => base_path('Builder/resources/assets/js/models/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'Modules\Core\Models',
        'datatables'        => 'Modules\Core\DataTables',
        'repository'        => 'Modules\Core\Repositories',
        'controller'        => 'Modules\Core\Http\Controllers',
        'api_controller'    => 'Modules\Core\Http\Controllers\API',
        'request'           => 'Modules\Core\Http\Requests',
        'api_request'       => 'Modules\Core\Http\Requests\API',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates'         => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Eloquent',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    'api_version' => 'v1',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'softDelete' => true,

        'tables_searchable_default' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => 'admincp',  // using admin will create route('admin.?.index') type routes

        'path' => '',

        'view' => 'admincp',  // using backend will create return view('backend.?.index') type the backend views directory

        'public' => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Add-Ons
    |--------------------------------------------------------------------------
    |
    */

    'add_on' => [

        'swagger'       => false,

        'tests'         => false,

        'datatables'    => true,

        'menu'          => [

            'enabled'       => true,

            'menu_file'     => 'layouts/menu.blade.php',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Save model files to `App/Models` when use `--prefix`. see #208
    |--------------------------------------------------------------------------
    |
    */
    'ignore_model_prefix' => false,

];
