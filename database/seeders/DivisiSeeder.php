<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'nama' => 'Badan Pengurus Harian (BPH)',
            'deskripsi' => '
            <ul>
                <li>Merancang grand design</li>
                <li>Menyusun proposal dan LPJ/LPK</li>
                <li>Penanggung jawab setiap divisi</li>
                <li>Memimpin Rapat Pleno</li>
            </ul>
            '
        ]);

        Divisi::create([
            'nama' => 'Acara',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab selama rangkaian persiapan hingga acara berlangsung.</li>
                <li>Membuat COMMPRESS 2023 menarik dan diminati banyak peserta.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Lomba',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab selama persiapan hingga perlombaan berlangsung.</li>
                <li>Menentukan detail lomba.</li>
                <li>Menentukan kurator/juri untuk lomba.</li>
                <li>Membuat perlombaan menarik dan diminati banyak peserta.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Fresh Money',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas pendaan COMMPRESS 2023.</li>
                <li>Mengumpulkan pendanaan untuk keberlangsungan COMMPRESS 2023.</li>
                <li>Menjaga dan mengatur pendanaan COMMPRESS 2023.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Sponsor',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas pendanaan COMMPRESS 2023.</li>
                <li>Mencari dan mengumpulkan sponsor untuk pendanaan.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Publikasi',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas publikasi dan seluruh akun media sosial COMMPRESS 2023.</li>
                <li>Mengelola seluruh akun media sosial COMMPRESS 2023.</li>
                <li>Memantau dan menjaga engagement seluruh media sosial COMMPRESS 2023.</li>
                <li>Membuat konten dan visual brief untuk materi konten media sosial COMMPRESS 2023.</li>
                <li>Membuat media sosial COMMPRESS 2023 lebih menarik.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Visual',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas materi visual COMMPRESS 2023.</li>
                <li>Merancang dan membuat visualisasi konten yang menarik & kreatif sesuai keperluan.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Dokumentasi',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas seluruh pendokumentasian acara COMMPRESS 2023.</li>
                <li>Dokum Foto bertanggung jawab untuk dokumentasi foto selama acara.</li>
                <li>Dokum Video bertanggung jawab untuk dokumentasi video selama acara.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Media Relation',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab dalam relasi COMMPRESS 2023 dengan media partner.</li>
                <li>Menjalin relasi dan kerja sama yang baik dengan eksternal.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Perlengkapan',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas seluruh perlengkapan yang diperlukan COMMPRESS 2023.</li>
                <li>Menyiapkan kebutuhan perlengkapan COMMPRESS 2023.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Keamanan',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas keamanan dan ketertiban acara COMMPRESS 2023.</li>
                <li>Menjaga ketertiban antar panitia dan peserta.</li>
            </ul>
            '
        ]);
        
        Divisi::create([
            'nama' => 'Web Development',
            'deskripsi' => '
            <ul>
                <li>Bertanggung jawab atas website COMMPRESS 2023.</li>
                <li>Mengelola dan memastikan website COMMPRESS 2023 dapat digunakan dengan baik.</li>
            </ul>
            '
        ]);
    }
}
