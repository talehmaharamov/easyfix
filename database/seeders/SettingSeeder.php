<?php

namespace Database\Seeders;

use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            ['name' => 'phone', 'link' => '+19453083083'],
            ['name' => 'email', 'link' => 'easyfixfollc@gmail.com'],
            ['name' => 'mail_receiver', 'link' => 'easyfixfollc@gmail.com'],
        ];

        foreach ($settings as $key => $setting) {
            $set = new Setting();
            $set->name = $setting['name'];
            $set->link = $setting['link'];
            $set->status = 1;
            $set->save();
        }
    }
}
