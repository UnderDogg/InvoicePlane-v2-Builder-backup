<?php

return [
    'role_structure' => [
        'owner' => [
            'companies' => 'c,p,m,x,r,u,d',
            'ownerpanel' => 'c,p,m,x,r,u,d',
            'adminpanel' => 'c,p,m,x,r,u,d',
            'controlpanel' => 'c,p,m,x,r,u,d',
            'staffpanel' => 'c,p,m,x,r,u,d',
            'acl' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'superadministrator' => [
            'companies' => 'c,p,m,x,r,u,d',
            'ownerpanel' => 'c,p,m,x,r,u,d',
            'adminpanel' => 'c,p,m,x,r,u,d',
            'controlpanel' => 'c,p,m,x,r,u,d',
            'staffpanel' => 'c,p,m,x,r,u,d',
            'acl' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'adminpanel' => 'c,p,m,x,r,u,d',
            'controlpanel' => 'c,p,m,x,r,u,d',
            'staffpanel' => 'c,p,m,x,r,u,d',
            'acl' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'manager' => [
            'controlpanel' => 'c,p,m,x,r,u,d',
            'staffpanel' => 'c,p,m,x,r,u,d',
            'acl' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'teamleader' => [
            'controlpanel' => 'c,p,m,x,r,u,d',
            'staffpanel' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'staff' => [
            'staffpanel' => 'c,p,m,x,r,u,d',
            'users' => 'c,p,m,x,r,u,d',
            'profile' => 'r,u'
        ],
        'clientmanager' => [
            'profile' => 'r,u'
        ],
        'client' => [
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'p' => 'copy',
        'm' => 'import',
        'x' => 'export',
        'u' => 'update',
        'd' => 'delete'
    ]
];
