<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        DB::table('users')->insert([
            'name' => 'info',
            'email' => 'infobeckons@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

        $reg=DB::table('files')->select('Id','=','1');
        if($reg)
        {
            $save=DB::table('files')->insert([
                'Id'=> 1,
                'reg_status'=>'ON',
            ]);
        }
        DB::table('contacts')->insert([
            'contact1' => "99140-0300",
            'contact2' => "9814893401",
            'contact3' => "99145-2702",
            'address' => 'Panjab University Rose Festival
            C/o Horticulture Division,
            Construction Office,
            Panjab University,
            Sector-14, Chandigarh-160014',
            'social' => 'https://www.facebook.com/groups/puhorticulture',
            'email' => 'purosefestival14@gmail.com'
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

        DB::table('headers')->insert([
            [
                'name' => 'Welcome PURF Paragraph',
                'data' => "The Horticulture Division of Panjab University always striving in its aim to make the Panjab University Campus cleaner and greener. One of the glorious examples of its untiring efforts is Prof. R.C. Paul Rose Garden in front of Vice-Chancellor's Office in Panjab Univesity. With the development of Prof. R.C. Paul Rose Garden came into existence the Panjab University Rose Festival.",
                'url' => 'home_page_about',
                'file'=> 'null'
            ],
            [
                'name' => 'Festival Date',
                'data' => '9th-11th February, 2020',
                'url' => 'home_date',
                'file'=> 'null'
            ],
            [
                'name' => 'Festival Timing',
                'data' => '4.00 pm to 6.00 pm',
                'url' => 'home_time',
                'file'=> 'null'
            ],
            [
                'name' => 'Festival Vanue',
                'data' => 'Panjab University Campus',
                'url' => 'home_vanue',
                'file'=> 'null'
            ],
            [
                'name' => 'Date of First Day',
                'data' => '9TH FEBRUARY, 2020',
                'url' => 'day1_date',
                'file'=> 'null'
            ],
            [
                'name' => 'Date of Second Day',
                'data' => '10TH FEBRUARY, 2020',
                'url' => 'day2_date',
                'file'=> 'null'
            ],
            [
                'name' => 'Date of Third Day',
                'data' => '11TH FEBRUARY, 2020',
                'url' => 'day3_date',
                'file'=> 'null'
            ],
            [
                'name' => 'Inauguration Image',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_inauguration_image'
            ],
            [
                'name' => 'Competition1 Image',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_competition1_image'
            ],
            [
                'name' => 'Competition2 Image',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_competition2_image'
            ],
            [
                'name' => 'Registration Text',
                'data' => 'To participate in the above competitions kindly click on the registration button and fill the details.',
                'url' => 'home_registration_text',
                'file'=> 'null'
            ],
            [
                'name' => 'Gallery Img 1',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img1'
            ],
            [
                'name' => 'Gallery Img 2',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img2'
            ],
            [
                'name' => 'Gallery Img 3',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img3'
            ],
            [
                'name' => 'Gallery Img 4',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img4'
            ],
            [
                'name' => 'Gallery Img 5',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img5'
            ],
            [
                'name' => 'Gallery Img 6',
                'data' => 'null',
                'file' => 'storage\image\homepage\PURF109655.png',
                'url' => 'home_gallery_img6'
            ],
        ]);
    }
}
