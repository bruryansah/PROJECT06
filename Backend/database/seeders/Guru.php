<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Guru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Ki Ali",
            "email" => "kiali@gmail.com",
            "role" => UserRole::Guru,
            "password" => Hash::make("12345789")
        ]);
    }
}
