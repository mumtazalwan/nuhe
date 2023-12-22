<?php

namespace Database\Seeders;

use App\Models\Funfact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FunfactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funfact::create([
            'quote' => 'Negara pulau terbesar di dunia, lebih dari 17.000 pulau.'
        ]);

        Funfact::create([
            'quote' => 'Keanekaragaman budaya: 300 etnis, 700 bahasa dan dialek.'
        ]);

        Funfact::create([
            'quote' => 'Lebih dari 130 gunung berapi aktif.'
        ]);

        Funfact::create([
            'quote' => 'Hutan hujan tropis dengan keanekaragaman hayati tinggi.'
        ]);

        Funfact::create([
            'quote' => 'Raja Ampat: destinasi penyelaman terbaik di dunia'
        ]);

        Funfact::create([
            'quote' => 'Candi Borobudur, terbesar di dunia, abad ke-9.'
        ]);

        Funfact::create([
            'quote' => 'Kopi Luwak: kopi termahal, diproses melalui musang luwak.'
        ]);

        Funfact::create([
            'quote' => 'Jakarta, ibu kota dan kota terpadat di Indonesia.'
        ]);

        Funfact::create([
            'quote' => 'Orangutan hanya ditemukan di Sumatera dan Kalimantan.'
        ]);

        Funfact::create([
            'quote' => 'Tradisi unik: upacara, tarian, dan festival budaya.'
        ]);
    }

    /**
     * 1. Negara pulau terbesar di dunia, lebih dari 17.000 pulau.
    2. Keanekaragaman budaya: 300 etnis, 700 bahasa dan dialek.
    3. Lebih dari 130 gunung berapi aktif.
    4. Hutan hujan tropis dengan keanekaragaman hayati tinggi.
    5. Raja Ampat: destinasi penyelaman terbaik di dunia.
    6. Candi Borobudur, terbesar di dunia, abad ke-9.
    7. Kopi Luwak: kopi termahal, diproses melalui musang luwak.
    8. Jakarta, ibu kota dan kota terpadat di Indonesia.
    9. Orangutan hanya ditemukan di Sumatera dan Kalimantan.
    10. Tradisi unik: upacara, tarian, dan festival budaya.
     */
}
