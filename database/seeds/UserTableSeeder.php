<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
        	'name'=>'Admin',
        	'password'=>bcrypt('admin123'),
        	'email'=>'admin@email.com',
        ]);
    }
}
