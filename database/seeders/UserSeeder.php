<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'uuid' => (string) Uuid::uuid4()->toString(),
            'username' => 'admin',
            'nama' => 'Administrator',
            'role' => 'admin',
            'statusenabled' => true,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('@@12345@@'),
        ]);
    }
}
