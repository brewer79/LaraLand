<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(
            [
                'name'=>'carousel',
                'alias'=>'carousel',
                'text'=>'<h2>Free Onepage Responsive Template</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>',
                'images'=>'first.jpg'
            ]
        );
        Page::create(
            [
                'name'=>'carousel',
                'alias'=>'carousel',
                'text'=>'<h2>Fully Responsive Components</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.',
                'images'=>'second.jpg'
            ]
        );
        Page::create(
            [
                'name'=>'carousel',
                'alias'=>'carousel',
                'text'=>'<h2>Build new Layout in 10 minutes!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>',
                'images'=>'third.jpg'
            ]
        );
    }
}
