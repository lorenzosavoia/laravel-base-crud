<?php
use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newComic = new Comic();
            $newComic->author = $faker->words(2,true);
            $newComic->title = $faker->word();
            $newComic->pubblishing_house = $faker->word();
            $newComic->relase_date = $faker->word();
            $newComic->coverImg =$faker->imageUrl(360, 360, 'animals', true);
            $newComic->coverImg =$faker->randomNumber(2, false);

            $newComic->save();
        }
    }
}
