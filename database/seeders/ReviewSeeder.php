<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        Review::insert([
            [
                'name' => 'Winda Hettyningtyas',
                'content' => 'Bakso malang yang menduduki peringkat nomor 1 paling gurih + enak semalang raya (versi akooh).. Selain rasanya yg gurih, pentolnya yg ndaging, kuahnya itu lho khas banget, ga ada yang nyamain.. harganya wajar lah ya, secara rasanya istimewah..',
                'avatar' => 'img/ellipse 5.png'
            ],
            [
                'name' => 'Nurul Amalia',
                'content' => 'Baksonya enak banget, cuma kedainya memang ga besar dan pengunjungnya antri2. Jadi kl makan disana kurang nyaman krn. Es jeruknya juga enak. Tempat parkirnya juga susah 😁',
                'avatar' => 'img/ellipse 5.png'
            ]
        ]);
    }
}
