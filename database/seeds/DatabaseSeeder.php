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
        // $this->call(UsersTableSeeder::class);
        DB::table('rooms')->insert([
            ['name' => 'Royal Suite', 'number' => '101', 'img'=> '','kindOfRooms' => '1', 'price'=>563000, 'capacity' => '1', 'status' => '0' ],
            ['name' => 'Grand Suite', 'number' => '102', 'img'=> '','kindOfRooms' => '2', 'price'=>741000, 'capacity' => '1', 'status' => '0' ],
            ['name' => 'Grand Suite With Limited Offer', 'number' => '103', 'img'=> '','kindOfRooms' => '1', 'price'=>563000, 'capacity' => '1', 'status' => '0' ],
            ['name' => 'Presidential Suite', 'number' => '104', 'img'=> '','kindOfRooms' => '1', 'price'=>563000, 'capacity' => '1', 'status' => '0' ],
            ['name' => 'Deluxe King', 'number' => '103', 'img'=> '','kindOfRooms' => '1', 'price'=>741000, 'capacity' => '2', 'status' => '0' ],
            ['name' => 'Premium Suite', 'number' => '104', 'img'=> '','kindOfRooms' => '2', 'price'=>545000, 'capacity' => '2', 'status' => '0' ],
            ['name' => 'Deluxe Family Triple', 'number' => '201', 'img'=> '','kindOfRooms' => '1', 'price'=>936000, 'capacity' => '3', 'status' => '0' ],
            ['name' => 'Deluxe Triple', 'number' => '202', 'img'=> '','kindOfRooms' => '2', 'price'=>1023000, 'capacity' => '3', 'status' => '0' ],
            ['name' => 'Superior Twin', 'number' => '203', 'img'=> '','kindOfRooms' => '1', 'price'=>1373000, 'capacity' => '4', 'status' => '0' ],
            ['name' => 'Deluxe Twin Ocean View', 'number' => '204', 'img'=> '','kindOfRooms' => '2', 'price'=>1417500, 'capacity' => '4', 'status' => '0' ],
         ]);
    }
}