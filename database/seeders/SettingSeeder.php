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
            ['name' => 'phone', 'link' => '+994500000000'],
            ['name' => 'facebook', 'link' => 'https://facebook.com'],
            ['name' => 'instagram', 'link' => 'https://www.instagram.com/'],
            ['name' => 'youtube', 'link' => 'https://www.youtube.com/'],
            ['name' => 'email', 'link' => 'site@example.az'],
            ['name' => 'mail_receiver', 'link' => 'site@example.com'],
        ];
        foreach (active_langs() as $lang){
            $settings = [
                ['name' => 'address_'.$lang->code, 'link' => 'example_'.$lang->code],
            ];
        }
        foreach ($settings as $key => $setting) {
            $set = new Setting();
            $set->name = $setting['name'];
            $set->link = $setting['link'];
            $set->status = 1;
            $set->save();
        }
    }
}
