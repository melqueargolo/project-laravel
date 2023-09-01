<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(10)->create();
        // User::insert([
        //     [            
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     ],
        //     [
        //     'name' => 'pedro',
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     ],
        //     [
        //     'name' => 'ana',
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     ]
        // ]);

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        
    }
}
