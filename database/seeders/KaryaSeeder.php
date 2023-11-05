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
    }
}
