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

        $office_id_1 = DB::table('offices')->insertGetId([
            'name' => 'BDA',
            'code_name' => 'bda',
            'complete_name' => 'Bureau des Actions',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_2 = DB::table('offices')->insertGetId([
            'name' => 'BDC',
            'code_name' => 'bdc',
            'complete_name' => 'Bureau des Cultures',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_3 = DB::table('offices')->insertGetId([
            'name' => 'BDS',
            'code_name' => 'bds',
            'complete_name' => 'Bureau des Sports',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);
        $office_id_4 = DB::table('offices')->insertGetId([
            'name' => 'Pôle-Com',
            'code_name' => 'pole-com',
            'complete_name' => 'Pôle Communication',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $admin = DB::table('users')->insertGetId([
            'name' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@localhost.dev',
            'password' => Hash::make('admin123456'),
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $bda = DB::table('users')->insertGetId([
            'name' => 'bda',
            'lastname' => 'bda',
            'email' => 'bda@localhost.dev',
            'password' => Hash::make('bda123456'),
            'office_id' => 1,
            'class' => 'Seconde GT A',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);

        $bds = DB::table('users')->insertGetId([
            'name' => 'bds',
            'lastname' => 'bds',
            'email' => 'bds@localhost.dev',
            'password' => Hash::make('bds123456'),
            'office_id' => 3,
            'class' => 'Seconde GT A',
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
        ]);



        $role_admin = DB::table('roles')->insertGetId([
            'name' => 'admin',
        ]);
        $role_bde = DB::table('roles')->insertGetId([
            'name' => 'bde',
        ]);

        $role_user_admin = DB::table('role_user')->insert([
            'user_id' =>  $admin,
            'role_id' => $role_admin,
        ]);
        $role_user_admin_2 = DB::table('role_user')->insert([
            'user_id' =>  $admin,
            'role_id' => $role_bde,
        ]);
        $role_user_bda = DB::table('role_user')->insert([
            'user_id' =>  $bda,
            'role_id' => $role_bde,
        ]);
        $role_user_bds = DB::table('role_user')->insert([
            'user_id' =>  $bds,
            'role_id' => $role_bde,
        ]);


        for ($i = 0; $i < 25; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->title,
                'image_url' => 'https://source.unsplash.com/random/480x360',
                'slug' => $faker->slug,
                'content' => $faker->text,
                'is_published' => (bool)mt_rand(0, 1),
                'office_id' => random_int(1, 3),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
