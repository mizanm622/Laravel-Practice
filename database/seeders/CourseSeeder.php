<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();

    for($i=0; $i<1; $i++){
        DB::table('users')->insert(
            [
           'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>$faker->password
            

                 ]
    );
    }
         }
}
