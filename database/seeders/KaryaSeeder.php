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
            "link" => "https://multimedianusantara-my.sharepoint.com/personal/berto_basillisa_lecturer_umn_ac_id/_layouts/15/stream.aspx?id=%2Fpersonal%2Fberto%5Fbasillisa%5Flecturer%5Fumn%5Fac%5Fid%2FDocuments%2FDOCJOUR%2FBEST%20OF%206%2FKampung%20Batik%20Kembang%20Mayang%20%27Menanti%20Regenerasi%20Pembatik%20Muda%27%5FARFINNA%20ERLIENCANI%2Emp4&referrer=OneDriveForBusiness&referrerScenario=OpenFile",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "7",
            "image_path" => "/images/ruangIndependen/pameran/guru.jpeg",
            "title" => "Keterbatasan bukan penghalang untuk bekerja keras",
            "nama_pembuat" => "Zahra Zakiah",
            "link" => "https://multimedianusantara-my.sharepoint.com/personal/berto_basillisa_lecturer_umn_ac_id/_layouts/15/stream.aspx?id=%2Fpersonal%2Fberto%5Fbasillisa%5Flecturer%5Fumn%5Fac%5Fid%2FDocuments%2FDOCJOUR%2FBEST%20OF%206%2FKeterbatasan%20bukan%20penghalang%20untuk%20bekerja%20keras%5FZAHRA%20ZAKIAH%2Emov&referrer=OneDriveForBusiness&referrerScenario=OpenFile",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "8",
            "image_path" => "/images/ruangIndependen/pameran/teh yan.jpeg",
            "title" => "Maestro Legendaris Teh Yan ‘Terakhir’ Di Tangerang",
            "nama_pembuat" => "Jessica Adriana",
            "link" => "https://multimedianusantara-my.sharepoint.com/personal/berto_basillisa_lecturer_umn_ac_id/_layouts/15/stream.aspx?id=%2Fpersonal%2Fberto%5Fbasillisa%5Flecturer%5Fumn%5Fac%5Fid%2FDocuments%2FDOCJOUR%2FBEST%20OF%206%2FOEN%20SIN%20YONG%5FMAESTRO%20LEGENDARIS%20TEH%20YAN%20%E2%80%98TERAKHIR%E2%80%99%C2%A0DI%C2%A0TANGERANG%5FJESSICA%20ADRIANA%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "9",
            "image_path" => "/images/ruangIndependen/pameran/pantiasuhan.jpeg",
            "title" => "Tempat Bernaung Bagi Mereka yang Terlantar",
            "nama_pembuat" => "ASamuel Martinus",
            "link" => "https://multimedianusantara-my.sharepoint.com/personal/berto_basillisa_lecturer_umn_ac_id/_layouts/15/stream.aspx?id=%2Fpersonal%2Fberto%5Fbasillisa%5Flecturer%5Fumn%5Fac%5Fid%2FDocuments%2FDOCJOUR%2FBEST%20OF%206%2FTempat%20Bernaung%20Bagi%20Mereka%20yang%20Terlantar%5F00000042647%5FSAMUEL%20MARTINUS%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "10",
            "image_path" => "/images/ruangIndependen/pameran/wayangkristal.jpeg",
            "title" => "Wayang Kristal; Langkah Kecil dari Sampah",
            "nama_pembuat" => "Tannayu Hangno",
            "link" => "https://multimedianusantara-my.sharepoint.com/personal/berto_basillisa_lecturer_umn_ac_id/_layouts/15/stream.aspx?id=%2Fpersonal%2Fberto%5Fbasillisa%5Flecturer%5Fumn%5Fac%5Fid%2FDocuments%2FDOCJOUR%2FBEST%20OF%206%2FWayang%20Kristal%3B%20Langkah%20Kecil%20dari%20Sampah%5FTANNAYU%20HANGNO%2Emp4&referrer=StreamWebApp%2EWeb&referrerScenario=AddressBarCopied%2Eview",
            "tipe" => "video dokumenter",
        ]);

        Art::create([
            "id" => "11",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #1 - Cerita Anak Kampung (Kota) Tangerang Raya",
            "deskripsi" => "Tangerang Raya telah bertransformasi menjadi kawasan tinggal yang modern dan elit. Komplek perumahan menjamur, tetapi masih banyak juga kawasan kampung kota.<span id=\"dots1\">...</span><span id=\"more1\"> Sementara anak-anak komplek dapat menikmati fasilitas bermain seperti taman bermain dan kolam renang di dalam perumahan atau clubhouse, anak-anak yang tinggal di luar perumahan tidak bisa mengakses fasilitas yang sama secara leluasa. Di episode \"Bahagianya Anak yang Tinggal di Kampung\",  kami ikut bermain bersama anak-anak yang tinggal di kampung kota. Yuk ikuti keseruan kami bermain dengan mereka!</span>",
            "link" => "https://open.spotify.com/episode/4idfSxBjkqH7EsxXkn0PFz?si=a8caed7cf2f544df",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "12",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #2 - Sepanjang Jalan Tangerang",
            "deskripsi" => "Kawasan Tangerang Raya berkembang pesat sebagai kawasan penyangga Jakarta. Di banyak area tertentu, kita bisa menemukan banyak jalanan lebar yang dilengkapi trotoar. Kerapihan yang tak merata<span id=\"dots1\">...</span><span id=\"more1\"> ini cukup memberi kesan modern seperti kota-kota di negara maju. Sayangnya, perkembangan transportasi publik tidak sama pesatnya. 
            <br><br>
            Di episode 'Sepanjang Jalan Tangerang' ini, kami mencari jawaban dari pertanyaan kenapa sih tidak semua kawasan di Tangerang Raya  terhubung oleh angkutan umum? Kira-kira transportasi umum mana yang cenderung lebih nyaman, cepat, dan harganya yang ramah di kantong? Untuk mengetahui jawabannya, yuk ikuti perjalanan reporter kami berjalan-jalan dengan angkutan umum lalu membandingkannya dengan taksi daring.</span>",
            "link" => "https://open.spotify.com/episode/4idfSxBjkqH7EsxXkn0PFz?si=ee8da77e91944880",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "13",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #3 - SKKM: Sirkel dan Kasta Kehidupan Mahasiswa",
            "deskripsi" => "Ada mahasiswa yang memiliki kehidupan mewah dan serba ada. Ada mahasiswa yang harus berhemat untuk memenuhi kebutuhan ngekos dan kuliah.<span id=\"dots3\">...</span><span id=\"more3\"> Kok bisa beda banget ya kehidupan mahasiswa dan mahasiswi ini? Nah, episode kali ini akan membahas mengenai gaya hidup mahasiswa dan mahasiswi di perguruan tinggi swasta daerah Tangerang Raya.
            <br><br>
            Apakah benar gaya hidup yang berbeda tersebut menciptakan strata pergaulan di antara mereka? Yuk, dengerin episode “SKKM: Sirkel dan Kasta Kehidupan Mahasiswa” untuk mencari tahu ceritanya!<span>",
            "link" => "https://open.spotify.com/episode/5UgJTFsTzdbTLWuV07M44Q?si=6d066b6d22b14dbf",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "14",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #4 - Sebulan Hidup di Tangerang Raya, Berapa Sih Pengeluarannya?",
            "deskripsi" => "Episode kali ini berbicara tentang seberapa besar perbedaan biaya hidup bulanan warga klaster dengan warga kampung, dan apa saja<span id=\"dots4\">...</span><span id=\"more4\"> yang mempengaruhinya. Kami mewawancarai berbagai narasumber untuk membandingkan berapa pengeluaran dan pemasukan mereka serta apakah sebanding dengan UMR wilayah Tangerang.</span>",
            "link" => "https://open.spotify.com/episode/2Eq4d9pfRDai4lMi5Xihkx?si=a19ec793239b4387",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "15",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #5 - Dompet Terkuras, Timbangkan Kualitas",
            "deskripsi" => "Perguruan Tinggi Swasta atau PTS bergengsi yang ada di sekitaran Tangerang raya, dengan “harga” yang ditawarkan, apakah imbang dengan<span id=\"dots5\">...</span><span id=\"more5\"> “kualitas yang diberikan? Episode kali ini menghadirkan perspektif mahasiswa dari PTS yang bersangkutan dan juga Pengamat pendidikan untuk meninjau lebih lanjut.</span>",
            "link" => "https://open.spotify.com/episode/3XxftCjpZfySvOJvtHayIQ?si=969fe0ca0c074009",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "16",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #6 - AADC: Ada Apa di Cluster?",
            "deskripsi" => "Komplek perumahan identik dengan pemagaran dan akses yang terbatas. Kenyamanan dan keamanan yang ditawarkan komplek perumahan menarik minat warga dengan ekonomi<span id=\"dots6\">...</span><span id=\"more6\"> menengah atas untuk tinggal di sana.
            <br><br>
            Lalu, bagaimana perkembangan gated housing yang sangat pesat ini memengaruhi gaya hidup penduduk urban? Di episode “AADC: Ada Apa di Cluster?”, kami mengulas gaya hidup di gated housing yang semakin menjamur di Tangerang Raya. Apa sih yang membuat tinggal di komplek itu berbeda?</span>",
            "link" => "https://open.spotify.com/episode/7319ldH9aCHEANcMZ09NSV?si=27625ab1362b4916",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "17",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #7 - Kita yang Tak Setara",
            "deskripsi" => "Masih adakah di antara kita yang menganggap kalau kualitas sekolah dasar negeri ketinggalan dari sekolah dasar swasta? Di kawasan Tangerang Raya - yang mencakup Kota Tangerang Selatan<span id=\"dots7\">...</span><span id=\"more7\">, Kota Tangerang, Kabupaten Tangerang — pertumbuhan sekolah dasar swasta terlihat pesat. Gedungnya mentereng, reputasinya bagus, dan tentunya: mahal-mahal. Lalu, bagaimana nasib sekolah dasar negeri di kawasan ini? Temukan dan dengarkan, “Kita yang Tak Setara”, dokumenter audio tentang sekolah dasar negeri di Tangerang Raya.</span>",
            "link" => "https://open.spotify.com/episode/3OuJmJYG9sr1Qs6rrfVzwU?si=107209d5076c4eb0",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "18",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 1): Semarak Hajatan",
            "deskripsi" => "Mari sejenak kita melihat ke realita kehidupan yang berbeda dari biasanya. Dalam part pertama dari episode “Kehidupan Kampung-Kota Tangerang”,<span id=\"dots81\">...</span><span id=\"more81\"> kita akan mengenal budaya gotong royong dan keramahan dari masyarakat desa Curug Sangereng yang berada di jantung dari Gading Serpong lewat nikahan dari Teh Dewi. Seru? Pasti! Dramatis? Yuk, dengarkan sendiri rasanya mengikuti hajatan ini.</span>",
            "link" => "https://open.spotify.com/episode/6ugYdT6IWa1sBjlqiakpQu?si=fe197d8d737b489b",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "19",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 2): Tong Tong Tong",
            "deskripsi" => "Pada part kedua dari episode “Kehidupan Kampung-Kota Tangerang”, kita akan melihat kehidupan masyarakat di Gading Serpong. Bukan, bukan kehidupan<span id=\"dots82\">...</span><span id=\"more82\"> yang terjadi di balik gerbang-gerbang cluster perumahan mewah. Ini cerita tentang mereka yang hidup dan mencari penghidupan di desa Curug Sangereng, di tengah gemerlapnya Gading Serpong yang tampak sangat modern.</span>",
            "link" => "https://open.spotify.com/episode/7LSXRwvx0Ry8V4C6gHnn9H?si=14c519f1b28a48cc",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "20",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #8 - Kehidupan Kampung Kota Tangerang (Bagian 3): Tanah Semen",
            "deskripsi" => "Enak ya rasanya tinggal di BSD dan area dari Gading Serpong ini. Namun, hal berbeda terjadi dengan kampung-kampung<span id=\"dots83\">...</span><span id=\"more83\"> yang ada di sekelilingnya. Part ketiga dari episode Kehidupan Kampung Kota Tangerang kali ini akan mengulik terkait hal tersebut. Selengkapnya dapat teman-teman dengarkan dalam episode ini.</span>",
            "link" => "https://open.spotify.com/episode/5JHftxh1YnXFSMe7DJF46U?si=a43e04ab87cf460c",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "21",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #9 - The Astonishing Intermoda Terminal",
            "deskripsi" => "Terminal termodern yang terintegrasi dengan berbagai transportasi umum ini bernama terminal Intermoda. Dalam episode ini, tim Jelajah<span id=\"dots9\">...</span><span id=\"more9\"> berhasil mengelilingi Stasiun Cisauk, Intermoda. Suasana stasiun masih terasa sepi karena mayoritas masyarakat di Tangerang Selatan memiliki kebiasaan car-oriented. Padahal, stasiun ini dinobatkan sebagai stasiun paling maju yang menyediakan berbagai fasilitas apik. Mengejutkannya, hanya di Cisauk, terminal bus dan stasiun KRL berada dalam lokasi yang sama. Namun, mengapa banyak orang lebih memilih menggunakan transportasi pribadi? Stasiun ini sebenarnya hadir untuk memudahkan masyarakat Gading Serpong dan BSD bepergian jarak jauh menggunakan transportasi umum dengan harga yang terjangkau.</span>",
            "link" => "https://open.spotify.com/episode/6cYDazJEHSwpJE8W0oambP?si=2a3c0e5c76f24c22",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "22",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #10 - The Truth Behind: Property Invesment Owner",
            "deskripsi" => "Ingin terjun ke investasi properti tapi belum tahu caranya gimana? Udah lama mau main investasi properti tapi gatau peluang kedepannya seperti apa? Bisa jadi<span id=\"dots10\">...</span><span id=\"more10\"> sekarang adalah waktunya mimpi kamu terwujud nih, karena investasi properti sekarang lagi naik daun dan banyak yang menekuni bidang tersebut!
            <br><br>
            Audio Dokumenter \"The Truth Behind: Property Investment Owner\" akan menjawab semua pertanyaan kalian. Kali ini Jovita, ditemani dengan dua pakar properti yaitu Virlando dan Dion selaku pemilik properti awam akan membahas tentang investasi properti yang cocok untuk pemula, khususnya properti di bidang kos-kosan dan apartemen di daerah Jakarta dan Tangerang, serta tips-tips menarik untuk pemula, lengkap dengan risikonya. Mau tau lebih lanjut? Langsung dengerin aja The Truth Behind episode spesial ini.</span>",
            "link" => "https://open.spotify.com/episode/3vCXl94uqZx1SNGCKoUKfv?si=022e63dc01964488",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "23",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #11 - Sengitnya Memiliki Rumah di Atas Sempitnya Tanah",
            "deskripsi" => "Pada 2014 Menteri Perumahan Rakyat, Djan Faridz, melaporkan 60 perusahaan pengembang properti besar, seperti Grup Ciputra, Alam Sutera, dan Sinarmas<span id=\"dots11\">...</span><span id=\"more11\"> Land yang melanggar pasal-pasal dalam Undang-Undang Nomor 1 Tahun 2011 tentang Pembangunan Hunian Berimbang bagi Masyarakat Berpenghasilan Rendah. Namun, sampai 2022 ini perusahaan-perusahaan tersebut tetap membangun properti mahal sehingga terkesan tidak mematuhi undang-undang. Akibatnya, semakin banyak masyarakat, khususnya kaum milenial, yang kesulitan mencari rumah terjangkau dan layak huni sehingga dikhawatirkan pada masa depan, akan tumbuh banyak kawasan kumuh.
            <br><br>
            \"Mereka berumah tangga, mereka can not afford untuk mendapatkan rumah karena mereka butuh, tapi can not afford purchasing power mereka dibandingkan harga rumahnya lebih tinggi sehingga mereka end up either tinggal di rumah mertua atau dia nyewa,\" pernyataan Sri Mulyani pada pertemuan G20 ini mendukung kekhawatiran generasi milenial akan melambungnya harga rumah yang naik setiap tahun. Episode perdana ini diharapkan menjadi cahaya yang dapat menjawab keresahan masyarakat, meredakan asumsi, memotivasi tiap insan, dan berdampak baik bagi khalayak ramai.</span>",
            "link" => "https://open.spotify.com/episode/3vCXl94uqZx1SNGCKoUKfv?si=4ae736b2f4c94106",
            "tipe" => "audio dokumenter",
        ]);

        Art::create([
            "id" => "24",
            "image_path" => "/images/ruangIndependen/pameran/coveraudio.png",
            "title" => "CETAR #12 - Aksi Kucing-kucingan PKL dan Satpol PP",
            "deskripsi" => "Sesuai dengan undang undang Lalu Lintas dan Angkutan Jalan UU LAJ : Pasal 28 ayat (2) jo. Pasal 25 ayat (1), ”Setiap orang dilarang melakukan perbuatan<span id=\"dots12\">...</span><span id=\"more12\"> yang mengakibatkan gangguan pada fungsi perlengkapan Jalan. Dalam konteks ini yang dimaksud adalah trotoar sebagai fasilitas untuk pejalan kaki yang terganggu fungsinya menjadi tempat berdagang,” bunyinya. Undang-undang tentang lalu lintas dan angkutan jalan ini menjelaskan tentang trotoar sebagai fasilitas pejalan kaki terganggu fungsinya, maka sesuai tugasnya satpol pp melakukan aksinya. Namun, kenyataan dari aksi kejar - kejaran ini tak sekejam seperti yang diceritakan televisi.Adanya perjanjian kedua belah pihak ikut menjadi sumber utama kejar - kejaran ini sudah tak terlihat.
            <br><br>
             Seperti yang terjadi di Tangerang yang melibatkan aparat keamanan Gading Serpong dan PKL. undang-undang mengenai lalu lintas dan angkutan jalan ini tidak diikuti oleh kedua belah pihak, baik aparat keamanan Gading Serpong maupun pedagang kaki lima (PKL). Penertiban PKL sampai saat ini masih terjadi. Perbedaannya ialah seperti yang kita tahu, dahulu kejar-kejaran tersebut tidak dapat dihindari dikarenakan PKL yang takut dagangan yang ia jual di ambil oleh pihak yang melakukan penertiban dan tidak jarang juga kejadian pemaksaan dalam melakukan penertiban. Akan tetapi, situasi saat ini berbeda. Kedua pihak tersebut tidak lagi melakukan aksi kejar-kejaran karena saat ini mereka saling membantu satu sama lain dengan membayar iuran. Para pedagang mengatakan bahwa aparat keamanan hanya mengikuti apa kata atasannya.
             </span>",
            "link" => "https://open.spotify.com/episode/4YIK97wdoxDOuD4QojRyen?si=875e8030bd8945f4",
            "tipe" => "audio dokumenter",
        ]);
    }
}
