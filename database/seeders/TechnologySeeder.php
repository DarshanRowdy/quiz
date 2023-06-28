<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$tech = ['name' => "Php",'name' => "Laravel", 'name' => "QA"];
        DB::table('technologies')->insert($tech);
    }
}
