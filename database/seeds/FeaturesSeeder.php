<?php

use Illuminate\Database\Seeder;
use App\Feature;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create(
            [
                'name'=>'Fully responsive',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'icon'=>'icon-tablet icon3x'
            ]
        );
        Feature::create(
            [
                'name'=>'Clean design',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat adipiscing.',
                'icon'=>'icon-isight icon3x'
            ]
        );
        Feature::create(
            [
                'name'=>'Valid code',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna erat volutpat.',
                'icon'=>'icon-star icon3x'
            ]
        );
        Feature::create(
            [
                'name'=>'Totally free',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nonummy.',
                'icon'=>'icon-heart icon3x'
            ]
        );
    }
}
