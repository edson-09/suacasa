<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Category extends Seeder
{
    public function run()
    {
        $faker = Factory::create('fr_FR');
        for($i = 1; $i <= 100; $i++) {
            $departmanet = $faker->departmentName;
            $data = [
                'name' => $departmanet,
                'slug' => strtolower(str_replace(' ','-', $departmanet)),
            ];

            $this->db->table('categories')->insert($data);
        }
    }
}
