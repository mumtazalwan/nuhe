<?php

namespace Database\Seeders;

use App\Models\Culinary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Culinary::create([
            'culinary_name' => 'Rendang',
            'image' => Storage::url('rendang.jpg'),
            'description' => 'Rendang adalah salah satu hidangan khas Minangkabau yang telah dikenal secara internasional. Daging sapi yang dipotong kecil dimasak dalam campuran santan dan rempah-rempah yang meliputi serai, lengkuas, daun jeruk, cabai, dan bumbu lainnya. Proses memasaknya yang memakan waktu lama, kadang hingga berjam-jam, membuat dagingnya menjadi sangat empuk dan bumbu meresap secara menyeluruh. Rendang memiliki cita rasa yang kaya dengan kombinasi gurih, manis, pedas, dan rempah yang menggugah selera.'
        ]);

        Culinary::create([
            'culinary_name' => 'Babi Guling',
            'image' => Storage::url('babiguling.jpg'),
            'description' => 'Babi Guling adalah salah satu makanan ikonik Bali yang terbuat dari babi yang dipanggang dengan rempah-rempah. Sebelum dipanggang, perut babi diisi dengan campuran rempah seperti kunyit, bawang putih, jahe, dan kemiri. Proses memanggangnya biasanya dilakukan di dalam lubang bakar yang dibuat khusus dan menggunakan batang bambu sebagai pemanggangnya. Kulit babi dipanggang hingga renyah dan dagingnya pun lembut serta memiliki cita rasa rempah yang khas.'
        ]);

        Culinary::create([
            'culinary_name' => 'Gudeg',
            'image' => Storage::url('gudeg.jpg'),
            'description' => 'Gudeg merupakan masakan khas Yogyakarta yang terbuat dari nangka muda yang dimasak dengan santan, daun salam, lengkuas, gula merah, dan rempah lainnya. Proses memasaknya yang lambat dan lama menghasilkan tekstur yang lembut dengan rasa yang manis dan gurih. Gudeg biasanya disajikan dengan telur, ayam, atau tahu sebagai pelengkap.'
        ]);

        Culinary::create([
            'culinary_name' => 'Coto Makassar',
            'image' => Storage::url('cotomakasar.jpg'),
            'description' => 'Coto Makassar adalah sup daging sapi yang memiliki kuah kental berbahan dasar kacang tanah yang dihaluskan. Daging sapi yang digunakan adalah bagian yang memiliki banyak urat sehingga membutuhkan proses memasak yang cukup lama agar dagingnya menjadi empuk. Bumbu rempah-rempah seperti ketumbar, kunyit, jahe, dan bawang merah juga ditambahkan untuk memberikan cita rasa yang khas.'
        ]);

        Culinary::create([
            'culinary_name' => 'Soto Betawi',
            'image' => Storage::url('sotobetawi.jpg'),
            'description' => 'Soto Betawi adalah hidangan sup dengan kuah susu, santan, dan rempah-rempah khas Betawi. Terbuat dari daging sapi atau babi yang dimasak dengan bumbu yang kaya seperti bawang merah, bawang putih, serai, dan daun jeruk. Biasanya disajikan dengan potongan kentang, tomat, dan perkedel. Kelezatan soto Betawi seringkali datang dari kuahnya yang gurih dan kental.'
        ]);

        Culinary::create([
            'culinary_name' => 'Papeda',
            'image' => Storage::url('papeda.jpg'),
            'description' => 'Papeda merupakan hidangan sagu khas Papua yang berbentuk seperti bubur kental. Sagu yang telah diolah kemudian dimasak dengan air hingga menjadi bubur yang kenyal. Papeda biasanya disajikan dengan kuah ikan atau daging yang diberi bumbu khas Papua. Hidangan ini menjadi salah satu makanan pokok di Papua.'
        ]);

        Culinary::create([
            'culinary_name' => 'Rujak Cingur',
            'image' => Storage::url('rujakcingur.jpg'),
            'description' => 'Rujak Cingur adalah hidangan Jawa Timuran yang terdiri dari campuran sayur-sayuran seperti timun, kacang panjang, dan irisan cingur (hidung sapi) yang direbus terlebih dahulu. Semua bahan disajikan dengan saus kacang yang kaya rasa, biasanya ditambahkan potongan tahu dan tempe serta taburan kerupuk untuk menambah tekstur.'
        ]);

        Culinary::create([
            'culinary_name' => 'Pempek',
            'image' => Storage::url('pempek.jpg'),
            'description' => 'Pempek adalah hidangan khas Palembang yang terbuat dari campuran ikan, tepung sagu, dan rempah-rempah yang digoreng. Ada berbagai jenis pempek, seperti pempek kapal selam yang berisi telur ayam, pempek lenjer yang berbentuk silinder, dan lainnya. Pempek biasanya disajikan dengan cuko, saus yang terbuat dari air, gula, cuka, dan bumbu lainnya.'
        ]);

        Culinary::create([
            'culinary_name' => 'Rawon',
            'image' => Storage::url('rawon.jpg'),
            'description' => 'Rawon adalah sup daging sapi yang memiliki kuah berwarna hitam pekat yang dihasilkan dari kluwek, buah yang memberikan warna hitam alami. Daging dimasak dengan rempah-rempah seperti lengkuas, kunyit, dan kluwek yang memberikan cita rasa khas. Biasanya disajikan dengan telur asin, tauge, dan irisan bawang merah.'
        ]);

        Culinary::create([
            'culinary_name' => 'Ketupat Sayur ',
            'image' => Storage::url('ketupatsayur.jpg'),
            'description' => 'Ketupat Sayur adalah hidangan yang terdiri dari ketupat (nasi yang dibungkus dalam anyaman janur) disajikan dengan kuah sayur khas Betawi yang terbuat dari santan, daging sapi, dan rempah-rempah. Biasanya disajikan dengan potongan daging sapi atau ayam serta telur rebus.'
        ]);

    }
}
