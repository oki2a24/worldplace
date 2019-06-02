<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(WpCommentmetaTableSeeder::class);
        $this->call(WpCommentsTableSeeder::class);
        $this->call(WpLinksTableSeeder::class);
        $this->call(WpOptionsTableSeeder::class);
        $this->call(WpPostmetaTableSeeder::class);
        $this->call(WpPostsTableSeeder::class);
        $this->call(WpTermRelationshipsTableSeeder::class);
        $this->call(WpTermTaxonomyTableSeeder::class);
        $this->call(WpTermmetaTableSeeder::class);
        $this->call(WpTermsTableSeeder::class);
        $this->call(WpUsermetaTableSeeder::class);
        $this->call(WpUsersTableSeeder::class);
    }
}
