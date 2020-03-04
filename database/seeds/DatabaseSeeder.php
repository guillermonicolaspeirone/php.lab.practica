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


        for ($i=1; $i <= 150 ; $i++) { 
            
            DB::table('productos')->insert([
                'id' => $i,
                'Type' => Str::random(10),
                'ProductName' => Str::random(10),
                'ProductBrand' => Str::random(10),
                'Value' =>  mt_rand(1, 100) / 10,
                'Stock' => rand(1,10),
            ]);

        }

    }
}
