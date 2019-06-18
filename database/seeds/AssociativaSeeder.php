<?php

use Illuminate\Database\Seeder;

class AssociativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Associativa::class, 5)->create();
    }
}
