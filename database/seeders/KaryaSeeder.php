<?php

namespace Database\Seeders;

use App\Models\Art;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Art::create([
            "id" => "1",
            "image_path" => "/images/ruangIndependen/pameran/coverhp1.png",
            "title" => "Kenapa Harus Viral Dulu-Amy Fitria",
            "nama_pembuat" => "ESTEFANY FORTUNA CHANDRA",
            "link" => "https://www.figma.com/proto/lLkpk0csvY9kJFzKEG5YZw/Untitled?node-id=2%3A2&scaling=sca",
            "tipe" => "artikel interaktif",
        ]);

        Art::create([
            "id" => "2",
            "image_path" => "/images/ruangIndependen/pameran/coverhp2.png",
            "title" => "Menembus Batas: Berani Meraih Prestasi Dalam Keterbatasan Fisik - Helen Keller",
            "nama_pembuat" => "ARFINA ERLIENCANI",
            "link" => "https://www.figma.com/proto/iJs1lTXBH6oz5iuU3MaxtN/Untitled?node-id=2%3A3&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A3&show-proto-sidebar=1",
            "tipe" => "artikel interaktif",
        ]);

        Art::create([
            "id" => "3",
            "image_path" => "/images/ruangIndependen/pameran/coverhp3.png",
            "title" => "Kisah Perjuangan Merry Riana: Sejuta Mimpi, Sejuta Harapan",
            "nama_pembuat" => "JOCELYN VALENCIA SISWANTO",
            "link" => "https://www.figma.com/proto/wRUOyxkVKSxraFtk66iHWz/Kisah-Perjuangan-Merry-Riana%3A-Sejuta-Mimpi%2C-Sejuta-Harapan?page-id=0%3A1&node-id=77%3A54&viewport=241%2C48%2C0.5&scaling=scale-down&starting-point-node-id=77%3A54",
            "tipe" => "artikel interaktif",
        ]);

        Art::create([
            "id" => "4",
            "image_path" => "/images/ruangIndependen/pameran/coverhp4.png",
            "title" => "Pejuang Tanah adat - Petrus Asuy",
            "nama_pembuat" => "TANNAYU HANGNO",
            "link" => "https://www.figma.com/proto/MOKITGulYK1ubR7ffoxB4N/Untitled?node-id=2%3A2&scaling=scale-down&page-id=0%3A1&starting-point-node-id=2%3A2&show-proto-sidebar=1",
            "tipe" => "artikel interaktif",
        ]);

        Art::create([
            "id" => "5",
            "image_path" => "/images/ruangIndependen/pameran/coverhp5.png",
            "title" => "Seoul, Korea Selatan Bayi 16 Bulan Meninggal, Mengalami Kekerasan Oleh Ayah dan Ibu Angkatnya",
            "nama_pembuat" => "FIEBE VIRGINIA",
            "link" => "https://www.figma.com/proto/1rGHq71YjoCqtOlSSooXoR/Untitled?page-id=0%3A1&nodeid=13%3A12&viewport=241%2C48%2C0.5&scaling=scale-down&starting-point-nodeid=13%3A12&node-id=60%3A83&starting-point-node-id=13%3A12",
            "tipe" => "artikel interaktif",
        ]);

        Art::create([
            "id" => "6",
            "image_path" => "/images/ruangIndependen/pameran/batik.jpeg",
            "title" => "Kampung Batik Kembang Mayang 'Menanti Regenerasi Pembatik Muda'",
            "nama_pembuat" => "Arfinna Erliencani",
            "link" => "https://www.instagram.com/reel/Cys572BP_wr/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "7",
            "image_path" => "/images/ruangIndependen/pameran/guru.jpeg",
            "title" => "Keterbatasan bukan penghalang untuk bekerja keras",
            "nama_pembuat" => "Zahra Zakiah",
            "link" => "https://www.instagram.com/reel/CytX4PWhh8l/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "8",
            "image_path" => "/images/ruangIndependen/pameran/teh yan.jpeg",
            "title" => "Maestro Legendaris Teh Yan 'Terakhir' Di Tangerang",
            "nama_pembuat" => "Jessica Adriana",
            "link" => "https://www.instagram.com/reel/CyrmKw2PCZj/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "9",
            "image_path" => "/images/ruangIndependen/pameran/pantiasuhan.jpeg",
            "title" => "Tempat Bernaung Bagi Mereka yang Terlantar",
            "nama_pembuat" => "Samuel Martinus",
            "link" => "https://www.instagram.com/reel/Cyn2GcqR2pG/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "10",
            "image_path" => "/images/ruangIndependen/pameran/wayangkristal.jpeg",
            "title" => "Wayang Kristal; Langkah Kecil dari Sampah",
            "nama_pembuat" => "Tannayu Hangno",
            "link" => "https://www.instagram.com/reel/CymvcY6hu6h/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "11",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 1.jpg",
            "title" => "CETAR #1 - Cerita Anak Kampung (Kota) Tangerang Raya",
            "deskripsi" => "Tangerang Raya telah bertransformasi menjadi kawasan tinggal yang modern dan elit. Komplek perumahan menjamur, tetapi masih banyak juga kawasan kampung kota. Sementara anak -anak komplek dapat menikmati fasilitas bermain seperti taman bermain dan kolam renang di dalam perumahan atau clubhouse, anak-anak yang tinggal di luar perumahan tidak bisa mengakses fasilitas yang sama secara leluasa. Di episode \"Bahagianya Anak yang Tinggal di Kampung\",  kami ikut bermain bersama anak-anak yang tinggal di kampung kota. Yuk ikuti keseruan kami bermain dengan mereka!",
            "link" => "https://open.spotify.com/episode/4idfSxBjkqH7EsxXkn0PFz?si=a8caed7cf2f544df",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "12",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 2.png",
            "title" => "CETAR #2 - Sepanjang Jalan Tangerang",
            "deskripsi" => "Kawasan Tangerang Raya berkembang pesat sebagai kawasan penyangga Jakarta. Di banyak area tertentu, kita bisa menemukan banyak jalanan lebar yang dilengkapi trotoar. Kerapihan yang tak merata ini cukup memberi kesan modern seperti kota-kota di negara maju. Sayangnya, perkembangan transportasi publik tidak sama pesatnya.

            Di episode 'Sepanjang Jalan Tangerang' ini, kami mencari jawaban dari pertanyaan kenapa sih tidak semua kawasan di Tangerang Raya  terhubung oleh angkutan umum? Kira-kira transportasi umum mana yang cenderung lebih nyaman, cepat, dan harganya yang ramah di kantong? Untuk mengetahui jawabannya, yuk ikuti perjalanan reporter kami berjalan-jalan dengan angkutan umum lalu membandingkannya dengan taksi daring.",
            "link" => "https://open.spotify.com/episode/4idfSxBjkqH7EsxXkn0PFz?si=ee8da77e91944880",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "13",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 3.png",
            "title" => "CETAR #3 - SKKM: Sirkel dan Kasta Kehidupan Mahasiswa",
            "deskripsi" => "Ada mahasiswa yang memiliki kehidupan mewah dan serba ada. Ada mahasiswa yang harus berhemat untuk memenuhi kebutuhan ngekos dan kuliah. Kok bisa beda banget ya kehidupan mahasiswa dan mahasiswi ini? Nah, episode kali ini akan membahas mengenai gaya hidup mahasiswa dan mahasiswi di perguruan tinggi swasta daerah Tangerang Raya.

            Apakah benar gaya hidup yang berbeda tersebut menciptakan strata pergaulan di antara mereka? Yuk, dengerin episode “SKKM: Sirkel dan Kasta Kehidupan Mahasiswa” untuk mencari tahu ceritanya!",
            "link" => "https://open.spotify.com/episode/5UgJTFsTzdbTLWuV07M44Q?si=6d066b6d22b14dbf",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "14",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 4.png",
            "title" => "CETAR #4 - Sebulan Hidup di Tangerang Raya, Berapa Sih Pengeluarannya?",
            "deskripsi" => "Episode kali ini berbicara tentang seberapa besar perbedaan biaya hidup bulanan warga klaster dengan warga kampung, dan apa saja yang mempengaruhinya. Kami mewawancarai berbagai narasumber untuk membandingkan berapa pengeluaran dan pemasukan mereka serta apakah sebanding dengan UMR wilayah Tangerang.",
            "link" => "https://open.spotify.com/episode/2Eq4d9pfRDai4lMi5Xihkx?si=a19ec793239b4387",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "15",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 5.jpg",
            "title" => "CETAR #5 - Dompet Terkuras, Timbangkan Kualitas",
            "deskripsi" => "Perguruan Tinggi Swasta atau PTS bergengsi yang ada di sekitaran Tangerang raya, dengan “harga” yang ditawarkan, apakah imbang dengan “kualitas yang diberikan? Episode kali ini menghadirkan perspektif mahasiswa dari PTS yang bersangkutan dan juga Pengamat pendidikan untuk meninjau lebih lanjut.",
            "link" => "https://open.spotify.com/episode/3XxftCjpZfySvOJvtHayIQ?si=969fe0ca0c074009",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "16",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 6.png",
            "title" => "CETAR #6 - AADC: Ada Apa di Cluster?",
            "deskripsi" => "Komplek perumahan identik dengan pemagaran dan akses yang terbatas. Kenyamanan dan keamanan yang ditawarkan komplek perumahan menarik minat warga dengan ekonomi menengah atas untuk tinggal di sana.

            Lalu, bagaimana perkembangan gated housing yang sangat pesat ini memengaruhi gaya hidup penduduk urban? Di episode “AADC: Ada Apa di Cluster?”, kami mengulas gaya hidup di gated housing yang semakin menjamur di Tangerang Raya. Apa sih yang membuat tinggal di komplek itu berbeda?",
            "link" => "https://open.spotify.com/episode/7319ldH9aCHEANcMZ09NSV?si=27625ab1362b4916",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "17",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 7.png",
            "title" => "CETAR #7 - Kita yang Tak Setara",
            "deskripsi" => "Masih adakah di antara kita yang menganggap kalau kualitas sekolah dasar negeri ketinggalan dari sekolah dasar swasta? Di kawasan Tangerang Raya — yang mencakup Kota Tangerang Selatan, Kota Tangerang, Kabupaten Tangerang — pertumbuhan sekolah dasar swasta terlihat pesat. Gedungnya mentereng, reputasinya bagus, dan tentunya: mahal-mahal. Lalu, bagaimana nasib sekolah dasar negeri di kawasan ini? Temukan dan dengarkan, “Kita yang Tak Setara”, dokumenter audio tentang sekolah dasar negeri di Tangerang Raya.",
            "link" => "https://open.spotify.com/episode/3OuJmJYG9sr1Qs6rrfVzwU?si=107209d5076c4eb0",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "18",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 81.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 1): Semarak Hajatan",
            "deskripsi" => "Mari sejenak kita melihat ke realita kehidupan yang berbeda dari biasanya. Dalam part pertama dari episode “Kehidupan Kampung-Kota Tangerang”, kita akan mengenal budaya gotong royong dan keramahan dari masyarakat desa Curug Sangereng yang berada di jantung dari Gading Serpong lewat nikahan dari Teh Dewi. Seru? Pasti! Dramatis? Yuk, dengarkan sendiri rasanya mengikuti hajatan ini.",
            "link" => "https://open.spotify.com/episode/6ugYdT6IWa1sBjlqiakpQu?si=fe197d8d737b489b",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "19",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 82.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 2): Tong Tong Tong",
            "deskripsi" => "Pada part kedua dari episode “Kehidupan Kampung-Kota Tangerang”, kita akan melihat kehidupan masyarakat di Gading Serpong. Bukan, bukan kehidupan yang terjadi di balik gerbang-gerbang cluster perumahan mewah. Ini cerita tentang mereka yang hidup dan mencari penghidupan di desa Curug Sangereng, di tengah gemerlapnya Gading Serpong yang tampak sangat modern.",
            "link" => "https://open.spotify.com/episode/7LSXRwvx0Ry8V4C6gHnn9H?si=14c519f1b28a48cc",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "20",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 83.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 3): Tanah Semen",
            "deskripsi" => "Enak ya rasanya tinggal di BSD dan area dari Gading Serpong ini. Namun, hal berbeda terjadi dengan kampung-kampung yang ada di sekelilingnya. Part ketiga dari episode Kehidupan Kampung Kota Tangerang kali ini akan mengulik terkait hal tersebut. Selengkapnya dapat teman-teman dengarkan dalam episode ini.",
            "link" => "https://open.spotify.com/episode/5JHftxh1YnXFSMe7DJF46U?si=a43e04ab87cf460c",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "21",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 9.png",
            "title" => "CETAR #9 - The Astonishing Intermoda Terminal",
            "deskripsi" => "Terminal termodern yang terintegrasi dengan berbagai transportasi umum ini bernama terminal Intermoda. Dalam episode ini, tim Jelajah berhasil mengelilingi Stasiun Cisauk, Intermoda. Suasana stasiun masih terasa sepi karena mayoritas masyarakat di Tangerang Selatan memiliki kebiasaan car-oriented. Padahal, stasiun ini dinobatkan sebagai stasiun paling maju yang menyediakan berbagai fasilitas apik. Mengejutkannya, hanya di Cisauk, terminal bus dan stasiun KRL berada dalam lokasi yang sama. Namun, mengapa banyak orang lebih memilih menggunakan transportasi pribadi? Stasiun ini sebenarnya hadir untuk memudahkan masyarakat Gading Serpong dan BSD bepergian jarak jauh menggunakan transportasi umum dengan harga yang terjangkau.",
            "link" => "https://open.spotify.com/episode/6cYDazJEHSwpJE8W0oambP?si=2a3c0e5c76f24c22",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "22",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 10.png",
            "title" => "CETAR #10 - The Truth Behind: Property Invesment Owner",
            "deskripsi" => "Ingin terjun ke investasi properti tapi belum tahu caranya gimana? Udah lama mau main investasi properti tapi gatau peluang kedepannya seperti apa? Bisa jadi sekarang adalah waktunya mimpi kamu terwujud nih, karena investasi properti sekarang lagi naik daun dan banyak yang menekuni bidang tersebut!

            Audio Dokumenter \"The Truth Behind: Property Investment Owner\" akan menjawab semua pertanyaan kalian. Kali ini Jovita, ditemani dengan dua pakar properti yaitu Virlando dan Dion selaku pemilik properti awam akan membahas tentang investasi properti yang cocok untuk pemula, khususnya properti di bidang kos-kosan dan apartemen di daerah Jakarta dan Tangerang, serta tips-tips menarik untuk pemula, lengkap dengan risikonya. Mau tau lebih lanjut? Langsung dengerin aja The Truth Behind episode spesial ini.",
            "link" => "https://open.spotify.com/episode/3vCXl94uqZx1SNGCKoUKfv?si=022e63dc01964488",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "23",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 11.png",
            "title" => "CETAR #11 - Sengitnya Memiliki Rumah di Atas Sempitnya Tanah",
            "deskripsi" => "Pada 2014 Menteri Perumahan Rakyat, Djan Faridz, melaporkan 60 perusahaan pengembang properti besar, seperti Grup Ciputra, Alam Sutera, dan Sinarmas Land yang melanggar pasal-pasal dalam Undang-Undang Nomor 1 Tahun 2011 tentang Pembangunan Hunian Berimbang bagi Masyarakat Berpenghasilan Rendah. Namun, sampai 2022 ini perusahaan-perusahaan tersebut tetap membangun properti mahal sehingga terkesan tidak mematuhi undang-undang. Akibatnya, semakin banyak masyarakat, khususnya kaum milenial, yang kesulitan mencari rumah terjangkau dan layak huni sehingga dikhawatirkan pada masa depan, akan tumbuh banyak kawasan kumuh.

            \"Mereka berumah tangga, mereka can not afford untuk mendapatkan rumah karena mereka butuh, tapi can not afford purchasing power mereka dibandingkan harga rumahnya lebih tinggi sehingga mereka end up either tinggal di rumah mertua atau dia nyewa,\" pernyataan Sri Mulyani pada pertemuan G20 ini mendukung kekhawatiran generasi milenial akan melambungnya harga rumah yang naik setiap tahun. Episode perdana ini diharapkan menjadi cahaya yang dapat menjawab keresahan masyarakat, meredakan asumsi, memotivasi tiap insan, dan berdampak baik bagi khalayak ramai.",
            "link" => "https://open.spotify.com/episode/3vCXl94uqZx1SNGCKoUKfv?si=4ae736b2f4c94106",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "24",
            "image_path" => "/images/ruangIndependen/pameran/CETAR 12.png",
            "title" => "CETAR #12 - Aksi Kucing-kucingan PKL dan Satpol PP",
            "deskripsi" => "Sesuai dengan undang undang Lalu Lintas dan Angkutan Jalan UU LAJ : Pasal 28 ayat (2) jo. Pasal 25 ayat (1), ”Setiap orang dilarang melakukan perbuatan yang mengakibatkan gangguan pada fungsi perlengkapan Jalan. Dalam konteks ini yang dimaksud adalah trotoar sebagai fasilitas untuk pejalan kaki yang terganggu fungsinya menjadi tempat berdagang,” bunyinya. Undang-undang tentang lalu lintas dan angkutan jalan ini menjelaskan tentang trotoar sebagai fasilitas pejalan kaki terganggu fungsinya, maka sesuai tugasnya satpol pp melakukan aksinya. Namun, kenyataan dari aksi kejar - kejaran ini tak sekejam seperti yang diceritakan televisi.Adanya perjanjian kedua belah pihak ikut menjadi sumber utama kejar - kejaran ini sudah tak terlihat.

            Seperti yang terjadi di Tangerang yang melibatkan aparat keamanan Gading Serpong dan PKL. undang-undang mengenai lalu lintas dan angkutan jalan ini tidak diikuti oleh kedua belah pihak, baik aparat keamanan Gading Serpong maupun pedagang kaki lima (PKL). Penertiban PKL sampai saat ini masih terjadi. Perbedaannya ialah seperti yang kita tahu, dahulu kejar-kejaran tersebut tidak dapat dihindari dikarenakan PKL yang takut dagangan yang ia jual di ambil oleh pihak yang melakukan penertiban dan tidak jarang juga kejadian pemaksaan dalam melakukan penertiban. Akan tetapi, situasi saat ini berbeda. Kedua pihak tersebut tidak lagi melakukan aksi kejar-kejaran karena saat ini mereka saling membantu satu sama lain dengan membayar iuran. Para pedagang mengatakan bahwa aparat keamanan hanya mengikuti apa kata atasannya.",
            "link" => "https://open.spotify.com/episode/4YIK97wdoxDOuD4QojRyen?si=875e8030bd8945f4",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "25",
            "image_path" => "/images/ruangIndependen/pameran/lookalike.png",
            "title" => "LOOKALIKE",
            "deskripsi" => "It's not about brand, it's about style",
            "link" => "https://issuu.com/lookalikedcp/docs/fauget_1_",
            "tipe" => "e-magazine",
        ]);

        Art::create([
            "id" => "26",
            "image_path" => "/images/ruangIndependen/pameran/attention.png",
            "title" => "Attention!",
            "deskripsi" => "a reference for your preferences",
            "link" => "https://heyzine.com/flip-book/6d9e44e0c1.html",
            "tipe" => "e-magazine",
        ]);

        Art::create([
            "id" => "27",
            "image_path" => "/images/ruangIndependen/pameran/e-sport.jpg",
            "title" => "E-SPOT",
            "deskripsi" => "The Spotlight for E-Sports",
            "link" => "https://heyzine.com/flip-book/b18123c743.html",
            "tipe" => "e-magazine",
        ]);

        Art::create([
            "id" => "28",
            "image_path" => "/images/ruangIndependen/pameran/clbk.jpg",
            "title" => "CLBK",
            "deskripsi" => "Cerita Lama Bangkit Kembali",
            "link" => "https://heyzine.com/flip-book/b18123c743.html",
            "tipe" => "e-magazine",
        ]);

        Art::create([
            "id" => "29",
            "image_path" => "/images/ruangIndependen/pameran/makanan.jpg",
            "title" => "DARURAT SAMPAH MAKANAN",
            "deskripsi" => "Sampah Makanan Indonesia Keempat di Dunia & Pertama di Asia Tengara",
            "link" => "https://heyzine.com/flip-book/b18123c743.html",
            "tipe" => "e-magazine",
        ]);

        

        Art::create([
            "id" => "31",
            "image_path" => "/images/ruangIndependen/pameran/foodwaste.jpeg",
            "title" => "Meningkatnya Sampah Makanan di Tengah Ancaman Krisis Pangan: Ketidakacuhan Hotel dalam Mengelola Sampah Makanan",
            "link" => "https://drive.google.com/file/d/1tRHMQkfnlsUiXcyyHgKv1Sq1RJUJLQBP/view?usp=sharing",
            "tipe" => "indepth artikel",
        ]);

        Art::create([
            "id" => "32",
            "image_path" => "/images/ruangIndependen/pameran/goverment.jpeg",
            "title" => "Indonesian gov't turn to companies to handle plastic waste",
            "link" => "https://drive.google.com/file/d/14JUL-bNLiXlNcdU2aL6LxZqNqwpfjNt_/view?usp=sharing",
            "tipe" => "indepth artikel",
        ]);

        Art::create([
            "id" => "33",
            "image_path" => "/images/ruangIndependen/pameran/harassment.jpeg",
            "title" => "Kekerasan Seksual di UMN: Tak Ada Laporan, Bukan Berarti Tak Ada Kejadian",
            "link" => "https://drive.google.com/file/d/1x5y8XsKhuDW46Cab8zGUQgHP1_6GsxhD/view?usp=sharing",
            "tipe" => "indepth artikel",
        ]);

        Art::create([
            "id" => "34",
            "image_path" => "/images/ruangIndependen/pameran/dosbing.jpeg",
            "title" => "Efektifkah Dosen Pembimbing Akademik Membantu Mahasiswa?",
            "link" => "https://drive.google.com/file/d/19gvEb2XrtzvEOibHeo2oBkXZHnOjO0zi/view?usp=sharing",
            "tipe" => "indepth artikel",
        ]);

        Art::create([
            "id" => "35",
            "image_path" => "/images/ruangIndependen/pameran/dropout.jpeg",
            "title" => "Fenomena Putus Kuliah: Salah Pemerintah, Kampus, atau Mahasiswanya?",
            "link" => "https://drive.google.com/file/d/1u4JLwlRyipGXxryYUOPF4euUsZRz-0LA/view?usp=sharing",
            "tipe" => "indepth artikel",
        ]);

        Art::create([
            "id" => "36",
            "image_path" => "/images/ruangIndependen/pameran/biara.png",
            "title" => "Hidup Membiara Bukanlah Hal yang Mudah",
            "deskripsi"=> "Hidup membiara merupakan suatu hal yang mulia.
            Menjadi seorang biarawan dituntut untuk
            mengabdikan diri kepada Tuhan Yesus dalam
            meneruskan cinta kasih-Nya terhadap sesama. Hal
            ini yang dilakukan oleh Suster Maria Gabriela SFS
            (Gebi) dalam meneruskan cinta kasih di dalam
            sebuah panti jompo WIsma Asisi Kota Sukabumi.
            <br><br>
            Dalam menjalankan tugasnya tentu banyak sekali
            masalah yang timbul dalam sebuah panti jompo
            terlebih karena sifat orang tua yang kembali memiliki
            sifat kekanak-kanakan. Namun, Suster Gebi tetap
            sabar dalam mengelola sebuah panti jompo dari
            mulai menemani, melayani dan menyiapkan
            kebutuhan para lansia sehari-hari.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "46",
            "image_path" => "/images/ruangIndependen/pameran/biara_feed1.png",
            "deskripsi"=> "Suster Gebi menenangkan Oma",
            "tipe" => "photostory feed biara",
        ]);

        Art::create([
            "id" => "47",
            "image_path" => "/images/ruangIndependen/pameran/biara_feed2.png",
            "deskripsi"=> "Suster Gebi sedang memasak untuk opa dan oma",
            "tipe" => "photostory feed biara",
        ]);

        Art::create([
            "id" => "48",
            "image_path" => "/images/ruangIndependen/pameran/biara_feed3.png",
            "deskripsi"=> "Suster Gebi melakukan pencatatan administrasi",
            "tipe" => "photostory feed biara",
        ]);

        Art::create([
            "id" => "49",
            "image_path" => "/images/ruangIndependen/pameran/biara_feed4.png",
            "deskripsi"=> "Oma Vince atau sering disapa Oma Pipin",
            "tipe" => "photostory feed biara",
        ]);

        Art::create([
            "id" => "50",
            "image_path" => "/images/ruangIndependen/pameran/biara_feed5.png",
            "deskripsi"=> "Opa oma sedang bekumpul dan berbincang",
            "tipe" => "photostory feed biara",
        ]);

        Art::create([
            "id" => "37",
            "image_path" => "/images/ruangIndependen/pameran/bartender.png",
            "title" => "BARTENDER ALSO AN ARTIST",
            "deskripsi"=> "Bartender adalah orang yang bertugas meracik dan menyajikan minuman
            beralkohol kepada tamu di sebuah bar. Kebanyakan tamu yang datang
            memiliki tujuan utama yaitu untuk mencicipi racikan signature dari para
            bartender, seperti Old Fashion Cocktailed, Blue Havana's, ataupun Tom
            Collins. Membuat setiap minuman dari banyaknya deretan botol yang sudah
            tersusun sesuai kategori adalah kemampuan mereka.
            <br><br>
            Bartender juga seorang seniman, bartender menuangkan seni mereka ke
            dalam setiap minuman yang mereka racik.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "38",
            "image_path" => "/images/ruangIndependen/pameran/difabel.png",
            "title" => "BURUH DIFABEL: DIBAYAR MURAH, SAYA TAK MASALAH",
            "deskripsi"=> "\"Setiap 50 gram dijual sepuluh ribu, setiap
            50 gram saya dibayar 500 rupiah,\" <br>Itulah yang diucapkan Dadang (53), seorang
            buruh difabel di industri ikan petek krispi di
            Cipeyeum, Cianjur, Jawa Barat.
            <br><br>
            Setelah kehilangan kedua kakinya akibat
            tetanus pada 2018 silam, tidak ada tempat
            yang menerima kondisinya selain pabrik ikan
            petek krispi. Terhitung lima tahun Dadang
            menggantungkan nasib diri dan keluarganya
            di tempat tersebut.
            <br><br>
            Meskipun kondisi fisiknya berbeda dengan pegawai lain, Dadang lebih senang
            diperlakukan dan diperintahkan untuk mengerjakan tugas yang sama seperti
            yang lainnya. Baginya, keterbatasan bukan batasan, melainkan peluang untuk
            menunjukkan kehebatan. Oleh karena itu, tak jarang ia menawarkan diri
            untuk mengantarkan sekarung bumbu dari gudang ke pabrik menggunakan
            skateboardnya.
            <br><br>
            “Dengan kondisi saya, saya tidak mengharapkan upah besar. Dibayar sangat
            murah pun sudah alhamdulillah.” tutup Dadang.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "51",
            "image_path" => "/images/ruangIndependen/pameran/bartender_feed1.png",
            "deskripsi"=> "Rabu (17/5/2023) Kumpulan pria berusia sekitar 42-47 tahun
            berkumpul, duduk santai di Bar Tiga Puluh. Berbincang
            membahas kehidupan sehari-hari hingga bisnis sambil
            memesan Beer Draught, Tom Collins, dan lain-lain",
            "tipe" => "photostory feed bartender",
        ]);

        Art::create([
            "id" => "52",
            "image_path" => "/images/ruangIndependen/pameran/bartender_feed2.png",
            "deskripsi"=> "Bartender melayani
            dan menyajikan
            minuman kepada
            tamu sesuai dengan
            pesanan yaitu
            Orange Margarita.
            Tamu dapat dengan
            
            bebas
            menyampaikan
            request untuk
            minuman yang akan
            dipesan",
            "tipe" => "photostory feed bartender",
        ]);

        Art::create([
            "id" => "53",
            "image_path" => "/images/ruangIndependen/pameran/bartender_feed3.png",
            "deskripsi"=> "Customer menikmati Old Fashion Cocktailed. Salah satu
            classic cocktail di tahun '80-an, pertama kali dibuat oleh
            Jerry Thomas di Amerika",
            "tipe" => "photostory feed bartender",
        ]);

        Art::create([
            "id" => "54",
            "image_path" => "/images/ruangIndependen/pameran/bartender_feed4.png",
            "deskripsi"=> "Bartender
            menaruh Gin di rak
            penyimpanan
            khusus kategori
            Gin. Peletakan
            botol dikategorikan
            sesuai dengan
            jenis-jenisnya.",
            "tipe" => "photostory feed bartender",
        ]);

        Art::create([
            "id" => "55",
            "image_path" => "/images/ruangIndependen/pameran/bartender_feed5.png",
            "deskripsi"=> "Sederet susunan botol Tequila",
            "tipe" => "photostory feed bartender",
        ]);

        Art::create([
            "id" => "56",
            "image_path" => "/images/ruangIndependen/pameran/difabel_feed1.png",
            "deskripsi"=> "Dadang mengolah ikan petek bersama buruh lainnya.",
            "tipe" => "photostory feed difabel",
        ]);

        Art::create([
            "id" => "60",
            "image_path" => "/images/ruangIndependen/pameran/difabel_feed5.png",
            "deskripsi"=> "Produk ikan petek krispi kiloan siap jual.",
            "tipe" => "photostory feed difabel",
        ]);

        Art::create([
            "id" => "57",
            "image_path" => "/images/ruangIndependen/pameran/difabel_feed2.png",
            "deskripsi"=> "Ikan petek mentah.",
            "tipe" => "photostory feed difabel",
        ]);

        Art::create([
            "id" => "58",
            "image_path" => "/images/ruangIndependen/pameran/difabel_feed3.png",
            "deskripsi"=> "Di jam istirahat, Dadang bersantai bersama tetangganya.",
            "tipe" => "photostory feed difabel",
        ]);

        Art::create([
            "id" => "59",
            "image_path" => "/images/ruangIndependen/pameran/difabel_feed4.png",
            "deskripsi"=> "Dadang melayani pembeli ikan petek krispi.",
            "tipe" => "photostory feed difabel",
        ]);

        Art::create([
            "id" => "39",
            "image_path" => "/images/ruangIndependen/pameran/yayasan.png",
            "title" => "UNTAIAN KARSA DI UJUNG JEMARI",
            "deskripsi"=> "Yayasan Raudlatul Makfufin merupakan lembaga sosial yang bergerak dalam
            bidang pembinaan agama, mental, dan kesejahteraan sosial bagi tunanetra
            Muslim. Salah satu unit kegiatan yayasan ini adalah Unit Percetakan Braille
            (UPB) yang mencetak Al-Qur'an braille dan buku-buku braille Islami lainnya.
            UPB ini menjadi standar nasional bagi percetakan Al-Qur'an braille di
            Indonesia. 
            <br><br>
            Pencetakan Al-Qur'an braille melewati beberapa tahap. Pertama-tama, huruf braille dicetak di kertas BC 150
            menggunakan mesin pencetak braille. Setelah dicetak, pinggiran kertas braille dipotong menggunakan mesin pemotong.
            Kemudian, sisi kiri kertas braille dibolongkan. Berikutnya, spiral kawat dipotong sesuai dengan ukuran sisi kiri kertas
            braille yang telah dibolongkan. Setelah itu, spiral kawat dimasukkan ke bolongan yang ada di sisi kiri kertas braille.
            <br><br>
            Selain unit percetakan, Yayasan Raudlatul Makfufin juga memiliki pesantren khusus tunanetra Muslim yang dikepalai
            oleh Ustadz Muhammad Wijaya. Pada mulanya, pesantren ini berada di gedung yang sama dengan UPB. Namun, sejak
            2021, pesantren ini berpindah ke gedung baru. Pesantren ini memiliki 26 santri. Dari 26 santri tersebut, 25 santri tinggal
            di asrama, sedangkan 1 santri pulang pergi karena telah berkeluarga. Para ustadz dan santri pesantren ini menggunakan
            Al-Qur'an braille yang telah dicetak UPB. Di balik keistimewaan, niat dan keimanan mereka dalam mendekatkan diri
            kepada Sang Pencipta sungguh luar biasa.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "61",
            "image_path" => "/images/ruangIndependen/pameran/yayasan_feed1.png",
            "deskripsi"=> "Tumpukan kertas Al-Qur'an braille.",
            "tipe" => "photostory feed yayasan",
        ]);

        Art::create([
            "id" => "62",
            "image_path" => "/images/ruangIndependen/pameran/yayasan_feed2.png",
            "deskripsi"=> "Mata seorang santri tunanetra di Pesantren Raudlatul Makfufin, Tangerang Selatan.",
            "tipe" => "photostory feed yayasan",
        ]);

        Art::create([
            "id" => "63",
            "image_path" => "/images/ruangIndependen/pameran/yayasan_feed3.png",
            "deskripsi"=> "Pemotongan spiral kawat disesuaikan
            dengan ukuran Al-Qur'an braille yang telah
            dicetak",
            "tipe" => "photostory feed yayasan",
        ]);

        Art::create([
            "id" => "64",
            "image_path" => "/images/ruangIndependen/pameran/yayasan_feed4.png",
            "deskripsi"=> "Ustadz Muhammad Wijaya (33) mengajari
            santri tunanetra cara melafalkan Al-Qur'an
            di Pesantren Raudlatul Makfufin, Tangerang
            Selatan, Kamis (11/5/2023).",
            "tipe" => "photostory feed yayasan",
        ]);

        Art::create([
            "id" => "65",
            "image_path" => "/images/ruangIndependen/pameran/yayasan_feed5.png",
            "deskripsi"=> "Kertas panduan abjad braille latin, Arab, angka,
            syakl/harakat, tanda operasional dasar
            matematika, dan tanda baca.",
            "tipe" => "photostory feed yayasan",
        ]);

        Art::create([
            "id" => "40",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek.jpg",
            "title" => "WAYANG GOLEK PENOPANG HIDUP",
            "deskripsi"=> "Budaya tak pernah ada habisnya. Tak pernah mati terkekang waktu. Begitulah budaya terus berjalan.
            Besarnya gempuran teknologi yang terus berjalan bagai ombak besar, terus menyelimuti banyak bidang dan terus berubah
            mengikuti zaman hingga nyaris budaya bangsa tak lagi dilirik mata. Namun, berbeda dengan Iman, seorang pengrajin wayang
            Golek kelahiran Bandung ini.<br><br>
            Tumbuh di lingkungan Sunda yang kental akan nilai budaya dan adat, pria kelahiran 1974 ini, memiliki tekat yang kuat bahwa
            warisan budaya bangsa yang ada sejak zaman nenek moyang harus tetap dipertahankan. Bagai batu besar di tenah gempuran
            ombak laut.<br><br>
            Hal ini tercermin melalui karya seni budaya yang ditekuni, yakni wayang golek. Ia berhasil menciptakan peluang bagi dirinya
            berkreasi dengan budaya, berbarengan dengan nilai mata uang untuk menyandarkan hidup. Melalui tangan yang terbiasa
            menari dengan parutan pisau kayunya, ia berhasil menorehkan hasil karyanya dalam wayang golek hingga ke berbagai pelosok
            nusantara bahkan negara.<br><br>
            Bali, Sulawesi, dan Lampung menjadi daerah yang pernah terjamah hasil tangannya. Jepang, Korea, India pun tak luput dari
            pandangan menjadi bagian negara tak terlupakan bagi dirinya yang telah menerima karya jemari tangannya.
            Walaupun banyaknya wayang golek buatannya melintas ke banyak pulau dan negara, keuntungan yang didapat sebagai
            pengrajin tak sebanding dengan distributor. Penjualan pihak penyalur bisa hingga tiga kali lipat banyaknya dari harga
            penjualan pengrajin. Meski begitu, dirinya tetap teguh melestarikan budaya bangsa satu ini, agar tak luntur dan tetap berdiri
            tegak.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "66",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek_feed1.jpg",
            "deskripsi"=> "Proses meraut bahan kayu mentah untuk
            dibentuk sesuai dengan karakter yang dibuat.",
            "tipe" => "photostory feed wayanggolek",
        ]);

        Art::create([
            "id" => "67",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek_feed2.jpg",
            "deskripsi"=> "Pengamplasan bagian tubuh wayang golek.",
            "tipe" => "photostory feed wayanggolek",
        ]);

        Art::create([
            "id" => "68",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek_feed3.jpg",
            "deskripsi"=> "Potongan bagian-bagian tubuh wayang golek
            setelah melewati proses pengecatan warna
            dasar.",
            "tipe" => "photostory feed wayanggolek",
        ]);

        Art::create([
            "id" => "69",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek_feed4.jpg",
            "deskripsi"=> "Hasil wayang golek buatan tangan Iman.",
            "tipe" => "photostory feed wayanggolek",
        ]);

        Art::create([
            "id" => "70",
            "image_path" => "/images/ruangIndependen/pameran/wayanggolek_feed5.jpg",
            "deskripsi"=> "Berbagai alat potong dan raut yang digunakan dalam proses pembuatan wayang golek.",
            "tipe" => "photostory feed wayanggolek",
        ]);

        Art::create([
            "id" => "41",
            "image_path" => "/images/ruangIndependen/pameran/cilik.png",
            "title" => "BELAJAR JADI JURNALIS DARI CILIK",
            "deskripsi"=> "Belajar merupakan sebuah kegiatan yang bisa
            dilakukan dimana saja, kapan saja, dan oleh siapa
            saja. Salah satunya seperti Kelas Jurnalis Cilik yang
            diadakan di daerah pesisir ibukota, tepatnya Cilincing,
            Jakarta Utara untuk anak-anak sekolah dasar. Sesuai
            dengan namanya, secara khusus kelas ini
            mengajarkan tentang keterampilan jurnalistik yang
            sesuai dengan kode etik.
            <br><br>
            Sabtu (29/05/22) lalu, Kelas Jurnalis Cilik (angkatan) V mengadakan pertemuannya seperti biasa di pesisir. Kali ini
            pemateri yang diundang membagikan tentang sejarah jurnalisme dan juga foto jurnalistik.
            “Menurut kalian apa yang menarik dari foto ini?” tanya sang pembawa materi.
            Anak-anak terlihat sangat antusias mengikuti kelas dari awal hingga akhir. Pada pertemuan yang terakhir nanti,
            beberapa anak yang terpilih akan menampilkan dan mempresentasikan hasil karya mereka di pameran fotografi.
            Dengan sengaja pula, inisiatornya mengadakan kelas ini di ruangan yang terbuka. “Supaya anak-anak bisa tahu dan
            benar-benar merasakan bagaimana seorang jurnalis bekerja di lapangan,” jelas Syamsudin Ilyas (38).
            <br><br>
            Sabtu (29/05/22) lalu, Kelas Jurnalis Cilik (angkatan) V mengadakan pertemuannya seperti biasa di pesisir. Kali ini
            pemateri yang diundang membagikan tentang sejarah jurnalisme dan juga foto jurnalistik.
            <br><br>
            “Menurut kalian apa yang menarik dari foto ini?” tanya sang pembawa materi.
            Anak-anak terlihat sangat antusias mengikuti kelas dari awal hingga akhir. Pada pertemuan yang terakhir nanti,
            beberapa anak yang terpilih akan menampilkan dan mempresentasikan hasil karya mereka di pameran fotografi.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "71",
            "image_path" => "/images/ruangIndependen/pameran/cilik_feed1.png",
            "deskripsi"=> "Peserta KJC antusias menunjukkan contoh hasil foto pembawa materi.",
            "tipe" => "photostory feed cilik",
        ]);

        Art::create([
            "id" => "72",
            "image_path" => "/images/ruangIndependen/pameran/cilik_feed2.png",
            "deskripsi"=> "Pemateri sedang berinteraksi dengan anak-anak KJC.",
            "tipe" => "photostory feed cilik",
        ]);

        Art::create([
            "id" => "73",
            "image_path" => "/images/ruangIndependen/pameran/cilik_feed3.png",
            "deskripsi"=> "Seorang anak sedang fokus mencatat materi yang dibawakan.",
            "tipe" => "photostory feed cilik",
        ]);

        Art::create([
            "id" => "74",
            "image_path" => "/images/ruangIndependen/pameran/cilik_feed4.png",
            "deskripsi"=> "Syamsudin Ilyas (38), orang di
            balik Kelas Jurnalis Cilik sejak
            tahun 2018.",
            "tipe" => "photostory feed cilik",
        ]);

        Art::create([
            "id" => "75",
            "image_path" => "/images/ruangIndependen/pameran/cilik_feed5.png",
            "deskripsi"=> "Salah satu peserta KJC (angkatan)
            III yang sudah lulus sedang
            melakukan praktik fotografi.",
            "tipe" => "photostory feed cilik",
        ]);

        Art::create([
            "id" => "42",
            "image_path" => "/images/ruangIndependen/pameran/catcafe.jpg",
            "title" => "THE CAT CABIN: FOOD KULINER",
            "deskripsi"=> "Cafe yang buka di Kemang, Jakarta Selatan pada 14 Februari
            2015 ini menjadi awal mula inspirasi cat cafe ada di Indonesia. Cafe ini
            memiliki nuansa seperti di rumah, tidak terlalu kecil ataupun besar.
            Keunikannya bisa kita lihat disini kapan lagi kita bisa bersantai sambil
            bermain bersama kucing-kucing yang lucu. Menjual berbagai macam
            snack dan minuman. Pemilik dari cafe ini, ibu Siti Fatimah Ayuningdyah
            memiliki ide untuk membuat cafe ini dari awalnya iya sangat suka
            kucing, tetapi tidak diizinkan oleh ibunya memelihara kucing, jadilah ia
            buat tempat seperti ini, cafe dengan nuansa rumah dengan para
            kucing.
            <br><br>
            Total ada 15 kucing di cafe ini, beragam kepribadian kucing yang
            ada. Ada yang suka langsung menghampiri pengunjung, ada juga yang
            suka menyendiri, dan ada juga yang menghabiskan waktunya dengan
            tidur. Cocok sekali untuk menemani mengerjakan pekerjaan ataupun
            untuk main bersama keluarga. Untuk para penggemar kucing wajib
            untuk berkunjung ke cat cabin ini!!",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "76",
            "image_path" => "/images/ruangIndependen/pameran/catcafe_feed1.jpg",
            "deskripsi"=> "Ada papan nama semua kucing yang ada di cafe pada pintu masuk.",
            "tipe" => "photostory feed catcafe",
        ]);

        Art::create([
            "id" => "77",
            "image_path" => "/images/ruangIndependen/pameran/catcafe_feed2.jpg",
            "deskripsi"=> "Suasana terasa seperti di rumah sendiri.",
            "tipe" => "photostory feed catcafe",
        ]);

        Art::create([
            "id" => "78",
            "image_path" => "/images/ruangIndependen/pameran/catcafe_feed3.jpg",
            "deskripsi"=> "Makan minum bersama
            kucing lucu.",
            "tipe" => "photostory feed catcafe",
        ]);

        Art::create([
            "id" => "79",
            "image_path" => "/images/ruangIndependen/pameran/catcafe_feed4.jpg",
            "deskripsi"=> "Semua kucing disini terawat dan cakep-cakep.",
            "tipe" => "photostory feed catcafe",
        ]);

        Art::create([
            "id" => "43",
            "image_path" => "/images/ruangIndependen/pameran/pvc.JPG",
            "title" => "PRODUKSI PVC COMPOUND: BAHAN DASAR KABEL",
            "deskripsi"=> "PVC Compound merupakan bahan dasar
            pembuatan kabel, outsol sepatu, pipa, karet seal, door rubber, selang infus, selang kendaraan, plastik, traffic cone,
            dan botol. Pembuatan PVC Compound sendiri menggunakan bahan dasar bubuk dan cairan, seperti PVC resin,
            plastik Caesar (TOTM, DIMP, DOP, epoxy), stabilizer, dan calcium carbonate.
            Warna dari hasil produksinya pun bervariasi, seperti merah, kuning, hitam,
            biru, putih, dan lainnya.
            <br><br>
            PT Setia Kawan Plastik Indah berdiri sejak 1989, terletak di Jalan Raya Otonom Cikupa,
            Tangerang, Banten. Pabrik yang tergolong cukup lama ini memiliki 150 lebih tenaga kerjapabrik dan 6 tenaga kerja
            kantor. Atmosfer pabrik dipenuhi dengan bubuk dan
            terlihat seperti kabut sehingga tidak heran jika
            banyak tenaga kerja yang menggunakan penutup
            hidung. Suhu dari tiap bubuk berbeda-beda sehingga ada
            beberapa tenaga kerja yang
            membutuhkan sarung tangan.
            <br><br>
            Kebanyakan orang hanya mengetahui proses
            produksi sebuah barang sekunder dan tersier,
            seperti baju, sendal, gelas, dan lainnya. Namun,
            masih sedikit yang mengetahui proses produksi
            bahan baku atau bahan dasarnya. Perusahaan Setia
            Kawan Plastik Indah merupakan salah satu
            perusahaan yang bergerak dibidang bahan baku
            utama utama pembuatan
            kabel yang bernama
            PVC Compound.
            Senyawa kimia yang
            banyak digunakan ini
            memiliki nama
            panjang Polyvinyl
            Chloride.",
            "tipe" => "photostory",
        ]);

        Art::create([
            "id" => "80",
            "image_path" => "/images/ruangIndependen/pameran/pvc_feed1.JPG",
            "deskripsi"=> "Pengangkatan bahan baku ke tempat penyimpanan.",
            "tipe" => "photostory feed pvc",
        ]);

        Art::create([
            "id" => "81",
            "image_path" => "/images/ruangIndependen/pameran/pvc_feed2.JPG",
            "deskripsi"=> "Pengangkatan bahan baku ke tempat penyimpanan.",
            "tipe" => "photostory feed pvc",
        ]);

        Art::create([
            "id" => "82",
            "image_path" => "/images/ruangIndependen/pameran/pvc_feed3.jpg",
            "deskripsi"=> "Budiman Homar Wijaya
            (71), Pemilik Perusahaan
            Setia Kawan Plastik Indah.",
            "tipe" => "photostory feed pvc",
        ]);

        Art::create([
            "id" => "83",
            "image_path" => "/images/ruangIndependen/pameran/pvc_feed4.JPG",
            "deskripsi"=> "Hasil produksi PVC Compund yang sudah masuk mesin cetak.",
            "tipe" => "photostory feed pvc",
        ]);

        Art::create([
            "id" => "84",
            "image_path" => "/images/ruangIndependen/pameran/pvc_feed5.JPG",
            "deskripsi"=> "Pengeluaran bahan yang sudah tercampur dari mesin mixer.",
            "tipe" => "photostory feed pvc",
        ]);

        
    }
}
