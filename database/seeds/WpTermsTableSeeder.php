<?php

use Illuminate\Database\Seeder;

class WpTermsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wp_terms')->delete();

        \DB::table('wp_terms')->insert([
            0 => [
                'term_id' => 1,
                'name' => '未分類',
                'slug' => '%e6%9c%aa%e5%88%86%e9%a1%9e',
                'term_group' => 0,
            ],
        ]);
    }
}
