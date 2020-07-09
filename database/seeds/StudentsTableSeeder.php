<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $new_student = new Student();
            $new_student->first_name = $faker->firstName;
            $new_student->last_name = $faker->lastName;
            $new_student->number = $faker->numberBetween(00001, 10000 );
            $new_student->email = $faker->email;
            $new_student->save();
        }
    }
}
