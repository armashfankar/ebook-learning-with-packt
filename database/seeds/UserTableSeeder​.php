<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder​ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'John Doe',
                'email' => 'dev@example.com',
                'password' => '$2y$10$TbG9DngHwRWhHUSK7GNAFuZuNbfaz9SRZ0tp5saAGun6tObmKGlP2', // asdasdasd
                'mobile' => '9876543211',
                'slug' => 'johndoe'
            ]
        ];
        User::insert($user);
    }
}
