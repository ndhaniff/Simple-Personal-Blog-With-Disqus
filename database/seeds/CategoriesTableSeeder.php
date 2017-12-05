<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array(
                'name' => 'Mobile',
            ),
            array(
                'name' => 'Technology',
            ),
            array(
                'name' => 'Arts',
            ),
            array(
                'name' => 'Web Design',
            )
        );

        DB::table('categories')->insert($categories);
    }
}
