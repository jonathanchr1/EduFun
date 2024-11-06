<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Course as CourseModel;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $images = [
            'img/art-img/artimg1.jpg',
            'img/art-img/artimg2.jpg',
            'img/art-img/artimg3.jpg',
            'img/art-img/artimg4.jpg',
            'img/art-img/artimg5.jpg',
            'img/art-img/artimg6.jpg',
        ];
        $writers = [
            'Bia Mecca Annisa',
            'Abi Firmansyah',
        ];
        $types = [
            'Data Science',
            'Network Security',
        ];

        for($i=0;$i<6;$i++){
            CourseModel::create([
                'title' => $faker->sentence,
                'image' => $faker->randomElement($images),
                'writer' => $faker->randomElement($writers),
                'type' => $faker->randomElement($types),
                'body' => $faker->paragraph,
            ]);
        }
    }
}
