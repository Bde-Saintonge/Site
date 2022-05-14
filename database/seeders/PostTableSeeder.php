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

        $admin = DB::table('users')->insertGetId([
            'name' => 'admin',
            'lastname' => 'admin',
            'email'=> 'admin@localhost.dev',
            'password' => Hash::make('admin123456'),
            'role' => 'admin',
            'class' => 'Seconde GT A',
            'profile_photo_path' => 'http://127.0.0.1:8000/media/images/LOGO-2020-1.jpg',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $user = DB::table('users')->insertGetId([
            'name' => 'user',
            'lastname' => 'user',
            'email'=> 'user@localhost.dev',
            'password' => Hash::make('user123456'),
            'role' => 'eleve',
            'class' => 'Seconde GT A',
            'profile_photo_path' => 'http://127.0.0.1:8000/media/images/LOGO-2020-1.jpg',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $bda = DB::table('users')->insertGetId([
            'name' => 'bda',
            'lastname' => 'bda',
            'email'=> 'bda@localhost.dev',
            'password' => Hash::make('bda123456'),
            'role' => 'bda',
            'class' => 'Seconde GT A',
            'profile_photo_path' => 'http://127.0.0.1:8000/media/images/LOGO-2020-1.jpg',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $office_id_1 = DB::table('offices')->insertGetId([
            'name' => 'BDA',
            'complete_name' => 'Bureau des Actions',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_2 = DB::table('offices')->insertGetId([
            'name' => 'BDC',
            'complete_name' => 'Bureau des Cultures',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_3 = DB::table('offices')->insertGetId([
            'name' => 'BDS',
            'complete_name' => 'Bureau des Sports',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_4 = DB::table('offices')->insertGetId([
            'name' => 'Pôle-Com',
            'complete_name' => 'Pôle Communication',
            'slug' => $faker->slug,
            'posts_count' => 5,
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        for($i = 0; $i < 25; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->title,
                'image_url' => 'https://source.unsplash.com/random/480x360',
                'slug' => $faker->slug,
                'content' => $faker->text,
                'is_published' => (bool)mt_rand(0, 1),
                'user_id'    => mt_rand(0,1) ? $admin : $bda,
                'office_id' => $this->random_office($office_id_1, $office_id_2, $office_id_3),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }

    public function random_office($office1, $office2, $office3){
        $nb = mt_rand(0,3);
        if ($nb === 1){
            return $office1;
        }elseif($nb == 2){
            return $office2;
        }else{
            return $office3;
        }
    }

}
