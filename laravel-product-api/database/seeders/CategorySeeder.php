<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [ 'Elettronica',
        'Abbigliamento',
        'Casa e Giardino',
        'Alimentari',
        'Bellezza',
        'Sport',
        'Libri',
        'Giochi',
        'Automobili',
        'Arredamento',
        'Informatica',
        'Smartphone',
        'Elettrodomestici',
        'Gioielli',
        'Orologi',
        'Bambini',
        'Animali',
        'Viaggi',
        'Ufficio',
        'Musica'
];

foreach ($categories as $category) {
    Category::create([
        'name' => $category,


    ]);
}
    }
}
