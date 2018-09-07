<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i<5000; $i++){
            $person = new Person;
            $person->first_name = $faker->firstName;
            $person->last_name = $faker->lastName;
            $person->title = $faker->jobTitle;
            $person->company = $faker->company;
            $person->email = $faker->safeEmail;
            $person->address = $faker->streetAddress;
            $person->address_2 = $faker->secondaryAddress;
            $person->city = $faker->city;
            $person->zip_code = $faker->postCode;
            $person->photo = $faker->imageUrl('200', '200', 'people');

            $person->save();
        }
        
    }
}
