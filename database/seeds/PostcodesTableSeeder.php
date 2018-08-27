<?php

use Illuminate\Database\Seeder;

class PostcodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Postcode::class, 2000)->create();
    }
}
