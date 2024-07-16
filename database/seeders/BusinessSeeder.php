<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::updateOrCreate(['email' => 'admin@test.com'], [
            'owner_id' => 1,
            'name' => 'pos',
            'layout' => 'ltr',
            'email' => 'admin@test.com',
            'currency' => 'EGP',
            'time_zone' => 'Africa/Cairo',
            'start_date' => date('Y-m-d', time()),
            'email_setting' => '{
            "host":"",
            "port":"",
            "username":"",
            "password":"",
            "encryption":"",
            "fromEmail":"",
            "fromName":""
            }'
        ]);
    }
}
