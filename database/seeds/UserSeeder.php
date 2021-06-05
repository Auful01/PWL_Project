<?php

namespace Database\Seeders;

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
        \App\Models\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Shelyca',
              'username'		=> 'super123',
              'email' 			=> 'super123@gmail.com',
              'password'		=> bcrypt('super123'),
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'name'  		=> 'Auful',
                'username'		=> 'admin123',
                'email' 		=> 'admin123@gmail.com',
                'password'		=> bcrypt('admin123'),
                'remember_token'=> NULL,
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
              ],
            [
              'id'  			=> 3,
              'name'  			=> 'Rahel',
              'username'		=> 'user123',
              'email' 			=> 'user123@gmail.com',
              'password'		=> bcrypt('user123'),
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
