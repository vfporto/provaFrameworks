<?php

use Illuminate\Database\Seeder;

class SimplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Simples::class, 5)->create();
    }
}
