<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = DB::table('users')->get();

        foreach ($users as $user) {
            DB::table('profiles')->insert([
                'user_id' => $user->id,
                'birth' => $faker->date,
                'sex' => $faker->randomElement(['male', 'female']),
            ]);
    }
}
}