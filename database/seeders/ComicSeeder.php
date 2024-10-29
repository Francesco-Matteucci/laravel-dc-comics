<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Factory as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        $faker = Faker::create();

        foreach ($comics as $comicData) {
            Comic::create([
                'title' => $comicData['title'],
                'description' => $comicData['description'],
                'thumb' => $comicData['thumb'] ?? null,
                'price' => (float) str_replace('$', '', $comicData['price']),
                'series' => $comicData['series'] ?? 'Sconosciuto',
                'sale_date' => $comicData['sale_date'] ?? $faker->year,
                'author' => $faker->name,
                'year' => date('Y', strtotime($comicData['sale_date'] ?? now())),
                'publisher' => 'DC Comics',
                'genre' => $comicData['type'] ?? 'comics',
            ]);
        }
    }
}