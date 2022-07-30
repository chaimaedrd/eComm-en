<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
        [
            'name'=>'image1',
            'price'=>'5$',
            'category'=>'face',
            'description'=>'pencil drawing',
            'galery'=>'https://beautifuldawndesigns.net/wp-content/uploads/2021/03/cool-girl-drawing-ideas-2.jpg',
        ],
        [
            'name'=>'image2',
            'price'=>'3$',
            'category'=>'animal',
            'description'=>'pencil drawing',
            'galery'=>'https://i.pinimg.com/736x/cb/f5/a1/cbf5a13cab62d1c7622ea96dc9f23dcd.jpg',
        ],
        [
            'name'=>'image3',
            'price'=>'5$',
            'category'=>'face',
            'description'=>'pencil drawing',
            'galery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiiD8vrX3BWYhipZghAh6VWx3LUYVcqxCEPY8NU_Uppw0sDJfQ_X2NcJ0vEhiUZWBzSmo&usqp=CAU',
        ],
        [
            'name'=>'image4',
            'price'=>'2$',
            'category'=>'hands',
            'description'=>'pencil drawing',
            'galery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqIXSlzx4ip9l2NPG9it0QdbP3wFAXl0ZI_xMuBjpAHmbGw106rtCfRqMP5rg_GMZxT1s&usqp=CAU',
        ],
    ]);
    }
}
