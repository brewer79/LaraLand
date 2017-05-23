<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create(
            [
                'name'=>'Free Onepage Responsive Template',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'image'=>'first.jpg'
            ]
        );
        Slider::create(
            [
                'name'=>'Fully Responsive Components',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'image'=>'second.jpg'
            ]
        );
        Slider::create(
            [
                'name'=>'Build new Layout in 10 minutes!',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'image'=>'third.jpg'
            ]
        );
    }
}
