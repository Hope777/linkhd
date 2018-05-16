<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@admin.com',
            'admin' => 1,
            'avatar' => asset('avatars/avatar.png')
        ]);



           App\User::create([
            'name' => 'James Doyle',
            'password' => bcrypt('password'),
            'email' => 'james@doyle.com',
            'avatar' => asset('avatars/avatar.png')
        ]); 



    }

}
