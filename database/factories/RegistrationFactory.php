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
            "nim" => "000000" . fake()->randomNumber(5, true),
            "angkatan" => collect(["2020", "2021", "2022"])->random(),
            "prodi" => "Informatika",
            "tanggallahir" => fake()->date(),
            "email" => fake()->email(),
            "noHp" => fake()->phoneNumber(),
            "idLine" => fake()->userName(),
            "instagram" => Str::random(11),
            "divisi1" => Divisi::all()->random()->nama,
            "divisi2" => Divisi::all()->random()->nama,
            "alasandiv1" => fake()->sentences(1, true),
            "alasandiv2" => fake()->sentences(1, true),
            "pengalaman" => fake()->sentences(1, true),
            "kesibukan" => fake()->sentences(1, true),
            "alasan_masuk_commpress" => fake()->sentences(1, true),
            "portofolio" => fake()->sentence(),
        ];
    }
}
