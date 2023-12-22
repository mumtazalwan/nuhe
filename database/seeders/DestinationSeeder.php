<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Candi Borobudur',
            'banner' => null,
            'image' => Storage::url('borobudur_image.png'),
            'location' => 'Candi Borobudur terletak di Jawa Tengah, Indonesia, sekitar 40 kilometer sebelah barat daya Yogyakarta. Berdiri megah di antara lereng Gunung Merapi, Merbabu, dan Menoreh, candi ini menjadi salah satu situs sejarah terpenting di Indonesia. Lokasinya yang berada di tengah-tengah pegunungan memberikan pemandangan spektakuler saat matahari terbit, menciptakan suasana magis yang menakjubkan bagi pengunjungnya.',
            'province_id' => 3,
            'history' => 'Candi Borobudur adalah salah satu situs bersejarah terbesar di Indonesia dan merupakan monumen Buddha terbesar di dunia. Berlokasi di Jawa Tengah, candi ini dibangun pada abad ke-8 atau ke-9 Masehi selama masa pemerintahan Dinasti Sailendra. Konon, pembangunan Candi Borobudur dimulai pada masa pemerintahan Raja Samaratungga dari Dinasti Sailendra. Bangunan megah ini memiliki desain yang mengagumkan, terdiri dari sembilan tingkat: tiga tingkat di bawah tanah (dianggap sebagai dunia bawah), empat tingkat teras persegi (dianggap sebagai dunia manusia), dan dua tingkat teras bulat di bagian atas (dianggap sebagai dunia dewa). Arsitektur Borobudur sangat menakjubkan dengan terdapat lebih dari 2.500 relief yang menggambarkan ajaran Buddha dan kehidupan sehari-hari pada masa itu. Struktur ini juga melambangkan perjalanan spiritual menuju pencerahan sesuai ajaran Buddha. Setelah masa kejayaannya, Borobudur mengalami masa terlantar dan tertutup oleh abu vulkanik selama berabad-abad. Pada abad ke-19, ditemukan kembali dan kemudian dilakukan proyek restorasi besar-besaran yang mengembalikan kejayaan dan keindahannya. Sekarang, Candi Borobudur menjadi salah satu destinasi wisata terkenal di Indonesia dan menjadi Warisan Dunia UNESCO.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Candi Borobudur, ikon sejarah Indonesia, menawarkan pengalaman menakjubkan dengan arsitektur megahnya. Dalam kunjungan, pemandu lokal memberikan wawasan mendalam tentang sejarah dan relief-relief candi. Pengunjung dapat menikmati museum kecil yang memamerkan artefak berharga, serta layanan audio guide yang informatif. Fasilitas lain seperti toko suvenir, area parkir, dan tempat ibadah juga tersedia untuk kenyamanan pengunjung. Selain itu, pengalaman relaksasi dapat ditemukan melalui pijat tradisional Jawa di sekitar kompleks candi.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Candi Borobudur menarik karena merupakan monumen Buddha terbesar di dunia dengan arsitektur yang megah dan lebih dari 2.500 relief yang menggambarkan ajaran Buddha serta kehidupan pada masa lalu. Keindahan, nilai sejarah, dan kompleksitas simbol-simbol spiritualnya menjadikannya destinasi yang memukau bagi para pengunjung yang tertarik dengan sejarah, seni, dan spiritualitas.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Gunung Boromo',
            'banner' => null,
            'image' => Storage::url('bromo_image.jpg'),
            'location' => 'Gunung Bromo terletak di Taman Nasional Bromo Tengger Semeru, yang berada di Jawa Timur, Indonesia. Secara geografis, gunung ini dapat diakses dari beberapa daerah di sekitarnya seperti Probolinggo, Pasuruan, atau Malang. Salah satu akses utama menuju Gunung Bromo adalah melalui Probolinggo atau Pasuruan. Kawasan sekitar Gunung Bromo menawarkan pemandangan alam yang spektakuler, dengan lautan pasir, kawah aktif, dan lanskap pegunungan yang memukau.',
            'province_id' => 3,
            'history' => 'Gunung Bromo, bagian dari Taman Nasional Bromo Tengger Semeru di Jawa Timur, adalah salah satu ikon alam Indonesia yang menakjubkan. Selain keindahan alamnya yang spektakuler, gunung ini juga terkait erat dengan nilai mitologis dalam budaya Tengger. Legenda lokal menceritakan tentang Roro Anteng dan Joko Seger yang harus menyerahkan anak mereka ke kawah Gunung Bromo sebagai pengorbanan kepada dewa-dewa guna menjaga keselamatan daerah tersebut dari letusan gunung.

            Secara geologis, Gunung Bromo adalah kawah aktif yang pernah mengalami letusan besar pada tahun 2010 yang memengaruhi wilayah sekitarnya. Meskipun demikian, keindahan lanskapnya yang ikonik dengan lautan pasir, kawah yang mengeluarkan asap, dan panorama pegunungan tetap memikat wisatawan lokal maupun mancanegara. Setiap tahun, masyarakat Tengger juga menggelar Upacara Kasada, sebuah tradisi yang melibatkan tawaran kepada gunung sebagai ekspresi dari kepercayaan dan budaya lokal mereka.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Dibangun di atas keindahan pemandangan alam, Gunung Bromo menawarkan pesona yang tak terlupakan di Taman Nasional Bromo Tengger Semeru. Saat matahari menyingsing, Bukit Penanjakan menjadi tempat magis untuk menyaksikan keindahan spektakuler matahari terbit, menciptakan siluet gunung dan lautan kabut yang memukau. Pendakian menuju kawah Gunung Bromo, baik dengan berjalan kaki atau menunggang kuda melintasi lautan pasir, membawa pengunjung ke dekatnya dengan kegairahan kawah aktif yang memancarkan asap lembut. Di sepanjang perjalanan, padang savana yang luas memukau dengan hijaunya tanaman dan lanskap alami yang menakjubkan, menciptakan gambaran tak terlupakan dari kekayaan alam Indonesia.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Di antara gemerlap gunung dan lautan kabut, Gunung Bromo memancarkan pesona alam yang menakjubkan di Taman Nasional Bromo Tengger Semeru. Saat matahari merayakan kedatangannya, Bukit Penanjakan menyuguhkan pertunjukan spektakuler dengan pemandangan matahari terbit yang memancarkan sinarnya di antara gemerlapnya kabut, menampilkan pemandangan dramatis Gunung Bromo yang menjulang gagah. Petualangan berlanjut dengan perjalanan mendebarkan menuju kawah gunung melalui lautan pasir yang memikat, di mana asap halusnya menyambut pengunjung dengan kehangatan gunung yang terjaga. Di sepanjang perjalanan, savana yang luas memanjakan mata dengan kehijauan dan lanskap alam yang tak terlupakan, menawarkan kekayaan alam yang memikat hati.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Monas',
            'banner' => null,
            'image' => Storage::url('monas_image.png'),
            'location' => 'Candi Borobudur terletak di Jawa Tengah, Indonesia, sekitar 40 kilometer sebelah barat daya Yogyakarta. Berdiri megah di antara lereng Gunung Merapi, Merbabu, dan Menoreh, candi ini menjadi salah satu situs sejarah terpenting di Indonesia. Lokasinya yang berada di tengah-tengah pegunungan memberikan pemandangan spektakuler saat matahari terbit, menciptakan suasana magis yang menakjubkan bagi pengunjungnya.',
            'province_id' => 3,
            'history' => 'Monumen Nasional (Monas) yang megah dan ikonik di Jakarta, Indonesia, menjadi simbol penting dalam sejarah dan budaya negara ini. Dibangun antara tahun 1961 hingga 1975 di bawah kepemimpinan Presiden Soekarno, Monas menjadi monumen untuk mengenang perjuangan dan kemerdekaan Indonesia dari masa penjajahan Belanda. Desainnya yang unik menampilkan obelisk setinggi 132 meter yang melambangkan semangat kemerdekaan.

            Arsitektur Monas mencerminkan banyak simbolisme. Bagian obelisk yang berujung tajam melambangkan semangat dan tekad untuk meraih kemerdekaan yang tak terkalahkan. Bagian dasar monumen menyerupai lingga, sebuah simbol dari kekuatan kosmik dalam kepercayaan Hindu-Buddha. Di dalam Monas, terdapat ruang museum yang memamerkan koleksi artefak sejarah Indonesia, mulai dari perjuangan kemerdekaan hingga benda-benda bersejarah lainnya.

            Sebagai salah satu landmark terkenal di Indonesia, Monas menjadi tempat populer bagi wisatawan lokal maupun mancanegara yang ingin menikmati pemandangan Jakarta dari ketinggian observatorium di puncaknya. Monas tetap menjadi simbol kebanggaan bagi rakyat Indonesia, mengingatkan akan perjuangan dan kebebasan yang diupayakan oleh para pendahulu dalam meraih kemerdekaan negara.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Monumen Nasional (Monas) menawarkan berbagai fasilitas bagi pengunjung, termasuk observatorium di puncaknya yang menyuguhkan pemandangan megah Kota Jakarta, area museum yang menampilkan artefak sejarah Indonesia, serta lift untuk mencapai tingkat puncak dengan mudah. Selain itu, terdapat ruang audio visual yang memberikan informasi mengenai sejarah Monas dan perjuangan kemerdekaan Indonesia. Area sekitar Monas juga dilengkapi dengan taman indah yang menjadi tempat istirahat yang nyaman bagi pengunjung.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Monas, sebagai simbol kebanggaan Indonesia, menawarkan beberapa poin menarik yang membuatnya destinasi yang tak terlupakan. Puncak Monas menampakkan observatorium yang mengundang pengunjung untuk menyaksikan keelokan Jakarta dari ketinggian, menampilkan gemerlapnya ibu kota yang berkembang pesat. Di dalam kompleksnya, museum yang kaya dengan koleksi artefak sejarah Indonesia menjadi magnet bagi pengunjung yang ingin menggali perjuangan dan kekayaan budaya bangsa. Arsitektur monumen ini dengan obelisk setinggi 132 meter tak hanya menjadi lambang kemerdekaan, tetapi juga sarana untuk menikmati simbolisme historis yang dalam. Taman yang menghiasi area sekitarnya memberikan ruang santai yang nyaman sambil menikmati keindahan alam dan nilai-nilai sejarah yang terkandung di dalamnya.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Lawang Sewu',
            'banner' => null,
            'image' => Storage::url('lawangsewu_image.jpg'),
            'location' => 'Lawang Sewu, terletak di pusat kota Semarang, Jawa Tengah, Indonesia, menghadirkan pesona yang memukau bagi pengunjungnya. Bangunan ini dikelilingi oleh area yang kaya akan nilai sejarah kolonial Belanda di mana arsitektur megahnya mencerminkan warisan zaman dahulu. Lokasinya yang strategis memudahkan akses bagi wisatawan yang ingin menjelajahi keindahan dan kekayaan sejarah Semarang, menawarkan pengalaman yang tak terlupakan dalam memahami masa lalu yang beragam.',
            'province_id' => 3,
            'history' => 'Lawang Sewu, yang secara harfiah berarti "seribu pintu" dalam bahasa Jawa, adalah salah satu ikon sejarah Semarang, Jawa Tengah, yang sarat dengan kisah yang menarik. Dibangun pada awal abad ke-20 oleh pemerintah kolonial Belanda, bangunan ini awalnya menjadi kantor pusat perusahaan kereta api Hindia Belanda. Disebut "seribu pintu" karena desainnya yang memiliki banyak pintu dan jendela besar yang mengesankan. Namun, sebenarnya jumlah pintu dan jendela tidak sampai seribu.

            Selama pendudukan Jepang di masa Perang Dunia II, Lawang Sewu memiliki periode kelam sebagai pusat penahanan dan interogasi tahanan perang. Selain digunakan sebagai stasiun kereta api, bangunan ini juga memiliki terowongan bawah tanah yang digunakan sebagai jalur aman untuk menghindari bom pada masa perang.

            Setelah kemerdekaan Indonesia, Lawang Sewu menjadi pusat administrasi milik Pemerintah Indonesia hingga akhirnya dikelola oleh PT Kereta Api Indonesia. Saat ini, bangunan ini telah diubah menjadi objek wisata sejarah yang menarik bagi pengunjung, menampilkan arsitektur megah kolonial Belanda dan mengingatkan akan sejarah beragam yang dimiliki Semarang.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Lawang Sewu mengundang para pengunjung untuk menikmati pengalaman bersejarah yang memukau. Di dalamnya, terdapat tur yang membawa pengunjung menjelajahi sejarah bangunan ini, dari masa kejayaannya sebagai kantor perusahaan kereta api Hindia Belanda hingga periode kelam saat pendudukan Jepang. Arsitektur kolonial Belanda yang megah, pintu dan jendela bersejarah, serta koleksi artefak dan informasi sejarah yang ditampilkan di museum kecil di dalam kompleks bangunan, semuanya menjadi daya tarik tersendiri bagi pengunjung yang ingin menyelami warisan sejarah yang kaya dari Lawang Sewu.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Lawang Sewu, dengan harfiah yang berarti "seribu pintu" dalam bahasa Jawa, adalah sebuah bangunan bersejarah yang mencengangkan di Semarang, Jawa Tengah. Arsitektur kolonial Belanda yang megah, dengan pintu-pintu besar, jendela-jendela klasik, dan desain yang mengesankan, menarik perhatian para pengunjung. Bangunan ini memiliki sejarah yang kaya, dari masa kejayaannya sebagai kantor administrasi kereta api Hindia Belanda hingga penggunaannya sebagai tempat penahanan selama pendudukan Jepang. Di dalam Lawang Sewu, terdapat tur sejarah yang memungkinkan pengunjung menjelajahi ruang-ruangnya yang bersejarah, museum kecil yang memamerkan artefak dan informasi sejarah, serta atmosfer yang memikat dengan nuansa masa lalu yang tak terlupakan.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Tanah Lot',
            'banner' => null,
            'image' => Storage::url('tanahlot_image.jpg'),
            'location' => 'Tanah Lot adalah sebuah kuil Hindu yang terletak di pesisir barat daya Bali, Indonesia. Kuil ini dikenal karena berdiri di atas batu karang besar di tengah laut, menjadi salah satu ikonik destinasi wisata pulau itu. Selain keindahan arsitektur dan tempat ibadahnya, Tanah Lot menawarkan pemandangan matahari terbenam yang menakjubkan, menjadikannya tempat yang populer bagi wisatawan yang ingin menikmati keindahan alam dan keunikan budaya Bali secara bersamaan.',
            'province_id' => 3,
            'history' => 'Tanah Lot memiliki sejarah kaya yang terkait erat dengan warisan budaya Bali. Kuil ini diyakini telah dibangun pada abad ke-16 oleh seorang pendeta Hindu, Dang Hyang Nirartha, yang dikenal sebagai tokoh spiritual penting di Bali. Menurut legenda, Nirartha datang ke Bali dari Jawa untuk menyebarkan ajaran agama Hindu. Dia memilih Tanah Lot sebagai tempat suci untuk meditasi karena keindahan alamnya yang menakjubkan dan ketenangan yang dimilikinya.

