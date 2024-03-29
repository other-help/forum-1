<?php

return [
    'title' => 'Paramètres du site',

    // 访问权限判断
    'permission'=> function()
    {
        // 只允许站长管理站点配置
        return Auth::user()->hasRole('Founder');
    },

    // 站点配置的表单
    'edit_fields' => [
        'site_name' => [
            // 表单标题
            'title' => 'Nom du site',

            // 表单条目类型
            'type' => 'text',

            // 字数限制
            'limit' => 50,
        ],
        'contact_email' => [
            'title' => 'Email du contact',
            'type' => 'text',
            'limit' => 50,
        ],
        'seo_description' => [
            'title' => 'SEO - Description',
            'type' => 'textarea',
            'limit' => 250,
        ],
        'seo_keyword' => [
            'title' => 'SEO - Keywords',
            'type' => 'textarea',
            'limit' => 250,
        ],
    ],

    // 表单验证规则
    'rules' => [
        'site_name' => 'required|max:50',
        'contact_email' => 'email',
    ],

    'messages' => [
        'site_name.required' => 'Veuillez remplir le nom du site.',
        'contact_email.email' => "Veuillez remplir le bon format d'e-mail de contact.",
    ],


    'before_save' => function(&$data)
    {

        if (strpos($data['site_name'], 'Powered by LaraBBS') === false) {
            $data['site_name'] .= ' - Powered by sminth';
        }
    },

    // 你可以自定义多个动作，每一个动作为设置页面底部的『其他操作』区块
    'actions' => [

        // 清空缓存
        'clear_cache' => [
            'title' => 'Mettre à jour le cache système',

            // 不同状态时页面的提醒
            'messages' => [
                'active' => 'Vider le cache...',
                'success' => 'La cache a été vidée !',
                'error' => "Une erreur s'est produite lors de la suppression du cache !",
            ],

            // 动作执行代码，注意你可以通过修改 $data 参数更改配置信息
            'action' => function(&$data)
            {
                \Artisan::call('cache:clear');
                return true;
            }
        ],
    ],
];
