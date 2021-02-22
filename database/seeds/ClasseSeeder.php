<?php

use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $classes_list = config('classes');

        foreach ($classes_list as $class) {
            $newClass = new Classe();
            $newClass->number = $class['number'];
            $newClass->students_number = $class['students_number'];
            $newClass->course = $class['course'];
            $newClass->save();
        }
    }
}