Sejak dibangunnya kuil ini, Tanah Lot telah menjadi tempat suci dan tempat pemujaan bagi umat Hindu Bali. Kuil ini menjadi pusat kegiatan keagamaan, dan pada hari-hari tertentu, terutama saat perayaan besar Hindu, banyak umat Hindu datang ke sini untuk bersembahyang dan melakukan ritual keagamaan.

Namun, selain sebagai tempat ibadah, Tanah Lot telah menjadi salah satu destinasi wisata terpopuler di Bali. Keunikan lokasinya yang berada di atas batu karang besar di tengah laut, serta pemandangan matahari terbenam yang menakjubkan, telah menarik perhatian wisatawan dari berbagai penjuru dunia, menjadikannya salah satu ikon pariwisata Bali yang paling ikonik.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Di Tanah Lot, pengunjung dapat menikmati berbagai fasilitas yang mendukung pengalaman wisata mereka. Di sekitar area kuil, terdapat area parkir yang luas untuk kendaraan pengunjung. Terdapat juga sejumlah warung dan toko suvenir yang menjual beragam barang seperti pakaian tradisional Bali, kerajinan tangan, dan cenderamata lokal. Restoran-restoran dan kafe di sekitar lokasi menawarkan pemandangan menakjubkan sambil menikmati hidangan kuliner Bali dan internasional. Selain itu, terdapat area observasi yang memberikan pemandangan yang spektakuler terhadap Tanah Lot dan lautan sekitarnya, menjadi tempat yang ideal bagi mereka yang ingin menikmati matahari terbenam yang memukau.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Tanah Lot menggoda pengunjung dengan kombinasi uniknya antara keindahan arsitektur kuil yang berdiri di atas batu karang di tengah laut dengan pemandangan matahari terbenam yang memukau. Keindahan alam yang menakjubkan ini menjadi magnet bagi wisatawan yang ingin mengalami suasana keagungan spiritual dan kecantikan alam Bali secara bersamaan. Disamping itu, lokasinya yang strategis dan daya tariknya sebagai tempat pemujaan Hindu juga menambah daya tariknya sebagai salah satu destinasi wisata terkenal di pulau Dewata ini.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Pulau Komodo',
            'banner' => null,
            'image' => Storage::url('pulaukomodo_image.jpg'),
            'location' => 'Pulau Komodo terletak di Provinsi Nusa Tenggara Timur, Indonesia, sebagai bagian dari Taman Nasional Komodo yang juga termasuk pulau-pulau sekitarnya seperti Rinca dan Padar. Kawasan ini terkenal karena menjadi habitat bagi komodo, kadal raksasa yang menjadi spesies endemik di Indonesia. Dikelilingi oleh perairan yang kaya akan keanekaragaman hayati laut, pulau ini juga menjadi surga bagi para penyelam dan penggemar snorkeling yang ingin mengeksplorasi keindahan bawah lautnya yang mempesona.',
            'province_id' => 3,
            'history' => 'Pulau Komodo, terletak di Provinsi Nusa Tenggara Timur, Indonesia, memiliki sejarah yang kaya. Perjalanan menjadi tempat wisata terkenal dimulai ketika Komodo dan pulau-pulau sekitarnya diresmikan sebagai Taman Nasional pada tahun 1980. Keputusan ini diambil untuk melindungi komodo, kadal raksasa yang merupakan spesies endemik dan salah satu hewan terbesar di dunia, yang hanya ditemukan di kepulauan ini. Langkah ini seiring dengan upaya konservasi untuk melestarikan lingkungan alam serta mempertahankan keberadaan komodo.

