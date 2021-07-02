<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::create([

            'first_name' => 'Mohamed',
            'last_name' => 'Ahmed',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),

        ]);


        

    }
}
