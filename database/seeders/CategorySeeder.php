<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ["name" => "87 Key Keyboard",
            "image" => "images/87-key-keyboard.jpg"],
            ["name" => "61 Key Keyboard",
            "image" => "images/61-key-keyboard.jpg"],
            ["name" => "XDA Profile",
            "image" => "images/xda-profile.jpg"],
            ["name" => "Cherry Profile",
            "image" => "images/cherry-profile.jpg"]
        ]);
    }
}
