<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Photo; // Importa correttamente il modello Photo

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 27; $i++) {
            $photo = new Photo();
            $photo->title = 'Photo : ' . $i;
            $photo->url = '/img/' . $i . '.png';

            $photo->save();
        }
    }
}