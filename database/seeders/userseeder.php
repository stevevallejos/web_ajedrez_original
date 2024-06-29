<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;	

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'steve',
            'email' => 'steveelmandarini@gmail.com',
            'password' => Hash::make('papusenal'),
            

        ]);
    }
}
