<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(
            [
                'name'=>'We create',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'icon'=>'icon-vector'
            ]
        );
        Service::create(
            [
                'name'=>'We look to the future',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'icon'=>'icon-eye'
            ]
        );
        Service::create(
            [
                'name'=>'We find a solution',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
                'icon'=>'icon-random'
            ]
        );
    }
}
