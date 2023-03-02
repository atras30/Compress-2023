<?php

namespace Database\Factories;

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
            "nickname" => Str::random(11),
            "nim" => Str::random(11),
            "angkatan" => '2020',
            "prodi" => "Informatika",
            "tanggallahir" => fake()->date(),
            "email" => fake()->email(),
            "noHp" => random_int(10,100000000000),
            "idLine" => Str::random(11),
            "instagram" => Str::random(11),
            "divisi1" => "Website",
            "divisi2" => "Acara",
            "alasandiv1" => "P",
            "alasandiv2" => "P",
            "pengalaman" => "P",
            "kesibukan" => "P",
            "alasan-masuk-commpress" => "P",
            "portofolio" => "P",
        ];
    }
}
