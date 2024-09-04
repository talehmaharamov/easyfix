<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\FaqTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'translation' => [
                    'en' => ['question' => 'What is the warranty period for repairs?', 'answer' => 'The warranty period is 6 months for all repairs.'],
                    'es' => ['question' => '¿Cuál es el período de garantía para las reparaciones?', 'answer' => 'El período de garantía es de 6 meses para todas las reparaciones.']
                ],
            ],
            [
                'translation' => [
                    'en' => ['question' => 'Do you offer emergency repair services?', 'answer' => 'Yes, we offer 24/7 emergency repair services.'],
                    'es' => ['question' => '¿Ofrecen servicios de reparación de emergencia?', 'answer' => 'Sí, ofrecemos servicios de reparación de emergencia 24/7.']
                ],
            ],
            [
                'translation' => [
                    'en' => ['question' => 'What appliances do you repair?', 'answer' => 'We repair refrigerators, washing machines, and more.'],
                    'es' => ['question' => '¿Qué electrodomésticos reparan?', 'answer' => 'Reparamos refrigeradores, lavadoras y más.']
                ],
            ],
            [
                'translation' => [
                    'en' => ['question' => 'How can I schedule a repair?', 'answer' => 'You can schedule a repair by calling us or using our online form.'],
                    'es' => ['question' => '¿Cómo puedo programar una reparación?', 'answer' => 'Puede programar una reparación llamándonos o utilizando nuestro formulario en línea.']
                ],
            ],
            [
                'translation' => [
                    'en' => ['question' => 'Do you provide free diagnostics?', 'answer' => 'Yes, we offer free diagnostics before any repair.'],
                    'es' => ['question' => '¿Ofrecen diagnósticos gratuitos?', 'answer' => 'Sí, ofrecemos diagnósticos gratuitos antes de cualquier reparación.']
                ],
            ],
        ];

        foreach ($faqs as $faq) {
            $newFaq = new Faq();  // Assume 'FAQ' is your model
            $newFaq->save();
            foreach (active_langs() as $lang) {
                $translation = new FaqTranslation();
                $translation->locale = $lang->code;
                $translation->faq_id = $newFaq->id;
                $translation->name = $faq['translation'][$lang->code]['question'];
                $translation->description = $faq['translation'][$lang->code]['answer'];
                $translation->save();
            }
        }

    }
}
