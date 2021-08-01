<?php

use Spatie\Permission\Models\Role;

return [
    'title'   => 'Rôle',
    'single'  => 'Rôle',
    'model'   => Role::class,

    'permission'=> function()
    {
        return Auth::user()->can('manage_users');
    },

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => 'Logo'
        ],
        'permissions' => [
            'title'  => 'Autorisation',
            'output' => function ($value, $model) {
                $model->load('permissions');
                $result = [];
                foreach ($model->permissions as $permission) {
                    $result[] = $permission->name;
                }

                return empty($result) ? 'N/A' : implode(' | ', $result);
            },
            'sortable' => false,
        ],
        'operation' => [
            'title'  => 'operation',
            'output' => function ($value, $model) {
                return $value;
            },
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'name' => [
            'title' => 'Logo',
        ],
        'permissions' => [
            'type' => 'relationship',
            'title' => 'Autorisation',
            'name_field' => 'name',
        ],
    ],

    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => 'Logo',
        ]
    ],

    // 新建和编辑时的表单验证规则
    'rules' => [
        'name' => 'required|max:15|unique:roles,name',
    ],

    // 表单验证错误时定制错误消息
    'messages' => [
        'name.required' => "L'ID ne peut pas être vide",
        'name.unique' => "Le logo existe déjà",
    ]
];
