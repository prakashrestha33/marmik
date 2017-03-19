<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table("roles")->insert([
            "name" => "admin",
            "display_name" => "Admin",
            "description" => "controls all",
        ]);


        DB::table("roles")->insert([
            "name" => "staff",
            "display_name" => "Staff",
            "description" => "conducts overall operations",
        ]);


    }
}
