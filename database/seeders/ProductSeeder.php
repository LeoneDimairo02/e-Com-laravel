<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            ['name'=>'Samsung S23',
            'price'=>'600',
            'description'=>'smart phone with 256g RAM and a great camera',
            'category'=>'mobile',
            'gallery'=>"picture of samsung mobile phone"],
            [
                'name'=>'Panasonic TV',
                'price'=>'900',
                'description'=>'A 32 inch flat screen TV',
                'category'=>'Home appliance',
                'gallery'=>"picture of Panasonic TV" 
            ],
            [
                'name'=>'Kango 3 set Pots',
                'price'=>'200',
                'description'=>'non-stick steel pots',
                'category'=>'home appliance',
                'gallery'=>"picture Kango Pots"
            ],
            [
                'name'=>'Ladies Top',
                'price'=>'20',
                'description'=>"Ladies's fashion top with off-shoulder strap",
                'category'=>'fashion wear',
                'gallery'=>"picture of ladies top"
            ]

        ]);
    }
    
}
