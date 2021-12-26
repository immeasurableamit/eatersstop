<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $menu = [
            [
                'name' => 'African Dish',
                'description' => 'Managu and tubers',
                'cover_image' => 'menu-example.jpg',
                'price' => 100,
                'category_id'=>1,
                'uploaded_by'=>2
            ],
            [
                'name' => 'Zanzibar Sea food',
                'description' => 'Spicy zanzibar dish',
                'cover_image' => 'menu-example.jpg',
                'price' => 500,
                'category_id'=>2,
                'uploaded_by'=>1
            ],
            [
                'name' => 'Matoke',
                'description' => 'Matoke served with chicken stew',
                'cover_image' => 'menu-example.jpg',
                'price' => 400,
                'category_id'=>1,
                'uploaded_by'=>2
            ],
            [
                'name' => 'Italino Juice',
                'description' => 'Citrus juice',
                'cover_image' => 'menu-example.jpg',
                'price' => 200,
                'category_id'=>2,
                'uploaded_by'=>1
            ]
        ];

        foreach ($menu as $key => $value) {
            Menu::create($value);
        }
    }
}
