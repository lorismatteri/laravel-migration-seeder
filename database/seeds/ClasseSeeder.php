<?php

use App\Classe;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        /* $classes_list = config('classes');

        foreach ($classes_list as $class) {
            $newClass = new Classe();
            $newClass->number = $class['number'];
            $newClass->students_number = $class['students_number'];
            $newClass->course = $class['course'];
            $newClass->save();
        } */
        for($i=0; $i<100; $i++) {
            $newClass = new Classe();
            $newClass->number = $faker->numberBetween(1, 100);
            $newClass->students_number = $faker->numberBetween(1, 250);
            $newClass->course = $faker->word();
            $newClass->save();
        }
    }
}
