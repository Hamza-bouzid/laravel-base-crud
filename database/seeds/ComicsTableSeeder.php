<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("fumetti");

        foreach($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->type = $comic["type"];
            $newComic->series = $comic["series"];
            $newComic->description = $comic["description"];
            $newComic->image = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->save();
        }
    }
}
