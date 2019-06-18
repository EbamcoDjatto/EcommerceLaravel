<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::Create([
            'name' => 'Fake Djoe',

            'email' => 'fake@yahoo.fr',

            'password' => bcrypt('password')
        ]);
    }
}
