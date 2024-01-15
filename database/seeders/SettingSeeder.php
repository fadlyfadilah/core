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
        $logo = array(
            'sm' => 'logo-sm.png',
            'dark' => 'logo-dark.png',
            'light' => 'logo-light.png',
        );

        $data = array(
            'role' => 'User',
            'logo' => json_encode($logo)
        );

        Setting::create([
            'name' => 'General',
            'data' => json_encode($data)
        ]);
    }
}
