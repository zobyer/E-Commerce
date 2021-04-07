<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Products')->insert([
            [
                'name'=>'One plus',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'Performance (Processor, Ram) Product Quality (Design, Build, Ergonomics) Brand Name and Reliability of Manufacturer.',
                'gallery'=>'https://i.guim.co.uk/img/media/2ce8db064eabb9e22a69cc45a9b6d4e10d595f06/392_612_4171_2503/master/4171.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=45b5856ba8cd83e6656fbe5c166951a4',
            ],
            [
                'name'=>'Walton Fan',
                'price'=>'100',
                'category'=>'Fan',
                'description'=>'AVALON (48) Topaz Gold Brown Celling Fan',
                'gallery'=>'https://s3-ap-southeast-1.amazonaws.com/priyoshop/content/Images/thumbs/0177937_walton-ceiling-fan-wcf5601em-pink-56-inch_550.jpeg',
            ],
            [
                'name'=>'Smart TV',
                'price'=>'800',
                'category'=>'TV',
                'description'=>'WCT24O4 - 24" Inch',
                'gallery'=>'https://static.ajkerdeal.com/images/deals/we326s9ch1710/1.jpg',
            ],
            [
                'name'=>'Samsung AC',
                'price'=>'600',
                'category'=>'Air Conditioner',
                'description'=>'Samsung 1.5 Ton 3 Star Inverter Split AC Copper',
                'gallery'=>'https://acmartbd.com/wp-content/uploads/2015/03/Samsung-AR18JC3ESLWNNA-1.5-Ton-Split-Air-Conditioner.jpg',
            ]
        ]);
    }
}
