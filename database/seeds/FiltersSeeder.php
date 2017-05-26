<?php

use Illuminate\Database\Seeder;
use App\Filter;

class FiltersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filter::create(
            [
                'name'=>'Web Design',
                'alias'=>'Web Design',
            ]
        );
        Filter::create(
            [
                'name'=>'Development',
                'alias'=>'Development',
            ]
        );
        Filter::create(
            [
                'name'=>'Social Campaigns',
                'alias'=>'Social Campaigns',
            ]
        );
        Filter::create(
            [
                'name'=>'Photography',
                'alias'=>'Photography',
            ]
        );
    }
}
