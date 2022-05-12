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
         \App\Models\User::factory(2)->create();
         //

         //And the second is the following where you can define database table fields and set them to 
         // print fake data in database.
        $faker = Faker::create();

    	// foreach (range(1,10) as $index) {
        //     DB::table('employees')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'phone_number' => $faker->phoneNumber,
        //         'dob' => $faker->date($format = 'D-m-y', $max = '2000',$min = '1990')
        //     ]); 
        // }

        $reg=DB::table('files')->select('Id','=','1');
        if($reg)
        {
            $save=DB::table('files')->insert([
                'Id'=> 1,
                'reg_status'=>'ON',
            ]);   
        }
        DB::table('contacts')->insert([
            'contact1' => $faker->phoneNumber,
            'contact2' => $faker->phoneNumber,
            'contact3' => 1234567890,
            'address' => '26, Jawaharlal Nehru Rd, Splanad,Kolkata',
            'social' => 'www.social_media_address.com',
            'email' => 'abc@abc.com'
        ]);

        DB::table('amounts')->insert([
            [
                'Id' => 'Collargemaking',
                'eventname' => 'Collargemaking',
                'amount' => '100'
            ],
            [
                'Id' => 'Creativemehandi',
                'eventname' => 'Creativemehandi',
                'amount' => '150'
            ],
            [
                'Id' => 'Dance',
                'eventname' => 'Dance',
                'amount' => '200'
            ],
            [
                'Id' => 'Facepainting',
                'eventname' => 'Facepainting',
                'amount' => '250'
            ],
            [
                'Id' => 'Fancydress',
                'eventname' => 'Fancydress',
                'amount' => '300'
            ],
            [
                'Id' => 'Paintingmentally',
                'eventname' => 'Paintingmentally',
                'amount' => '350'
            ],
            [
                'Id' => 'Paintingcom',
                'eventname' => 'Paintingcom',
                'amount' => '400'
            ],
            [
                'Id' => 'Poeticrecitation',
                'eventname' => 'Poeticrecitation',
                'amount' => '450'
            ],
            [
                'Id' => 'Rangolicom',
                'eventname' => 'Rangolicom',
                'amount' => '500'
            ],
            [
                'Id' => 'Roseprincess',
                'eventname' => 'Roseprincess',
                'amount' => '550'
            ],
            [
                'Id' => 'Rosequiz',
                'eventname' => 'Rosequiz',
                'amount' => '600'
            ],
            [
                'Id' => 'Singing',
                'eventname' => 'Singing',
                'amount' => '650'
            ],
            [
                'Id' => 'Sloganwriting',
                'eventname' => 'Sloganwriting',
                'amount' => '700'
            ],
        ]);
    }
}
