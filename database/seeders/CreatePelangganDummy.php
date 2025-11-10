<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreatePelangganDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Menggunakan lokal Indonesia untuk data yang lebih relevan

        $numberOfRecords = 10;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            $gender = $faker->randomElement(['Male', 'Female']);

            DB::table('pelanggan')->insert([
                'first_name' => $faker->firstName($gender == 'Male' ? 'male' : 'female'),
                'last_name' => $faker->lastName(),
                'birthday' => $faker->date($format = 'Y-m-d', $max = '-18 years'), // Usia minimal 18 tahun
                'gender' => $gender,
                'email' => $faker->unique()->safeEmail(),
                'phone' => $faker->phoneNumber(),
            ]);
        }
    }
}
