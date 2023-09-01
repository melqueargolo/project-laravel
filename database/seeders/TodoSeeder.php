<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::factory(5)->create();
        // Todo::insert([
        //     [
        //     'nome' => 'ssd',
        //     'votos' => rand(0,999),
        //     'user_id' => 1,
        // ]
        //     ]);
    }
}
