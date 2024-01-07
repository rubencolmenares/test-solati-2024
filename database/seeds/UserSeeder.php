<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create SuperAdmin User
        $user = [
            'name' => 'Admin',
            'email' => 'admin@solati.co',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('users')->insert($user);
    }
}