Sebelumnya, komodo sering dianggap sebagai makhluk mitos oleh masyarakat lokal. Namun, pada awal abad ke-20, ekspedisi ilmiah memperkenalkan keberadaan komodo secara lebih luas kepada dunia. Ketertarikan ilmiah ini menjadi dasar bagi perlindungan dan penelitian lebih lanjut terhadap spesies ini. Perlahan tapi pasti, Pulau Komodo menjadi tujuan populer bagi ilmuwan dan peneliti untuk mempelajari perilaku serta kehidupan liar komodo.

Dengan keunikan alam dan hewan endemiknya, Pulau Komodo akhirnya menjadi tujuan wisata yang menarik. Wisatawan dari seluruh dunia datang untuk melihat komodo secara langsung dalam habitat alaminya. Selain komodo, keindahan alam, pantai yang memikat, serta aktivitas snorkeling dan diving di perairan yang kaya akan kehidupan laut menjadikan Pulau Komodo sebagai salah satu destinasi wisata yang sangat dicari di Indonesia.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Di Pulau Komodo, pengunjung dapat menikmati berbagai kegiatan menarik, termasuk trekking untuk menjelajahi keindahan alamnya yang memukau sambil menemukan komodo, kadal raksasa yang menjadi ikon pulau tersebut, dalam habitat aslinya. Tur mengamati komodo dipandu oleh ranger berpengalaman yang akan membimbing pengunjung ke area-area di mana komodo sering terlihat, memberikan pengalaman mendebarkan dan unik melihat hewan-hewan raksasa ini dalam lingkungan alaminya. Selain itu, snorkeling dan diving di perairan sekitar pulau menawarkan pengalaman yang luar biasa untuk menyaksikan keanekaragaman hayati laut yang kaya dan eksotis.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Pulau Komodo menawarkan pengalaman yang tak terlupakan dengan keindahan alamnya yang megah dan menjadi habitat bagi komodo, kadal raksasa yang menjadi daya tarik utama. Di sini, para pengunjung dapat menikmati trekking melalui pemandangan alam yang spektakuler, menjelajahi kehidupan liar, serta menyaksikan komodo dalam habitat aslinya melalui tur yang dipandu oleh ranger berpengalaman. Selain itu, kegiatan snorkeling atau diving di perairannya yang kaya akan kehidupan laut menjadi pengalaman yang memukau bagi pecinta alam bawah laut. Pulau Komodo merupakan destinasi wisata yang menakjubkan untuk menyatu dengan keindahan alam dan hewan-hewan unik yang mendiami pulau ini.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Taman Laut Bunaken',
            'banner' => null,
            'image' => Storage::url('monas_image.jpg'),
            'location' => 'Taman Laut Bunaken terletak di Sulawesi Utara, Indonesia, yang dikenal sebagai salah satu tujuan utama bagi para penyelam. Taman laut ini menawarkan keindahan bawah laut yang luar biasa dengan terumbu karang yang kaya akan keanekaragaman hayati laut. Dengan akses mudah dari Manado, perairannya yang jernih dan dipenuhi dengan ragam spesies ikan, terumbu karang yang megah, serta panorama alam bawah laut yang menakjubkan, menjadikan Bunaken sebagai surga bagi para penyelam dan penggemar snorkeling yang ingin mengeksplorasi kekayaan biota laut yang mempesona.',
            'province_id' => 3,
            'history' => 'Taman Laut Bunaken memiliki sejarah yang mencakup langkah-langkah perlindungan dan konservasi terhadap keanekaragaman hayati laut yang dimulai sejak tahun 1980-an. Pada tahun 1991, Indonesia secara resmi mendeklarasikan wilayah ini sebagai taman laut nasional untuk melindungi ekosistem terumbu karang dan kehidupan lautnya yang kaya. Langkah-langkah konservasi ini melibatkan upaya perlindungan terhadap spesies laut dan terumbu karang, serta pengelolaan ekowisata dengan mempertimbangkan dampak terhadap lingkungan. Keterlibatan masyarakat lokal dan lembaga konservasi memainkan peran penting dalam menjaga kelestarian Taman Laut Bunaken sebagai salah satu surga bawah laut yang terkenal di Indonesia.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Taman Laut Bunaken adalah surga bawah laut yang menakjubkan di Sulawesi Utara, Indonesia. Di sini, pengunjung dapat menikmati pengalaman snorkeling atau diving yang luar biasa, menyaksikan terumbu karang yang indah dan kehidupan laut yang kaya akan keanekaragaman. Berenang di antara ikan-ikan berwarna-warni, melihat biota laut yang unik, dan menjelajahi spot-spot diving yang menakjubkan menjadi kegiatan tak terlupakan bagi para pecinta alam bawah laut. Selain itu, keberadaan konservasi dan perlindungan lingkungan yang ketat menjadikan Taman Laut Bunaken sebagai tempat yang ideal untuk menikmati keindahan alam sambil memahami pentingnya menjaga ekosistem laut yang rapuh.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Taman Laut Bunaken adalah destinasi yang memukau dengan keanekaragaman hayati lautnya yang luar biasa. Salah satu daya tarik utamanya adalah kehidupan bawah laut yang kaya, dengan terumbu karang yang megah dan beragam spesies ikan yang memikat. Aktivitas snorkeling dan diving menjadi pengalaman yang tak terlupakan di sini, memungkinkan pengunjung untuk mengeksplorasi keindahan terumbu karang yang mempesona sambil berinteraksi dengan berbagai hewan laut yang eksotis. Selain itu, kesadaran akan perlindungan lingkungan dan kegiatan konservasi menjadi fokus penting di Taman Laut Bunaken, mengajak pengunjung untuk mengapresiasi dan mendukung upaya menjaga kelestarian ekosistem laut yang berharga ini.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Pulau Seribu',
            'banner' => null,
            'image' => Storage::url('pulauseribu_image.jpg'),
            'location' => 'Pulau Seribu adalah gugusan pulau yang terletak di Teluk Jakarta, Indonesia, membentang di sepanjang pantai utara Jakarta dengan lanskap yang memukau dan air laut yang jernih. Terdiri dari sekitar 110 pulau kecil dan besar, beberapa di antaranya menjadi tujuan wisata populer bagi pelancong lokal maupun internasional. Keindahan alam bawah lautnya yang menakjubkan menjadi daya tarik utama bagi para penyelam dan snorkeling, sementara pantai-pantai berpasir putih dan kegiatan air lainnya seperti menyelam, berlayar, dan menikmati sunset menjadi daya tarik lain yang tak terlupakan bagi pengunjung yang datang ke sini.',
            'province_id' => 3,
            'history' => 'Pulau Seribu memiliki sejarah yang kaya dan beragam. Pada zaman kolonial Belanda, pulau-pulau ini digunakan sebagai tempat peristirahatan bagi pejabat pemerintah dan orang-orang kaya. Selain itu, pulau-pulau ini juga memiliki sejarah terkait dengan aktivitas nelayan yang tinggal di sekitar wilayah tersebut selama bertahun-tahun.

