<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email' => 'admin@test.com'], [
            'site_name' => 'pos',
            'layout' => 'ltr',
            'email' => 'admin@test.com',
            'currency' => 'EGP',
            'time_zone' => 'Africa/Cairo',
        ]);
    }
}
