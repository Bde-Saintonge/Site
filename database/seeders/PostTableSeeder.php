<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $user_id = DB::table('users')->insertGetId([
            'name' => 'admin',
            'lastname' => 'admin',
            'email'=> 'admin@localhost.dev',
            'password' => Hash::make('admin123456'),
            'class' => 'Seconde GT A',
            'profile_photo_path' => 'http://127.0.0.1:8000/media/images/LOGO-2020-1.jpg',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $office_id_1 = DB::table('offices')->insertGetId([
            'name' => 'BDA',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_2 = DB::table('offices')->insertGetId([
            'name' => 'BDC',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_3 = DB::table('offices')->insertGetId([
            'name' => 'BDS',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        for($i = 0; $i < 5; $i++) {
            DB::table('posts')->insert([
                'name' => $faker->name,
                'slug' => $faker->slug,
                'content' => $faker->text,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'user_id'    => $user_id,
                'office_id' => $office_id_1
            ]);
        }
    }
}
