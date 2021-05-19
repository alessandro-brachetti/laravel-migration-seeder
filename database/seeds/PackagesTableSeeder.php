<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $new_package_object = new Package();
        $new_package_object->destination = $faker->city();
        $new_package_object->flight_number = $faker->bothify('???-#####');
        $new_package_object->available_seats = $faker->randomNumber(3, true);
        $new_package_object->hotel = $faker->word(2, true);
        $new_package_object->departure = $faker->dateTimeThisYear('+2 months');
        $new_package_object->arrival = $faker->dateTimeThisYear('+3 months');
        $new_package_object->price = $faker->randomFloat(2, 100, 10000);
        $new_package_object->save();
      }

    }
}
