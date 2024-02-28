<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cocktails = [
            [
                'name' => 'Negroni',
                'image' => 'https://www.bargiornale.it/wp-content/uploads/sites/4/2018/09/negroni.png',
                'ingredients' => '3 cl di Gin, 3 cl di Campari, 3 cl di Vermouth rosso',
                'description' => ' Versare gli ingredienti in un mixing glass con ghiaccio e mescolare. Filtrare in un bicchiere old fashioned con un cubetto di ghiaccio.',
                'price' => 8,

            ],
            [
                'name' => 'Margarita',
                'image' => 'https://winedharma.com/wine-dharma/uploads/2020/10/805-margarita-frozen-cocktail-cocktail-con-tequila-lime-zucchero-cocktail-pi-famosi.jpg',
                'ingredients' => '4.5 cl di Tequila, 2 cl di succo di lime, 1.5 cl di Sale',
                'description' => 'Strofinare il bordo di un bicchiere con lime e immergerlo nel sale. Shakerare gli ingredienti con ghiaccio e filtrare nel bicchiere.',
                'price' => 9,
            ],
            [
                'name' => 'Mojito',
                'image' => 'https://www.fattoincasadabenedetta.it/wp-content/uploads/2020/06/Mojito-copertina.jpg',
                'ingredients' => '5 cl di Rum bianco, 2 cl di succo di lime, 2 cucchiaini di zucchero, 6 foglie di menta, Acqua frizzante',
                'description' => ' Pestare le foglie di menta con lo zucchero in uno shaker. Aggiungere il rum, il succo di lime e il ghiaccio',
                'price' => 7,
            ],
            [
                'name' => 'Daiquiri',
                'image' => 'https://www.liquor.com/thmb/ffYicPLJk00SWKg2shV67TPHV74=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Daiquiri_3000x3000_primary-206eb2330cb04852ab7d780dcf3d55ef.jpg',
                'ingredients' => '4.5 cl di Rum bianco, 2.25 cl di succo di lime, 0.75 cl di sciroppo semplice',
                'description' => 'Shakerare gli ingredienti con ghiaccio e filtrare in un bicchiere coupette.
                ',
                'price' => 6,
            ],
            [
                'name' => 'Cosmopolitan',
                'image' => 'https://chilledmagazine.com/wp-content/uploads/2023/05/Cosmopolitan-Cocktail.jpg',
                'ingredients' => '4 cl di Vodka al limone, 1.5 cl di Cointreau, 1.5 cl di succo di lime,3 cl di succo di cranberry',
                'description' => 'Shakerare gli ingredienti con ghiaccio e filtrare in un bicchiere da Martini.
                ',
                'price' => 8,
            ],
            [
                'name' => 'Aperol Spritz',
                'image' => 'https://d1bvpoagx8hqbg.cloudfront.net/originals/aperol-spritz-tutto-cio-dovete-sapere-questa-tipica-bevanda-italiana-ceaabdcc31da485e8190a7c93e64bd67.jpg',
                'ingredients' => '3 cl di Aperol, 6 cl di Prosecco, 3 cl di acqua frizzante, una fetta d\'arancia',
                'description' => 'Versare l\'Aperol in un bicchiere da vino con ghiaccio. Aggiungere il Prosecco e l\'acqua frizzante. Decorare con una fetta d\'arancia.',
                'price' => 1,
            ],
            [
                'name' => 'Americano',
                'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/01/americano-1200x675.jpg',
                'ingredients' => '3 cl di Campari, 3 cl di Vermouth rosso, Acqua seltz',
                'description' => 'Versare il Campari e il Vermouth rosso in un bicchiere old fashioned con ghiaccio. Aggiungere acqua seltz e decorare con una fetta d\'arancia',
                'price' => 7,
            ]
        ];
        foreach ($cocktails as $cocktail) {
            $newCocktail = new Cocktail();
            $newCocktail->name = $cocktail['name'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->ingredients = $cocktail['ingredients'];
            $newCocktail->description = $cocktail['description'];
            $newCocktail->price = $cocktail['price'];
            $newCocktail->save();
        }
    }
}
