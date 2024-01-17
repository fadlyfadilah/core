<?php

namespace Database\Seeders;

use App\Models\MenuGroup;
use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = MenuGroup::create([
            'name' => 'Setting',
            'permission_name' => 'setting',
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'General Setting',
            'icon' => 'flaticon2-gear',
            'route' => 'setting.index',
            'permission_name' => 'setting_index',
            'menu_group_id' => $setting->id,
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'User Management',
            'icon' => 'flaticon2-user',
            'route' => 'user.index',
            'permission_name' => 'user_index',
            'menu_group_id' => $setting->id,
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'Menu Management',
            'icon' => 'flaticon2-menu',
            'route' => 'menu.index',
            'permission_name' => 'menu_index',
            'menu_group_id' => $setting->id,
            'posision' => 3,
        ]);

        MenuItem::create([
            'name' => 'Route Management',
            'icon' => 'flaticon2-website',
            'route' => 'route.index',
            'permission_name' => 'route_index',
            'menu_group_id' => $setting->id,
            'posision' => 4,
        ]);

        MenuItem::create([
            'name' => 'Role Management',
            'icon' => 'flaticon2-group',
            'route' => 'role.index',
            'permission_name' => 'role_index',
            'menu_group_id' => $setting->id,
            'posision' => 5,
        ]);

        MenuItem::create([
            'name' => 'Permission Management',
            'icon' => 'flaticon2-protection',
            'route' => 'permission.index',
            'permission_name' => 'permission_index',
            'menu_group_id' => $setting->id,
            'posision' => 6,
        ]);
    }
}
