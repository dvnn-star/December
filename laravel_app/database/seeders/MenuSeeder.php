<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'image_path' => 'nasipadang.jpg',
            'name' => 'Spaghetti Bolognese',
            'description' => 'Classic Italian pasta with rich meat sauce.',
            'price' => 12.500,
            'type' => 'foods',
            'is_available' => true,
        ]);
        Menu::create([
            'image_path' => 'nasipadang.jpg',
            'name' => 'Thai Tea',
            'description' => 'Classic Italian pasta with rich meat sauce.',
            'price' => 12.500,
            'type' => 'drinks',
            'is_available' => true,
        ]);
        Menu::create([
            'image_path' => 'nasipadang.jpg',
            'name' => 'Thai Tea',
            'description' => 'Classic Italian pasta with rich meat sauce.',
            'price' => 12.500,
            'type' => 'desserts',
            'is_available' => true,
        ]);
    }
}
