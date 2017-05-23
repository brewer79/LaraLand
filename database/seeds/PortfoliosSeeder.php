<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create(
            [
                'name'=>'Web Design',
                'images'=>'por1.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Web Design',
                'images'=>'por4.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Web Design',
                'images'=>'por6.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Web Design',
                'images'=>'por3.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Development',
                'images'=>'por7.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Development',
                'images'=>'por5.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Development',
                'images'=>'por1.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Development',
                'images'=>'por2.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Social Campaigns',
                'images'=>'por4.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Social Campaigns',
                'images'=>'por6.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Social Campaigns',
                'images'=>'por3.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Social Campaigns',
                'images'=>'por5.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Photography',
                'images'=>'por7.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Photography',
                'images'=>'por2.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Photography',
                'images'=>'por5.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
        Portfolio::create(
            [
                'name'=>'Photography',
                'images'=>'por6.jpg',
                'description'=>'<h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p>'
            ]);
    }
}
