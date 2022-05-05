<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Manjeet singh
        //There are two ways to create fake data using db:seed command
        //one is the following where you make a factory with artisan command and call it here.
         \App\Models\User::factory(10)->create();

         //And the second is the following where you can define database table fields and set them to 
         // print fake data in database.
        $faker = Faker::create();

    	foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'dob' => $faker->date($format = 'D-m-y', $max = '2000',$min = '1990')
            ]);
        }
        $reg=DB::table('files');
        if($reg!==null){
                DB::table('files')->insert([
                    'Id'=> 1,
                    'reg_status'=>'ON',
                ]);
            
        }
        
        
    }
}
