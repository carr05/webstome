<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            ['name' => 'Home', 'category' => 'main', 'is_active' => true],
            ['name' => 'About', 'category' => 'main', 'is_active' => true],
            ['name' => 'Contact', 'category' => 'main', 'is_active' => true],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
