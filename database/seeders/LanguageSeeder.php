<?php

namespace Database\Seeders;

use App\Models\SiteLanguage;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $en = SiteLanguage::create(['name' => 'English', 'code' => 'en', 'icon' => 'images/flags/en.jpg', 'status' => 1]);
        $es = SiteLanguage::create(['name' => 'Español', 'code' => 'es', 'icon' => 'images/flags/es.jpg', 'status' => 1]);
    }
}
