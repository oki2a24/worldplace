<?php

use Illuminate\Database\Seeder;

class WpCommentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wp_comments')->delete();

        \DB::table('wp_comments')->insert([
            0 => [
                'comment_ID' => 1,
                'comment_post_ID' => 1,
                'comment_author' => 'WordPress コメントの投稿者',
                'comment_author_email' => 'wapuu@wordpress.example',
                'comment_author_url' => 'https://wordpress.org/',
                'comment_author_IP' => '',
                'comment_date' => '2019-06-02 10:24:29',
                'comment_date_gmt' => '2019-06-02 01:24:29',
                'comment_content' => 'こんにちは、これはコメントです。
コメントの承認、編集、削除を始めるにはダッシュボードの「コメント画面」にアクセスしてください。
コメントのアバターは「<a href="https://gravatar.com">Gravatar</a>」から取得されます。',
                'comment_karma' => 0,
                'comment_approved' => '1',
                'comment_agent' => '',
                'comment_type' => '',
                'comment_parent' => 0,
                'user_id' => 0,
            ],
        ]);
    }
}
