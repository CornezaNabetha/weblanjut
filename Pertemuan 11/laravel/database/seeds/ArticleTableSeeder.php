<?php

use Illuminate\Database\Seeder;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class, 5)->create();
              
        }
    }    
            