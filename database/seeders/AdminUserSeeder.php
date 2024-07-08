<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@test.com'], [
            'password' => bcrypt('admin'),
            'name' => 'admin',
            'email' => 'admin@test.com',
            'email_verified_at' => date(now())

        ]);
    }
}