Pada masa Orde Baru di Indonesia, pulau-pulau ini mengalami perkembangan pariwisata yang signifikan. Pemerintah mulai mengembangkan infrastruktur pariwisata, membangun resor, dan menarik investasi untuk mendukung pertumbuhan industri wisata di wilayah tersebut.

Namun, seiring dengan pertumbuhan pariwisata, Pulau Seribu juga menghadapi tantangan terkait pengelolaan lingkungan dan pemeliharaan kelestarian alam. Masalah seperti polusi, penangkapan ikan yang berlebihan, dan pengembangan yang tidak terkontrol telah menjadi perhatian dalam upaya melestarikan keindahan alam dan ekosistem yang unik di pulau-pulau tersebut.

Selain itu, Pulau Seribu juga memiliki sejarah terkait dengan kebudayaan lokal dan adat istiadat masyarakat pesisir yang tinggal di sana. Mereka memiliki kehidupan tradisional yang terkait erat dengan laut dan alam sekitarnya, menjaga kearifan lokal dan keberlanjutan sumber daya alam yang mereka butuhkan untuk kehidupan sehari-hari.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Pulau Seribu menawarkan beragam aktivitas yang memikat bagi para pengunjungnya. Aktivitas utama meliputi snorkeling dan menyelam di perairan yang jernih, memungkinkan untuk mengeksplorasi keindahan terumbu karang yang kaya akan kehidupan laut yang beragam. Pulau-pulau ini juga menyediakan fasilitas untuk berlayar, baik dengan perahu tradisional maupun modern, sehingga pengunjung dapat menikmati keindahan panorama laut yang luas.

