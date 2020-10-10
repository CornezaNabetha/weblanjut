<?php

use Illuminate\Database\Seeder;

class resepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\resep::class, 2)->create();

    }
}
