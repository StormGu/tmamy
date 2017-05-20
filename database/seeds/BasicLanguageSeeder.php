<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class BasicLanguageSeeder extends Seeder
{
    Private $defaultLanguages = [
        [
            'name' => 'Arabic',
            'code' => 'ar',
            'locale' => 'العربية',
            'image' => 'sa.png',
            'direction' => 'rtl',
            'sort_order' => '1',
            'status' => '1',
        ],
        [
            'name' => 'English',
            'code' => 'en',
            'locale' => 'English',
            'image' => 'gb.png',
            'direction' => 'ltr',
            'sort_order' => '2',
            'status' => '1',
        ],
        [
            'name' => 'Turkish',
            'code' => 'tr',
            'locale' => 'Türk',
            'image' => 'tr.png',
            'direction' => 'ltr',
            'sort_order' => '3',
            'status' => '0',
        ],
    ];

    public function run() {
        foreach ($this->defaultLanguages as $language) {
            if (!Language::whereCode($language['code'])->count()) {
                Language::create($language);
            }
        }
    }
}