Selain itu, pantai-pantai pasir putih di Pulau Seribu menjadi tempat ideal untuk bersantai, berjemur, atau bermain olahraga pantai seperti voli. Beberapa pulau juga menawarkan hiking ringan atau trekking kecil di sekitar area pulau, memungkinkan pengunjung untuk menikmati keindahan alam daratan dan pemandangan yang menakjubkan. Ada juga peluang untuk menikmati kegiatan lain seperti memancing, berkemah, atau hanya menikmati keindahan matahari terbenam yang spektakuler di ufuk laut Pulau Seribu.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Daya tarik Pulau Seribu terletak pada keindahan alamnya yang menakjubkan. Pulau-pulau dengan pasir putih, air laut yang jernih, serta terumbu karang yang indah menjadi magnet bagi wisatawan yang ingin menikmati kecantikan alam bawah lautnya melalui snorkeling dan menyelam. Keberagaman hayati yang luar biasa dalam bentuk ikan-ikan warna-warni, terumbu karang yang hidup, serta kehadiran hewan-hewan laut menarik perhatian para pecinta alam.

Selain itu, panorama laut yang memukau juga menawarkan pengalaman berlayar yang mengasyikkan. Aktivitas ini memungkinkan wisatawan untuk menjelajahi pulau-pulau sekitar, menikmati angin laut, dan menyaksikan keindahan pemandangan laut yang luas. Sementara itu, pantai-pantai yang tenang dan bersih menjadi tempat ideal untuk bersantai sambil menikmati matahari atau berbagai kegiatan olahraga pantai. Keseluruhan pengalaman di Pulau Seribu memberikan sentuhan harmoni antara keindahan alam, petualangan di laut, dan ketenangan di tepi pantai.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Pantai Pandawa',
            'banner' => null,
            'image' => Storage::url('pantaipandawa_image.jpg'),
            'location' => 'Pantai Pandawa terletak di selatan Bali, Indonesia, di antara dua bukit yang menjulang tinggi, memberikan suasana pantai yang eksklusif dan indah. Tersembunyi di balik tebing-tebing kapur yang kokoh, pantai ini terkenal dengan pasir putihnya yang halus dan air lautnya yang jernih. Pantai Pandawa menawarkan pemandangan alam yang menakjubkan serta kesempatan bagi pengunjung untuk menikmati kegiatan seperti berjemur, berenang, dan menikmati olahraga air seperti jetski atau banana boat. Tempat ini juga dikenal dengan patung-patung lima Pandawa yang megah yang menghiasi sisi tebing, menambahkan sentuhan budaya dan keindahan alam yang unik bagi pengunjung yang datang ke pantai ini.',
            'province_id' => 3,
            'history' => 'Pantai Pandawa memiliki sejarah yang menarik di Pulau Bali, Indonesia. Dahulu, pantai ini tidak begitu terjangkau karena aksesnya yang sulit melalui tebing-tebing kapur yang tinggi. Pada tahun 1990-an, pemerintah setempat melakukan pembukaan jalan menuju pantai ini, membuatnya lebih mudah diakses oleh wisatawan dan masyarakat umum.

