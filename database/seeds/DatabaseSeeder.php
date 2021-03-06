<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => 0,
            'name' => 'Guillo',
            'email' => 'guillermonicolaspeirone@gmail.com',
            'FirstName' => null,
            'LastName' => null,
            'Address' => null,
            'City' => null,
            'Country' => null,
            'Postal_Code' => null,
            'Country' => null,
            'email_verified_at' => new DateTime('today'),
            'password' => '$2y$10$.T78Y9D7A.ZLyxbVyyRoku7fyMAgO7zbof34DDO1P6XWxmxEVjpny', // 12345 <--- clave
        ]);


        for ($i=1; $i <= 30 ; $i++) { 
            
            DB::table('productos')->insert([
                'id' => $i,
                'Type' => Str::random(10),
                'ProductName' => Str::random(10),
                'ProductBrand' => Str::random(10),
                'Value' =>  mt_rand(1, 100) / 10,
                'Stock' => rand(1,10),
            ]);

        }

        for ($i=1; $i <= 16 ; $i++) { 
            
            DB::table('games')->insert([
                'id' => $i,
                'Genere' => Str::random(10),
                'Name' => Str::random(10),
                'Developer' => Str::random(10),
                'Status' =>  Str::random(10),
                'Value' =>  mt_rand(1, 100) / 10,
                'Published_at' => null,
                'Contact_page' => Str::random(10),
                'img' => Str::random(10),

            ]);

        }

        for ($i=1; $i <= 160 ; $i++) { 
            
            DB::table('reviews')->insert([
                'id' => $i,
                'Game_id' => mt_rand(1, 16),
                'Raiting' => mt_rand(1, 100),
                'Comment' => Str::random(100),
                'Submit_date' =>  null,
            ]);

        }

    }
}
