<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory As Faker;

class ControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i <= 100; $i++){
        $customer = new Customer;
        $customer->user_name = $faker->name;
        $customer->email = $faker->email;
        $customer->gender = 'M';
        $customer->address = $faker->address;
        $customer->country = $faker->state;
        $customer->state = $faker->country;
        $customer->dob = $faker->date;
        $customer->password = $faker->password;
        $customer->save();
        }
    }
}