Sebelum menjadi tujuan wisata yang populer, Pantai Pandawa juga dikenal sebagai pantai yang kurang ramai dan lebih terpencil. Namun, dengan pengembangan infrastruktur dan promosi pariwisata yang dilakukan oleh pemerintah setempat, Pantai Pandawa mulai dikenal sebagai destinasi wisata yang menarik dengan pasir putihnya yang indah dan air laut yang jernih.

Selain keindahan alamnya, pantai ini juga dihiasi dengan patung-patung lima tokoh Pandawa dari kisah epik Mahabharata yang dibangun pada tahun 2010-an. Patung-patung ini menjadi salah satu daya tarik tambahan dan menjadi bagian dari keunikan pantai ini. Sejak saat itu, Pantai Pandawa telah menjadi salah satu destinasi favorit bagi wisatawan yang mengunjungi Bali, menawarkan keindahan alam serta sentuhan budaya yang memikat.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Pantai Pandawa menawarkan beragam kegiatan yang memikat bagi pengunjungnya. Di sini, Anda bisa menikmati keindahan pantai dengan pasir putihnya yang halus, berjemur di bawah sinar matahari yang hangat, atau sekadar bersantai sambil menikmati pemandangan laut yang memukau. Wisatawan juga dapat berenang di air laut yang jernih atau menyewa peralatan untuk aktivitas olahraga air seperti jetski, banana boat, atau parasailing. Selain itu, pantai ini merupakan tempat yang tepat untuk menikmati kelezatan hidangan laut yang segar di warung-warung pinggir pantai yang menawarkan berbagai hidangan lokal. Jika Anda tertarik dengan seni dan budaya, patung-patung Pandawa yang megah di sisi tebing juga dapat dinikmati sebagai bagian dari pengalaman unik di Pantai Pandawa.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Pantai Pandawa menarik perhatian dengan beberapa poin menarik yang membuatnya menjadi destinasi yang diminati di Bali. Salah satunya adalah keindahan alamnya yang luar biasa, terutama dengan pasir putih yang halus dan air laut yang jernih, menciptakan atmosfer yang tenang dan mempesona bagi para pengunjung yang ingin bersantai atau berjemur.

