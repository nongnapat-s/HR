<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TitlesTableSeeder::class,
            ProvincesTableSeeder::class,
            PostcodesTableSeeder::class,
            PersonsTableSeeder::class,
        ]);
    }
}
