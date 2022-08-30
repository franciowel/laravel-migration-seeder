<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $vehicles = [
            'Autobus',
            'Nave',
            'Treno',
            'Aereo'
        ];

        for($i = 0; $i < 20; $i++) {
            $new_travel = new Travel();
            $new_travel->name= 'Viaggio a' . $faker->city();
            $new_travel->destination = $faker->city();
            $new_travel->start_date = $faker->date();
            $new_travel->days = $faker->randomFloat(1, 2, 20);
            $new_travel->price = $faker->randomFloat(2, 150, 99999);
            $new_travel->vehicle = $faker->randomElement($vehicles);
            $new_travel->description = $faker->paragraphs(3, true);
            $new_travel->save();

        }
    }
}