Patung-patung lima tokoh Pandawa yang megah yang menghiasi sisi tebing menjadi daya tarik lainnya, menambahkan nuansa budaya dan nilai seni yang unik di pantai ini. Terletak di antara tebing-tebing kapur yang menjulang tinggi, Pantai Pandawa juga menawarkan pengalaman yang eksklusif dengan suasana yang lebih sepi dan tenang dibandingkan dengan beberapa pantai lain di Bali.

Aktivitas seperti berenang, menyelam, atau menikmati olahraga air juga tersedia di sini, menambahkan kesempatan bagi pengunjung untuk mengeksplorasi keindahan bawah laut atau sekadar memiliki waktu yang menyenangkan di tepi pantai. Terakhir, keberadaan warung-warung pinggir pantai yang menyajikan hidangan laut segar merupakan nilai tambah bagi wisatawan yang ingin merasakan kelezatan kuliner lokal sembari menikmati pemandangan laut yang menakjubkan.',
            'interesting_image' => ''
        ]);

        Destination::create([
            'name' => 'Raja Ampat',
            'banner' => null,
            'image' => Storage::url('rajaampat_image.jpg'),
            'location' => 'Raja Ampat terletak di Provinsi Papua Barat, Indonesia, merupakan gugusan kepulauan yang terkenal akan keindahan alam bawah lautnya yang luar biasa. Terdiri dari sekitar 1.500 pulau kecil yang tersebar di sekitar Samudera Pasifik, Raja Ampat menjadi tujuan utama bagi para penyelam dan pecinta alam karena keanekaragaman hayati yang luar biasa di bawah permukaan airnya. Terumbu karang yang spektakuler, beragam spesies ikan tropis, dan kehadiran hewan-hewan laut yang langka, seperti hiu paus dan penyu, menjadikan Raja Ampat sebagai surga bagi para penggemar keindahan laut yang belum tersentuh oleh perkembangan modern secara besar-besaran.',
            'province_id' => 3,
            'history' => 'Sejarah Raja Ampat meliputi warisan budaya yang kaya dan perjalanan yang beragam. Secara historis, wilayah ini telah menjadi rumah bagi suku asli yang disebut sebagai orang Papua, yang hidup di kepulauan ini sejak ribuan tahun yang lalu. Mereka memiliki tradisi nelayan yang kuat dan hubungan yang erat dengan laut, memanfaatkan kekayaan alam untuk kebutuhan mereka sehari-hari. Budaya mereka, termasuk seni, tarian, dan musik tradisional, menjadi bagian penting dari sejarah Raja Ampat.

Pada abad ke-16, Raja Ampat menjadi pusat perdagangan rempah-rempah dan jalur pelayaran penting bagi bangsa-bangsa maritim seperti Belanda dan Spanyol. Kedatangan para pedagang Eropa membawa perubahan besar dalam dinamika wilayah ini, termasuk pengenalan agama dan budaya baru. Namun, kehadiran kolonialisme Eropa juga membawa konsekuensi yang signifikan terhadap kehidupan tradisional masyarakat setempat.

Selama abad ke-20, Raja Ampat menjadi bagian dari Indonesia setelah kemerdekaannya dari penjajahan Belanda. Wilayah ini terus mempertahankan kekayaan alamnya yang menakjubkan, tetapi juga mengalami perubahan dalam hal pengembangan infrastruktur pariwisata dan kegiatan ekonomi lainnya. Seiring dengan peningkatan minat wisatawan terhadap keindahan alam bawah lautnya yang luar biasa, Raja Ampat menjadi destinasi yang terkenal di dunia bagi para penyelam dan pencinta alam. Peran penting untuk melestarikan lingkungan alamnya tetap menjadi fokus, di tengah upaya untuk menjaga keseimbangan antara pariwisata dan keberlanjutan lingkungan.',
            'image_history_one' => '',
            'image_history_two' => '',
            'attraction' => 'Raja Ampat menawarkan sejumlah kegiatan luar biasa bagi pengunjungnya. Salah satunya adalah penyelaman atau snorkeling di perairan yang kaya akan keanekaragaman hayati. Terumbu karang yang spektakuler, ikan-ikan warna-warni, hingga hewan-hewan laut langka seperti hiu paus dan penyu, menawarkan pengalaman bawah laut yang tak terlupakan bagi para pecinta alam.

Selain itu, eksplorasi pulau-pulau kecil di sekitar Raja Ampat juga sangat menarik. Pengunjung dapat melakukan perjalanan ke pulau-pulau terpencil, berjalan-jalan di hutan belantara, atau menikmati keindahan pantai yang bersih dan terpencil. Aktivitas lainnya termasuk berlayar di perairan yang tenang, menyusuri pantai dengan kayak, atau menikmati keindahan matahari terbenam yang memukau di tepi pantai.

Bagi yang tertarik dengan budaya lokal, berinteraksi dengan masyarakat Papua asli juga menjadi pengalaman yang berharga. Mengenal kehidupan sehari-hari mereka, belajar tentang kebiasaan dan tradisi mereka, serta menikmati seni, musik, dan tarian tradisional dapat menambah kedalaman pengalaman di Raja Ampat. Dengan begitu banyaknya aktivitas menarik, Raja Ampat menjadi surga bagi pencinta alam, petualang, dan mereka yang mencari pengalaman yang tak terlupakan di alam yang belum tersentuh.',
            'image_attraction_one' => '',
            'image_attraction_two' => '',
            'interesting_point' => 'Raja Ampat adalah surga bagi para pecinta alam dengan kekayaan hayati bawah laut yang luar biasa. Terumbu karang yang spektakuler, lebih dari 1.500 spesies ikan, dan keberadaan hewan laut langka seperti hiu paus dan penyu menjadikan destinasi ini sebagai surganya penyelam dan penggemar snorkeling. Di atas permukaan, pulau-pulau terpencil dengan pasir putih, tebing-tebing yang menjulang, serta hutan belantara yang menakjubkan menawarkan pemandangan alam yang memukau. Interaksi dengan masyarakat Papua asli, mengeksplorasi kehidupan sehari-hari mereka, dan menikmati seni budaya lokal menjadi pengalaman yang kaya bagi pengunjung yang ingin merasakan keindahan alam yang belum tersentuh dan kekayaan budaya yang unik.',
            'interesting_image' => ''
        ]);
    }
}
