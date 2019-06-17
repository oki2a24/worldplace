<?php

use Illuminate\Database\Seeder;

class WpUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wp_users')->delete();

        \DB::table('wp_users')->insert([
            0 => [
                'ID' => 1,
                'user_login' => 'sample',
                'user_pass' => '$P$BiIwBLsjyq9SYmKP/knOvh6.6yLP6x1',
                'user_nicename' => 'sample',
                'user_email' => 'sample@example.com',
                'user_url' => '',
                'user_registered' => '2019-06-02 01:24:28',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'sample',
            ],
        ]);
    }
}
