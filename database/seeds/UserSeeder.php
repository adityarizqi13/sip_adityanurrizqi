<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) {
            User::create([
                'role_id' => 2,
                'name' => $faker->name,
                'username' => $faker->username,
                'email' => $faker->email,
                'password' => bcrypt('axioo'),
            ]);
        }
    }
}
