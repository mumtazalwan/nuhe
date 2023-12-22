<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'province_name' => 'Aceh',
            'capital' => 'Ibu Kota Banda Aceh',
            'local_language' => 'Bahasa Aceh',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 2523329,
            'ethnic' => 'Acehnese',
            'regional_house' => 'Rumoh Aceh',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Saman',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Rencong',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tambur',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Saman',
            'flash_info' => 'Memiliki otonomi khusus dengan menerapkan hukum syariah.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sumatera Utara',
            'capital' => 'Ibu Kota Medan',
            'local_language' => 'Bahasa Batak',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Batak',
            'regional_house' => 'Rumah Bolon',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tor-Tor',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gondang Sabangunan',
            'music_image' => 'music1.jpg',
            'tradition' => 'Ulos',
            'flash_info' => 'Merupakan provinsi terpadat di Pulau Sumatera.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sumatera Selatan',
            'capital' => 'Ibu Kota Palembang',
            'local_language' => 'Bahasa Palembang',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Palembang, Ogan, Komering',
            'regional_house' => 'Rumah Limas',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Pagar Pengantin',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Pedang Ilang',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Karo',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Persembahan',
            'flash_info' => 'Terkenal dengan Festival Danau Ranau dan kekayaan budaya.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sumatera Barat',
            'capital' => 'Ibu Kota Padang',
            'local_language' => 'Bahasa Minangkabau',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Minangkabau',
            'regional_house' => 'Rumah Gadang',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Piring',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Minangkabau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Saluang',
            'music_image' => 'music1.jpg',
            'tradition' => 'Randai',
            'flash_info' => 'Terkenal dengan masakan rendang.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Bengkulu',
            'capital' => 'Ibu Kota Bengkulu',
            'local_language' => 'Bahasa Bengkulu',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Rejang',
            'regional_house' => 'Rumah Adat Bengkulu',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Serampang 12',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Bengkulu',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Serunai',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pantun',
            'flash_info' => 'Memiliki keindahan alam yang masih alami.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Riau',
            'capital' => 'Ibu Kota Pekanbaru',
            'local_language' => 'Bahasa Melayu Riau',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Minangkabau',
            'regional_house' => 'Rumah Lancang Kuning',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Zapin',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Riau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Talempong',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Zapin',
            'flash_info' => 'Salah satu produsen minyak dan gas terbesar di Indonesia.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kepulauan Riau',
            'capital' => 'Ibu Kota Tanjung Pinang',
            'local_language' => 'Bahasa Melayu',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Malay',
            'regional_house' => 'Rumah Melayu Riau',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Enggang',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Kepulauan Riau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kompang',
            'music_image' => 'music1.jpg',
            'tradition' => 'Makanan Laut',
            'flash_info' => 'Terdiri dari banyak pulau di sekitar Sumatera dan Singapura.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Jambi',
            'capital' => 'Ibu Kota Jambi',
            'local_language' => 'Bahasa Jambi',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Jambi',
            'regional_house' => 'Rumah Jambi',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Tanggai',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Rencong',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Melayu',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pentas Wayang Kulit',
            'flash_info' => 'Terkenal dengan keindahan Taman Nasional Kerinci Seblat.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Lampung',
            'capital' => 'Ibu Kota Bandar Lampung',
            'local_language' => 'Bahasa Lampung',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Lampung',
            'regional_house' => 'Pangeran Haji Residence',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Gending Sriwijaya',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Pedang Tapis',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Saronen',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Pepadun',
            'flash_info' => 'Dikenal dengan Taman Nasional Way Kambas dan Pantai Kiluan.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Bangka Belitung',
            'capital' => 'Ibu Kota Pangkal Pinang',
            'local_language' => 'Bahasa Melayu Bangka Belitung',
            'island' => 'Terletak di Pulau Sumatera.',
            'population' => 1000000,
            'ethnic' => 'Belitung',
            'regional_house' => 'Rumah Panggung Melayu',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Piring Belitung',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Bangka',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Serunai',
            'music_image' => 'music1.jpg',
            'tradition' => 'Festival Laskar Pelangi',
            'flash_info' => 'Terdiri dari pulau-pulau di sekitar Sumatera, terkenal dengan tambang timah.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kalimantan Barat',
            'capital' => 'Ibu Kota Pontianak',
            'local_language' => 'Bahasa Melayu',
            'island' => 'Terletak di Pulau Kalimantan.',
            'population' => 1000000,
            'ethnic' => 'Dayak',
            'regional_house' => 'Rumah Betang',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Miring',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Serunai',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tarian Enggang',
            'flash_info' => 'Merupakan provinsi di Pulau Kalimantan bagian barat.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kalimantan Timur',
            'capital' => 'Ibu Kota Samarinda',
            'local_language' => 'Bahasa Banjar',
            'island' => 'Terletak di Pulau Kalimantan.',
            'population' => 1000000,
            'ethnic' => 'Dayak',
            'regional_house' => 'Rumah Kutai',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Enggang',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Sape',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Maengket',
            'flash_info' => 'Daerah pertambangan dan pengolahan minyak terbesar di Indonesia.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kalimantan Selatan',
            'capital' => 'Ibu Kota Banjarbaru',
            'local_language' => 'Bahasa Banjar',
            'island' => 'Terletak di Pulau Kalimantan.',
            'population' => 1000000,
            'ethnic' => 'Banjar',
            'regional_house' => 'Rumah Banjar',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Mandau',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Banjar',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Zapin Banjar',
            'flash_info' => 'Terletak di Pulau Kalimantan bagian selatan.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kalimantan Tengah',
            'capital' => 'Ibu Kota Palangkaraya',
            'local_language' => 'Bahasa Dayak',
            'island' => 'Terletak di Pulau Kalimantan.',
            'population' => 1000000,
            'ethnic' => 'Dayak',
            'regional_house' => 'Rumah Radakng',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Sampi',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Bujang Gadis',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pesta Perahu Hias',
            'flash_info' => 'Terletak di tengah Pulau Kalimantan.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Kalimantan Utara',
            'capital' => 'Ibu Kota Tanjung Selor',
            'local_language' => 'Bahasa Tidung',
            'island' => 'Terletak di Pulau Kalimantan.',
            'population' => 1000000,
            'ethnic' => 'Dayak',
            'regional_house' => 'Rumah Radakng',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Enggang',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Mandau',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Serunai',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pesta Padusan',
            'flash_info' => 'Provinsi terbaru di Indonesia, terbentuk pada tahun 2012.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Banten',
            'capital' => 'Ibu Kota Serang',
            'local_language' => 'Bahasa Sunda',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Sundanese',
            'regional_house' => 'Rumah Badui',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Serang',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Badik',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kulintang Sunda',
            'music_image' => 'music1.jpg',
            'tradition' => 'Serentaun',
            'flash_info' => 'Terletak di sebelah barat Jakarta, di Pulau Jawa.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'DKI Jakarta',
            'capital' => 'Ibu Kota Jakarta',
            'local_language' => 'Bahasa Betawi',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Sundanese',
            'regional_house' => 'Rumah Kebaya',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Topeng Betawi',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Golok',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tanbur',
            'music_image' => 'music1.jpg',
            'tradition' => 'Ondel-ondel',
            'flash_info' => 'Ibukota negara dan pusat pemerintahan di Indonesia.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Jawa Barat',
            'capital' => 'Ibu Kota Bandung',
            'local_language' => 'Bahasa Sunda',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Javanese',
            'regional_house' => 'Rumah Sunda',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Jaipongan',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Badik',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Angklung',
            'music_image' => 'music1.jpg',
            'tradition' => 'Wayang Golek',
            'flash_info' => 'Pusat pendidikan dan kebudayaan.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Jawa Tengah',
            'capital' => 'Ibu Kota Semarang',
            'local_language' => 'Bahasa Jawa',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Javanese',
            'regional_house' => 'Joglo',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Gambyong',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gamelan Jawa=',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Gambyong',
            'flash_info' => 'Terletak di bagian tengah Pulau Jawa.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Daerah Istimewa Yogyakarta',
            'capital' => 'Ibu Kota Yogyakarta',
            'local_language' => 'Bahasa Jawa',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Javanese',
            'regional_house' => 'Joglo',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Bedhaya',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Yogyakarta',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gamelan Jogja',
            'music_image' => 'music1.jpg',
            'tradition' => 'Kraton Yogyakarta',
            'flash_info' => 'Daerah istimewa dengan kebudayaan dan sejarah yang kaya.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Jawa Timur',
            'capital' => 'Ibu Kota Surabaya',
            'local_language' => 'Bahasa Jawa',
            'island' => 'Terletak di Pulau Jawa.',
            'population' => 1000000,
            'ethnic' => 'Javanese',
            'regional_house' => 'Joglo',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Reog Ponorogo',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gamelan Jawa Timur',
            'music_image' => 'music1.jpg',
            'tradition' => 'Reog Ponorogo',
            'flash_info' => 'Pusat industri dan perdagangan.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Bali',
            'capital' => 'Ibu Kota Denpasar',
            'local_language' => 'Bahasa Bali',
            'island' => 'Terletak di Pulau Bali.',
            'population' => 1000000,
            'ethnic' => 'Balinese',
            'regional_house' => 'Rumah Bale Bengong',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Legong',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Keris Bali',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gamelan Bali',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Melasti',
            'flash_info' => 'Terkenal dengan keindahan alam, seni, dan kebudayaannya.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Nusa Tenggara Timur',
            'capital' => 'Ibu Kota Kupang',
            'local_language' => 'Bahasa Tetun',
            'island' => 'Terletak di Kepulauan Nusa Tenggara.',
            'population' => 1000000,
            'ethnic' => 'Flores',
            'regional_house' => 'Rumah Adat Ende Lio',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Sajojo',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Parang',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Sasando',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tenun Ikat',
            'flash_info' => 'Terletak di timur Pulau Timor.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Nusa Tenggara Barat',
            'capital' => 'Ibu Kota Mataram',
            'local_language' => 'Bahasa Sasak',
            'island' => 'Terletak di Kepulauan Nusa Tenggara.',
            'population' => 1000000,
            'ethnic' => 'Sasak',
            'regional_house' => 'Sasak Lombok',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Gendang Beleq',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Sasando',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Beleq',
            'music_image' => 'music1.jpg',
            'tradition' => 'Gendang Beleq',
            'flash_info' => 'Terletak di barat Pulau Timor.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Gorontalo',
            'capital' => 'Ibu Kota Gorontalo',
            'local_language' => 'Bahasa Gorontalo',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'Gorontalo',
            'regional_house' => 'Rumah Gorontalo',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Dabuyou',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Sundangan',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Gorontalo',
            'music_image' => 'music1.jpg',
            'tradition' => 'Maipa Deapati',
            'flash_info' => 'Terletak di utara Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sulawesi Barat ',
            'capital' => 'Ibu Kota Mamuju',
            'local_language' => 'Bahasa Mamuju',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'Mandar',
            'regional_house' => 'Rumah Adat Mamuju',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Pa\'gellu',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Sundang',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Sulawesi Barat',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Pongko',
            'flash_info' => 'Terletak di barat daya Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sulawesi Tengah',
            'capital' => 'Ibu Kota Palu',
            'local_language' => 'Bahasa Tomini-Tolitoli',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'Bugis',
            'regional_house' => 'Rumah Adat Kulawi',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Tinulele',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Badik',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Sulawesi Tengah',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Ollon',
            'flash_info' => 'Terletak di tengah Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sulawesi Utara',
            'capital' => 'Ibu Kota Manado',
            'local_language' => 'Bahasa Minahasa',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'Minahasa',
            'regional_house' => 'Rumah Manado',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Kabasaran',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Sundang',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Sulawesi Utara',
            'music_image' => 'music1.jpg',
            'tradition' => 'Makanan Cakalang Pampis',
            'flash_info' => 'Terletak di utara Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sulawesi Tenggara',
            'capital' => 'Ibu Kota Kendari',
            'local_language' => 'Bahasa Tolaki',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'Bugis',
            'regional_house' => 'Rumah Adat Konawe',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Pakarena',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Kampilan',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Sulawesi Tenggara',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Tolaki',
            'flash_info' => 'Terletak di tenggara Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Sulawesi Selatan',
            'capital' => 'Bahasa Bugis',
            'local_language' => 'Bugis',
            'island' => 'Terletak di Pulau Sulawesi.',
            'population' => 1000000,
            'ethnic' => 'bugis',
            'regional_house' => 'Rumah Bugis-Makassar',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Ma\'gellu',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'La Galigo',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Gendang Makassar',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Mappacci',
            'flash_info' => 'Merupakan provinsi terpadat di Sulawesi.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Maluku Utara',
            'capital' => 'Ibu Kota Sofifi',
            'local_language' => 'Bahasa Ternate',
            'island' => 'Terletak di Kepulauan Maluku.',
            'population' => 1000000,
            'ethnic' => 'Ternate',
            'regional_house' => 'Rumah Adat Tobelo',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Cakalele',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Sasi',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Maluku Utara',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pesta Rakyat',
            'flash_info' => 'Terletak di utara Kepulauan Maluku.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Maluku',
            'capital' => 'Ibu Kota Ambon',
            'local_language' => 'Bahasa Ambon',
            'island' => 'Terletak di Kepulauan Maluku.',
            'population' => 1000000,
            'ethnic' => 'Ambonese',
            'regional_house' => 'Rumah Adat Maluku',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Sajo Moa',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Cakalele',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Kolintang Maluku',
            'music_image' => 'music1.jpg',
            'tradition' => 'Pawai Nusantara',
            'flash_info' => 'Terkenal dengan keindahan bawah laut dan kekayaan budaya.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua Barat',
            'capital' => 'Ibu Kota Manokwari',
            'local_language' => 'Bahasa Papua',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Honai',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Rumanggai',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua Barat',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Bakar Batu',
            'flash_info' => 'Merupakan bagian barat dari Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua',
            'capital' => 'Ibu Kota Jayapura',
            'local_language' => 'Bahasa Papua',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Rumah Kaki Seribu',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Sajojo',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua',
            'music_image' => 'music1.jpg',
            'tradition' => 'Tari Cendrawasih',
            'flash_info' => 'Merupakan bagian timur dari Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua Tengah',
            'capital' => 'Ibu Kota Nabire',
            'local_language' => 'Bahasa Biak',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Rumah Adat Nabire',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Kowar',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Korowai',
            'flash_info' => 'Terletak di bagian tengah Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua Pegunungan',
            'capital' => 'Ibu Kota Jayawijaya',
            'local_language' => 'Bahasa Lani',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Rumah Honai',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Ampera',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua Pegunungan',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Seagull',
            'flash_info' => 'Terletak di pegunungan tengah Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua Selatan',
            'capital' => 'Ibu Kota Merauke',
            'local_language' => 'Bahasa Muyu',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Rumah Honai',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Noken',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua Selatan',
            'music_image' => 'music1.jpg',
            'tradition' => 'Upacara Adat Maro',
            'flash_info' => 'Terletak di bagian selatan Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        Province::create([
            'province_name' => 'Papua Barat Daya',
            'capital' => 'Ibu Kota Sorong',
            'local_language' => 'Bahasa Sorong',
            'island' => 'Terletak di Pulau Papua.',
            'population' => 1000000,
            'ethnic' => 'Papuan',
            'regional_house' => 'Honai',
            'regional_house_image' => 'house1.jpg',
            'dance' => 'Tari Kabasaran',
            'dance_image' => 'dance1.jpg',
            'weapon' => 'Panah dan busur',
            'weapon_image' => 'weapon1.jpg',
            'music' => 'Tifa Papua Barat Daya',
            'music_image' => 'music1.jpg',
            'tradition' => 'Festival Kaimana',
            'flash_info' => 'Terletak di barat daya Pulau Papua.',
            // 'more_detail' => 'More detail 1',
        ]);

        $provinceData = Province::all();
    }
}
