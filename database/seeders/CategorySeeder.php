<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'home-appliance-repair',
                'translation' => ['en' => 'Home Appliance Repair Service', 'es' => 'Servicio de Reparación de Electrodomésticos'],
            ],
            [
                'slug' => 'fridge-repair',
                'translation' => ['en' => 'Fridge Repair Service', 'es' => 'Servicio de Reparación de Refrigeradores'],
            ],
            [
                'slug' => 'washing-machine-repair',
                'translation' => ['en' => 'Washing Machine Repair Service', 'es' => 'Servicio de Reparación de Lavadoras'],
            ],
        ];

        foreach ($categories as $cat) {
            $newCategory = new Category();
            $newCategory->slug = $cat['slug'];
            $newCategory->save();
            foreach (active_langs() as $lang) {
                $translation = new CategoryTranslation();
                $translation->locale = $lang->code;
                $translation->category_id = $newCategory->id;
                $translation->name = $cat['translation'][$lang->code];
                $translation->save();
            }
        }

    }
}
