<?php

use App\Models\Link;

return [
    'title'   => 'Recommandation de ressources',
    'single'  => 'Recommandation de ressources',

    'model'   => Link::class,

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理资源推荐链接
        return Auth::user()->hasRole('Founder');
    },

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => 'Nom',
            'sortable' => false,
        ],
        'link' => [
            'title'    => 'lien',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'Operation',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'title' => [
            'title'    => 'Nom',
        ],
        'link' => [
            'title'    => 'Lien',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title' => 'Nom',
        ],
    ],
];
