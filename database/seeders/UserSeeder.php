<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => 2,
            'username' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => '$2y$10$bkeCykG2Iq9Y5dccemb70.IcQ9opdWMOwDfAXI5gm7Mh/087S99HC',
            'address' => 'Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530',
            'gender' => 'Male',
            'dateOfBirth' => '15-11-2001'
        ]);
    }
}
