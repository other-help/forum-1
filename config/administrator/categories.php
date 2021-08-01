<?php

use App\Models\Category;

return [
    'title'   => 'Classification',
    'single'  => 'Classification',
    'model'   => Category::class,

    // 对 CRUD 动作的单独权限控制，其他动作不指定默认为通过
    'action_permissions' => [
        // 删除权限控制
        'delete' => function () {
            // 只有站长才能删除话题分类
            return Auth::user()->hasRole('Founder');
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => 'Nom',
            'sortable' => false,
        ],
        'description' => [
            'title'    => 'description',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'operation',
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'name' => [
            'title' => 'Nom',
        ],
        'description' => [
            'title' => 'description',
            'type'  => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '分类 ID',
        ],
        'name' => [
            'title' => 'Nom',
        ],
        'description' => [
            'title' => 'description',
        ],
    ],
    'rules'   => [
        'name' => 'required|min:1|unique:categories'
    ],
    'messages' => [
        'name.unique'   => 'Le nom de la catégorie est dupliqué dans la base de données, veuillez choisir un autre nom.',
        'name.required' => 'Veuillez vous assurer que le nom comporte au moins un caractère',
    ],
];
