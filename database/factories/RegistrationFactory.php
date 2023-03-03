<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "fullname" => fake()->name(),
            "nickname" => fake()->userName(),
            "nim" => Str::random(11),
            "angkatan" => '2020',
            "prodi" => "Informatika",
            "tanggallahir" => fake()->date(),
            "email" => fake()->email(),
            "noHp" => random_int(10, 100000000000),
            "idLine" => fake()->userName(),
            "instagram" => Str::random(11),
            "divisi1" => Divisi::all()->random()->nama,
            "divisi2" => Divisi::all()->random()->nama,
            "alasandiv1" => fake()->sentences(2, true),
            "alasandiv2" => fake()->sentences(2, true),
            "pengalaman" => fake()->sentences(5, true),
            "kesibukan" => fake()->sentences(3, true),
            "alasan_masuk_commpress" => fake()->sentences(3, true),
            "portofolio" => fake()->sentence(),
        ];
    }
}
