<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class User extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_PT');
        for($i = 1; $i <= 100; $i++) {
            $data = [
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' => $faker->email,
                'password' => password_hash('12345', PASSWORD_DEFAULT),
            ];

            $this->db->table('users')->insert($data);
        }
    }
}
