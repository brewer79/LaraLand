<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(
            [
                'name'=>'<h2>We are<br> Web Design<br> Heroes</h2>',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.',
                'images'=>'about.jpg',
                'icon'=>'icon-paperplane_ico'
            ]
        );
        About::create(
            [
                'name'=>'<h2>We are<br> Web Design<br> Heroes</h2>',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.',
                'images'=>'about.jpg',
                'icon'=>'icon-trophy'
            ]
        );
        About::create(
            [
                'name'=>'<h2>We are<br> Web Design<br> Heroes</h2>',
                'text'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                lobortis nisl ut aliquip ex ea commodo consequat.',
                'images'=>'about.jpg',
                'icon'=>'icon-clock'
            ]
        );
    }
}
