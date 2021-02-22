<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students_list =[
            [
                'name' => 'Loris',
                'surname' => 'Matteri',
                'age' => 27,
                'city' => 'Garzeno',
            ],
            [
                'name' => 'Guido',
                'surname' => 'La Vespa',
                'age' => 45,
                'city' => 'Roma',
            ],
            [
                'name' => 'Zlatan',
                'surname' => 'Ibrahimovic',
                'age' => 39,
                'city' => 'Malmoe',
            ],
            [
                'name' => 'Brambilla',
                'surname' => 'Fumagalli',
                'age' => 36,
                'city' => 'Milano',
            ]
        ];

        foreach ($students_list as $student) {
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->surname = $student['surname'];
            $newStudent->age = $student['age'];
            $newStudent->city = $student['city'];
            $newStudent->save();
        }
    }
}
