<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 生成数据集合
        User::factory()->count(5)->create();

        // 单独处理第一个用户的数据
        $user = User::find(2);
        $user->name = 'Sminth';
        $user->email = 'expertproffessionnel@gmail.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Founder');

        $user = User::find(1);
        $user->name = 'Kouassi Amenan';
        $user->email = 'virtus225one@gmail.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/Lhd1SHqu86.png';
        $user->save();

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Founder');

        // 将 2 号用户指派为『管理员』
        $user = User::find(3);
        $user->name = 'Koffi';
        $user->email = 'chiffonmail79@gmail.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/s5ehp11z6s.png';
        $user->save();
        $user->assignRole('Maintainer');
    }
}
