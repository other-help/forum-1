<?php

use Spatie\Permission\Models\Permission;

return [
    'title'   => 'Autorisation',
    'single'  => 'Autorisation',
    'model'   => Permission::class,

    'permission' => function () {
        return Auth::user()->can('manage_users');
    },

    // 对 CRUD 动作的单独权限控制，通过返回布尔值来控制权限。
    'action_permissions' => [
        // 控制『新建按钮』的显示
        'create' => function ($model) {
            return true;
        },
        // 允许更新
        'update' => function ($model) {
            return true;
        },
        // 不允许删除
        'delete' => function ($model) {
            return false;
        },
        // 允许查看
        'view' => function ($model) {
            return true;
        },
    ],

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => 'marque',
        ],
        'operation' => [
            'title'    => 'operation',
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'name' => [
            'title' => 'Marque (veuillez modifier soigneusement)',

            // 表单条目标题旁的『提示信息』
            'hint' => "La modification de l'id d'autorisation affectera l'appel du code, merci de ne pas le modifier à la légère。"
        ],
        'roles' => [
            'type' => 'relationship',
            'title' => 'Rôle',
            'name_field' => 'name',
        ],
    ],

    'filters' => [
        'name' => [
            'title' => 'marque',
        ],
    ],
];
