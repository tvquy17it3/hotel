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
         DB::table('users')->insert([
            ['name' => 'Nhã', 'email' => 'vvnha.17it3@sict.udn.vn', 'phone'=> '0905905905', 'email_verified_at'=>'', 'password' => '$2y$10$0eCGHlUcbjJeVGVrDkYDcuCDKyiv4s7I4go3cT2IKjYHIEZ.XhQJu', 'role' => '1', 'remember_token'=>'', 'created_at'=>'', 'updated_at'=>'']
         ]);
         DB::table('users')->insert([
            ['name' => 'Võ Văn Nhã','email' => 'vvnha.17it3@sict.udn.vn','phone' => '0905903902', 'email_verified_at'=>'', 'password'=>'$2y$10$iNvCL3cT.jJAomB5a.8eEOFsfxU1eeKPNpH3eWdxd83C.AJRCFys.', 'role' => '1', 'remember_token'=>'', 'created_at'=>'', 'updated_at'=>''],
            ['name' => 'Trần Văn Quý','email' => 'vanquy@gmail.com','phone' => '0905906666', 'email_verified_at'=>'', 'password'=>'$2y$10$iNvCL3cT.jJAomB5a.8eEOFsfxU1eeKPNpH3eWdxd83C.AJRCFys.', 'role' => '1', 'remember_token'=>'', 'created_at'=>'', 'updated_at'=>''],
            ['name' => 'Nguyễn Văn Tuyên','email' => 'tuyen1@gmail.com','phone' => '0905903902', 'email_verified_at'=>'', 'password'=>'$2y$10$iNvCL3cT.jJAomB5a.8eEOFsfxU1eeKPNpH3eWdxd83C.AJRCFys.', 'role' => '1', 'remember_token'=>'', 'created_at'=>'', 'updated_at'=>'']
         ]);
    }
}