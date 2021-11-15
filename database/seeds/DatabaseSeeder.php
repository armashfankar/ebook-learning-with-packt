<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder​::class);
        $this->call(SubjectMatterExpertSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
