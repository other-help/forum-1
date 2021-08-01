<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'programmation web',
                'description' => 'Partager des idées de design web, corriger des bugs etc ...',
                'post_count' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'tutoriel',
                'description' => 'Compétences en développement, packages d\'extension recommandés, etc.',
                'post_count' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'mathematiques',
                'description' => 'Poser des questions sur les probles mathematiques',
                'post_count' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Miage',
                'description' => 'Parlons de tout et de rien',
                'post_count' => 0,
            ),
        ));
        
        
    }
}