<?php

use Illuminate\Database\Seeder;

class WpOptionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wp_options')->delete();

        \DB::table('wp_options')->insert([
            0 => [
                'option_id' => 1,
                'option_name' => 'siteurl',
                'option_value' => 'http://localhost:8080',
                'autoload' => 'yes',
            ],
            1 => [
                'option_id' => 2,
                'option_name' => 'home',
                'option_value' => 'http://localhost:8080',
                'autoload' => 'yes',
            ],
            2 => [
                'option_id' => 3,
                'option_name' => 'blogname',
                'option_value' => 'sample',
                'autoload' => 'yes',
            ],
            3 => [
                'option_id' => 4,
                'option_name' => 'blogdescription',
                'option_value' => 'Just another WordPress site',
                'autoload' => 'yes',
            ],
            4 => [
                'option_id' => 5,
                'option_name' => 'users_can_register',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            5 => [
                'option_id' => 6,
                'option_name' => 'admin_email',
                'option_value' => 'sample@example.com',
                'autoload' => 'yes',
            ],
            6 => [
                'option_id' => 7,
                'option_name' => 'start_of_week',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            7 => [
                'option_id' => 8,
                'option_name' => 'use_balanceTags',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            8 => [
                'option_id' => 9,
                'option_name' => 'use_smilies',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            9 => [
                'option_id' => 10,
                'option_name' => 'require_name_email',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            10 => [
                'option_id' => 11,
                'option_name' => 'comments_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            11 => [
                'option_id' => 12,
                'option_name' => 'posts_per_rss',
                'option_value' => '10',
                'autoload' => 'yes',
            ],
            12 => [
                'option_id' => 13,
                'option_name' => 'rss_use_excerpt',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            13 => [
                'option_id' => 14,
                'option_name' => 'mailserver_url',
                'option_value' => 'mail.example.com',
                'autoload' => 'yes',
            ],
            14 => [
                'option_id' => 15,
                'option_name' => 'mailserver_login',
                'option_value' => 'login@example.com',
                'autoload' => 'yes',
            ],
            15 => [
                'option_id' => 16,
                'option_name' => 'mailserver_pass',
                'option_value' => 'password',
                'autoload' => 'yes',
            ],
            16 => [
                'option_id' => 17,
                'option_name' => 'mailserver_port',
                'option_value' => '110',
                'autoload' => 'yes',
            ],
            17 => [
                'option_id' => 18,
                'option_name' => 'default_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            18 => [
                'option_id' => 19,
                'option_name' => 'default_comment_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ],
            19 => [
                'option_id' => 20,
                'option_name' => 'default_ping_status',
                'option_value' => 'open',
                'autoload' => 'yes',
            ],
            20 => [
                'option_id' => 21,
                'option_name' => 'default_pingback_flag',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            21 => [
                'option_id' => 22,
                'option_name' => 'posts_per_page',
                'option_value' => '10',
                'autoload' => 'yes',
            ],
            22 => [
                'option_id' => 23,
                'option_name' => 'date_format',
                'option_value' => 'Y年n月j日',
                'autoload' => 'yes',
            ],
            23 => [
                'option_id' => 24,
                'option_name' => 'time_format',
                'option_value' => 'g:i A',
                'autoload' => 'yes',
            ],
            24 => [
                'option_id' => 25,
                'option_name' => 'links_updated_date_format',
                'option_value' => 'Y年n月j日 g:i A',
                'autoload' => 'yes',
            ],
            25 => [
                'option_id' => 26,
                'option_name' => 'comment_moderation',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            26 => [
                'option_id' => 27,
                'option_name' => 'moderation_notify',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            27 => [
                'option_id' => 28,
                'option_name' => 'permalink_structure',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            28 => [
                'option_id' => 29,
                'option_name' => 'rewrite_rules',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            29 => [
                'option_id' => 30,
                'option_name' => 'hack_file',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            30 => [
                'option_id' => 31,
                'option_name' => 'blog_charset',
                'option_value' => 'UTF-8',
                'autoload' => 'yes',
            ],
            31 => [
                'option_id' => 32,
                'option_name' => 'moderation_keys',
                'option_value' => '',
                'autoload' => 'no',
            ],
            32 => [
                'option_id' => 33,
                'option_name' => 'active_plugins',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ],
            33 => [
                'option_id' => 34,
                'option_name' => 'category_base',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            34 => [
                'option_id' => 35,
                'option_name' => 'ping_sites',
                'option_value' => 'http://rpc.pingomatic.com/',
                'autoload' => 'yes',
            ],
            35 => [
                'option_id' => 36,
                'option_name' => 'comment_max_links',
                'option_value' => '2',
                'autoload' => 'yes',
            ],
            36 => [
                'option_id' => 37,
                'option_name' => 'gmt_offset',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            37 => [
                'option_id' => 38,
                'option_name' => 'default_email_category',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            38 => [
                'option_id' => 39,
                'option_name' => 'recently_edited',
                'option_value' => '',
                'autoload' => 'no',
            ],
            39 => [
                'option_id' => 40,
                'option_name' => 'template',
                'option_value' => 'twentynineteen',
                'autoload' => 'yes',
            ],
            40 => [
                'option_id' => 41,
                'option_name' => 'stylesheet',
                'option_value' => 'twentynineteen',
                'autoload' => 'yes',
            ],
            41 => [
                'option_id' => 42,
                'option_name' => 'comment_whitelist',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            42 => [
                'option_id' => 43,
                'option_name' => 'blacklist_keys',
                'option_value' => '',
                'autoload' => 'no',
            ],
            43 => [
                'option_id' => 44,
                'option_name' => 'comment_registration',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            44 => [
                'option_id' => 45,
                'option_name' => 'html_type',
                'option_value' => 'text/html',
                'autoload' => 'yes',
            ],
            45 => [
                'option_id' => 46,
                'option_name' => 'use_trackback',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            46 => [
                'option_id' => 47,
                'option_name' => 'default_role',
                'option_value' => 'subscriber',
                'autoload' => 'yes',
            ],
            47 => [
                'option_id' => 48,
                'option_name' => 'db_version',
                'option_value' => '44719',
                'autoload' => 'yes',
            ],
            48 => [
                'option_id' => 49,
                'option_name' => 'uploads_use_yearmonth_folders',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            49 => [
                'option_id' => 50,
                'option_name' => 'upload_path',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            50 => [
                'option_id' => 51,
                'option_name' => 'blog_public',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            51 => [
                'option_id' => 52,
                'option_name' => 'default_link_category',
                'option_value' => '2',
                'autoload' => 'yes',
            ],
            52 => [
                'option_id' => 53,
                'option_name' => 'show_on_front',
                'option_value' => 'posts',
                'autoload' => 'yes',
            ],
            53 => [
                'option_id' => 54,
                'option_name' => 'tag_base',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            54 => [
                'option_id' => 55,
                'option_name' => 'show_avatars',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            55 => [
                'option_id' => 56,
                'option_name' => 'avatar_rating',
                'option_value' => 'G',
                'autoload' => 'yes',
            ],
            56 => [
                'option_id' => 57,
                'option_name' => 'upload_url_path',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            57 => [
                'option_id' => 58,
                'option_name' => 'thumbnail_size_w',
                'option_value' => '150',
                'autoload' => 'yes',
            ],
            58 => [
                'option_id' => 59,
                'option_name' => 'thumbnail_size_h',
                'option_value' => '150',
                'autoload' => 'yes',
            ],
            59 => [
                'option_id' => 60,
                'option_name' => 'thumbnail_crop',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            60 => [
                'option_id' => 61,
                'option_name' => 'medium_size_w',
                'option_value' => '300',
                'autoload' => 'yes',
            ],
            61 => [
                'option_id' => 62,
                'option_name' => 'medium_size_h',
                'option_value' => '300',
                'autoload' => 'yes',
            ],
            62 => [
                'option_id' => 63,
                'option_name' => 'avatar_default',
                'option_value' => 'mystery',
                'autoload' => 'yes',
            ],
            63 => [
                'option_id' => 64,
                'option_name' => 'large_size_w',
                'option_value' => '1024',
                'autoload' => 'yes',
            ],
            64 => [
                'option_id' => 65,
                'option_name' => 'large_size_h',
                'option_value' => '1024',
                'autoload' => 'yes',
            ],
            65 => [
                'option_id' => 66,
                'option_name' => 'image_default_link_type',
                'option_value' => 'none',
                'autoload' => 'yes',
            ],
            66 => [
                'option_id' => 67,
                'option_name' => 'image_default_size',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            67 => [
                'option_id' => 68,
                'option_name' => 'image_default_align',
                'option_value' => '',
                'autoload' => 'yes',
            ],
            68 => [
                'option_id' => 69,
                'option_name' => 'close_comments_for_old_posts',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            69 => [
                'option_id' => 70,
                'option_name' => 'close_comments_days_old',
                'option_value' => '14',
                'autoload' => 'yes',
            ],
            70 => [
                'option_id' => 71,
                'option_name' => 'thread_comments',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            71 => [
                'option_id' => 72,
                'option_name' => 'thread_comments_depth',
                'option_value' => '5',
                'autoload' => 'yes',
            ],
            72 => [
                'option_id' => 73,
                'option_name' => 'page_comments',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            73 => [
                'option_id' => 74,
                'option_name' => 'comments_per_page',
                'option_value' => '50',
                'autoload' => 'yes',
            ],
            74 => [
                'option_id' => 75,
                'option_name' => 'default_comments_page',
                'option_value' => 'newest',
                'autoload' => 'yes',
            ],
            75 => [
                'option_id' => 76,
                'option_name' => 'comment_order',
                'option_value' => 'asc',
                'autoload' => 'yes',
            ],
            76 => [
                'option_id' => 77,
                'option_name' => 'sticky_posts',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ],
            77 => [
                'option_id' => 78,
                'option_name' => 'widget_categories',
                'option_value' => 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            78 => [
                'option_id' => 79,
                'option_name' => 'widget_text',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ],
            79 => [
                'option_id' => 80,
                'option_name' => 'widget_rss',
                'option_value' => 'a:0:{}',
                'autoload' => 'yes',
            ],
            80 => [
                'option_id' => 81,
                'option_name' => 'uninstall_plugins',
                'option_value' => 'a:0:{}',
                'autoload' => 'no',
            ],
            81 => [
                'option_id' => 82,
                'option_name' => 'timezone_string',
                'option_value' => 'Asia/Tokyo',
                'autoload' => 'yes',
            ],
            82 => [
                'option_id' => 83,
                'option_name' => 'page_for_posts',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            83 => [
                'option_id' => 84,
                'option_name' => 'page_on_front',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            84 => [
                'option_id' => 85,
                'option_name' => 'default_post_format',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            85 => [
                'option_id' => 86,
                'option_name' => 'link_manager_enabled',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            86 => [
                'option_id' => 87,
                'option_name' => 'finished_splitting_shared_terms',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            87 => [
                'option_id' => 88,
                'option_name' => 'site_icon',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            88 => [
                'option_id' => 89,
                'option_name' => 'medium_large_size_w',
                'option_value' => '768',
                'autoload' => 'yes',
            ],
            89 => [
                'option_id' => 90,
                'option_name' => 'medium_large_size_h',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            90 => [
                'option_id' => 91,
                'option_name' => 'wp_page_for_privacy_policy',
                'option_value' => '3',
                'autoload' => 'yes',
            ],
            91 => [
                'option_id' => 92,
                'option_name' => 'show_comments_cookies_opt_in',
                'option_value' => '0',
                'autoload' => 'yes',
            ],
            92 => [
                'option_id' => 93,
                'option_name' => 'initial_db_version',
                'option_value' => '43764',
                'autoload' => 'yes',
            ],
            93 => [
                'option_id' => 94,
                'option_name' => 'wp_user_roles',
                'option_value' => 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}',
                'autoload' => 'yes',
            ],
            94 => [
                'option_id' => 95,
                'option_name' => 'fresh_site',
                'option_value' => '1',
                'autoload' => 'yes',
            ],
            95 => [
                'option_id' => 96,
                'option_name' => 'WPLANG',
                'option_value' => 'ja',
                'autoload' => 'yes',
            ],
            96 => [
                'option_id' => 97,
                'option_name' => 'widget_search',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            97 => [
                'option_id' => 98,
                'option_name' => 'widget_recent-posts',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            98 => [
                'option_id' => 99,
                'option_name' => 'widget_recent-comments',
                'option_value' => 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            99 => [
                'option_id' => 100,
                'option_name' => 'widget_archives',
                'option_value' => 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            100 => [
                'option_id' => 101,
                'option_name' => 'widget_meta',
                'option_value' => 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            101 => [
                'option_id' => 102,
                'option_name' => 'sidebars_widgets',
                'option_value' => 'a:3:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"array_version";i:3;}',
                'autoload' => 'yes',
            ],
            102 => [
                'option_id' => 103,
                'option_name' => 'widget_pages',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            103 => [
                'option_id' => 104,
                'option_name' => 'widget_calendar',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            104 => [
                'option_id' => 105,
                'option_name' => 'widget_media_audio',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            105 => [
                'option_id' => 106,
                'option_name' => 'widget_media_image',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            106 => [
                'option_id' => 107,
                'option_name' => 'widget_media_gallery',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            107 => [
                'option_id' => 108,
                'option_name' => 'widget_media_video',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            108 => [
                'option_id' => 109,
                'option_name' => 'widget_tag_cloud',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            109 => [
                'option_id' => 110,
                'option_name' => 'widget_nav_menu',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            110 => [
                'option_id' => 111,
                'option_name' => 'widget_custom_html',
                'option_value' => 'a:1:{s:12:"_multiwidget";i:1;}',
                'autoload' => 'yes',
            ],
            111 => [
                'option_id' => 112,
                'option_name' => 'cron',
                'option_value' => 'a:4:{i:1559438673;a:4:{s:34:"wp_privacy_delete_old_export_files";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:6:"hourly";s:4:"args";a:0:{}s:8:"interval";i:3600;}}s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1559438678;a:2:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}s:25:"delete_expired_transients";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1559438704;a:1:{s:32:"recovery_mode_clean_expired_keys";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}',
                'autoload' => 'yes',
            ],
            112 => [
                'option_id' => 113,
                'option_name' => '_transient_doing_cron',
                'option_value' => '1559439426.6014430522918701171875',
                'autoload' => 'yes',
            ],
            113 => [
                'option_id' => 116,
                'option_name' => '_site_transient_timeout_theme_roots',
                'option_value' => '1559440480',
                'autoload' => 'no',
            ],
            114 => [
                'option_id' => 117,
                'option_name' => '_site_transient_theme_roots',
                'option_value' => 'a:4:{s:31:"oki2a24com-twentynineteen-child";s:7:"/themes";s:14:"twentynineteen";s:7:"/themes";s:15:"twentyseventeen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}',
                'autoload' => 'no',
            ],
            115 => [
                'option_id' => 119,
                'option_name' => '_site_transient_timeout_browser_675c74d5f114ba25a49fb0f4cb02f70f',
                'option_value' => '1560043482',
                'autoload' => 'no',
            ],
            116 => [
                'option_id' => 120,
                'option_name' => '_site_transient_browser_675c74d5f114ba25a49fb0f4cb02f70f',
                'option_value' => 'a:10:{s:4:"name";s:6:"Chrome";s:7:"version";s:13:"74.0.3729.169";s:8:"platform";s:9:"Macintosh";s:10:"update_url";s:29:"https://www.google.com/chrome";s:7:"img_src";s:43:"http://s.w.org/images/browsers/chrome.png?1";s:11:"img_src_ssl";s:44:"https://s.w.org/images/browsers/chrome.png?1";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;s:6:"mobile";b:0;}',
                'autoload' => 'no',
            ],
            117 => [
                'option_id' => 122,
                'option_name' => '_site_transient_timeout_community-events-ac623c97556af98b0c073d91bd271cb2',
                'option_value' => '1559481883',
                'autoload' => 'no',
            ],
            118 => [
                'option_id' => 123,
                'option_name' => '_site_transient_community-events-ac623c97556af98b0c073d91bd271cb2',
                'option_value' => 'a:2:{s:8:"location";a:1:{s:2:"ip";s:13:"192.168.176.0";}s:6:"events";a:2:{i:0;a:7:{s:4:"type";s:8:"wordcamp";s:5:"title";s:15:"WordCamp Europe";s:3:"url";s:33:"https://2019.europe.wordcamp.org/";s:6:"meetup";s:0:"";s:10:"meetup_url";s:0:"";s:4:"date";s:19:"2019-06-20 00:00:00";s:8:"location";a:4:{s:8:"location";s:15:"Berlin, Germany";s:7:"country";s:2:"DE";s:8:"latitude";d:52.50697;s:9:"longitude";d:13.2843064;}}i:1;a:7:{s:4:"type";s:6:"meetup";s:5:"title";s:43:"札幌（Sapporo） WordPress Meetup vol.06";s:3:"url";s:65:"https://www.meetup.com/Sapporo-WordPress-Meetup/events/261640934/";s:6:"meetup";s:24:"Sapporo WordPress Meetup";s:10:"meetup_url";s:48:"https://www.meetup.com/Sapporo-WordPress-Meetup/";s:4:"date";s:19:"2019-06-12 19:00:00";s:8:"location";a:4:{s:8:"location";s:14:"Sapporo, Japan";s:7:"country";s:2:"jp";s:8:"latitude";d:43.06208;s:9:"longitude";d:141.354355;}}}}',
                'autoload' => 'no',
            ],
            119 => [
                'option_id' => 124,
                'option_name' => '_transient_timeout_feed_ab995de7a5278071ed721c721c891aed',
                'option_value' => '1559481884',
                'autoload' => 'no',
            ],
            120 => [
                'option_id' => 125,
                'option_name' => '_transient_feed_ab995de7a5278071ed721c721c891aed',
                'option_value' => 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:49:"



















";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:9:"日本語";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:24:"https://ja.wordpress.org";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:49:"WordPress 日本語ローカルサイトブログ";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:13:"lastBuildDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 22 May 2019 07:22:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"ja";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:40:"https://wordpress.org/?v=5.3-alpha-45484";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:48:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"WordPress 5.2.1 メンテナンスリリース";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:72:"https://ja.wordpress.org/2019/05/22/wordpress-5-2-1-maintenance-release/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 22 May 2019 07:22:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5650";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Josephaが書いた WordPress.org 公式ブログの記事、「WordPress 5.2.1 [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:5709:"
<p>以下は、<a href="https://profiles.wordpress.org/chanthaboune/">Josepha</a>が書いた WordPress.org 公式ブログの記事、「<a href="https://wordpress.org/news/2019/05/wordpress-5-2-1-maintenance-release/">WordPress 5.2.1 Maintenance Release</a>」を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。<br></p>



<hr class="wp-block-separator" />



<p>WordPress 5.2.1が利用可能になりました! このメンテナンスリリースでは、ブロックエディター、アクセシビリティ、国際化、そして<a href="https://ja.wordpress.org/2019/05/08/jaco/">5.2で導入された</a>サイトヘルス機能の改善と33件のバグを修正しています。</p>



<p><a href="https://core.trac.wordpress.org/query?status=closed&amp;resolution=fixed&amp;milestone=5.2.1&amp;order=priority">変更点のすべてのリストは Trac で</a>参照できます。</p>



<p>WordPress 5.2.1はショートサイクルのメンテナンスリリースです。<a href="https://core.trac.wordpress.org/query?milestone=5.2.2">バージョン5.2.2</a>はだいたい2週間後のリリースが予定されています。</p>



<p><a href="https://ja.wordpress.org/download/">WordPress 5.2.1</a> をダウンロードするか、<code>ダッシュボード → 更新</code>と 進み、<code>今すぐ更新する</code>をクリックしてください。自動バックグラウンド更新をサポートしているサイトは、すでに自動更新がはじまっています。</p>



<p>Jonathan Desrosiers と William Earnhardt がこの共同でリードし、他に52名の貢献者の皆さんとともにリリースしました。このリリースに協力していただいた皆さんに感謝します!</p>



<p><a href="https://profiles.wordpress.org/xavortm/">Alex Dimitrov</a>, <a href="https://profiles.wordpress.org/tellyworth/">Alex Shiels</a>, <a href="https://profiles.wordpress.org/afercia/">Andrea Fercia</a>, <a href="https://profiles.wordpress.org/aduth/">Andrew Duthie</a>, <a href="https://profiles.wordpress.org/azaozz/">Andrew Ozz</a>, <a href="https://profiles.wordpress.org/rarst/">Andrey “Rarst” Savchenko</a>, <a href="https://profiles.wordpress.org/afragen/">Andy Fragen</a>, <a href="https://profiles.wordpress.org/anischarolia/">anischarolia</a>, <a href="https://profiles.wordpress.org/birgire/">Birgir Erlendsson (birgire)</a>, <a href="https://profiles.wordpress.org/chesio/">chesio</a>, <a href="https://profiles.wordpress.org/chetan200891/">Chetan Prajapati</a>, <a href="https://profiles.wordpress.org/daxelrod/">daxelrod</a>, <a href="https://profiles.wordpress.org/dkarfa/">Debabrata Karfa</a>, <a href="https://profiles.wordpress.org/odminstudios/">Dima</a>, <a href="https://profiles.wordpress.org/dd32/">Dion Hulse</a>, <a href="https://profiles.wordpress.org/ocean90/">Dominik Schilling</a>, <a href="https://profiles.wordpress.org/iseulde/">Ella van Durpe</a>, <a href="https://profiles.wordpress.org/edocev/">Emil Dotsev</a>, <a href="https://profiles.wordpress.org/sachyya-sachet/">ghoul</a>, <a href="https://profiles.wordpress.org/gziolo/">Grzegorz (Greg) Ziółkowski</a>, <a href="https://profiles.wordpress.org/gwwar/">gwwar</a>, <a href="https://profiles.wordpress.org/hareesh-pillai/">Hareesh</a>, <a href="https://profiles.wordpress.org/ianbelanger/">Ian Belanger</a>, <a href="https://profiles.wordpress.org/imath/">imath</a>, <a href="https://profiles.wordpress.org/audrasjb/">Jb Audras</a>, <a href="https://profiles.wordpress.org/jeremyfelt/">Jeremy Felt</a>, <a href="https://profiles.wordpress.org/joen/">Joen Asmussen</a>, <a href="https://profiles.wordpress.org/desrosj/">Jonathan Desrosiers</a>, <a href="https://profiles.wordpress.org/spacedmonkey/">Jonny Harris</a>, <a href="https://profiles.wordpress.org/chanthaboune/">Josepha</a>, <a href="https://profiles.wordpress.org/jrf/">jrf</a>, <a href="https://profiles.wordpress.org/kjellr/">kjellr</a>, <a href="https://profiles.wordpress.org/clorith/">Marius L. J.</a>, <a href="https://profiles.wordpress.org/mikengarrett/">MikeNGarrett</a>, <a href="https://profiles.wordpress.org/dimadin/">Milan Dinić</a>, <a href="https://profiles.wordpress.org/mukesh27/">Mukesh Panchal</a>, <a href="https://profiles.wordpress.org/onlanka/">onlanka</a>, <a href="https://profiles.wordpress.org/paragoninitiativeenterprises/">paragoninitiativeenterprises</a>, <a href="https://profiles.wordpress.org/parkcityj/">parkcityj</a>, <a href="https://profiles.wordpress.org/peterwilsoncc/">Peter Wilson</a>, <a href="https://profiles.wordpress.org/presskopp/">Presskopp</a>, <a href="https://profiles.wordpress.org/youknowriad/">Riad Benguella</a>, <a href="https://profiles.wordpress.org/sergeybiryukov/">Sergey Biryukov</a>, <a href="https://profiles.wordpress.org/netweb/">Stephen Edgar</a>, <a href="https://profiles.wordpress.org/sebastienserre/">Sébastien SERRE</a>, <a href="https://profiles.wordpress.org/tfrommen/">Thorsten Frommen</a>, <a href="https://profiles.wordpress.org/hedgefield/">Tim Hengeveld</a>, <a href="https://profiles.wordpress.org/timothyblynjacobs/">Timothy Jacobs</a>, <a href="https://profiles.wordpress.org/timph/">timph</a>, <a href="https://profiles.wordpress.org/tobiasbg/">TobiasBg</a>, <a href="https://profiles.wordpress.org/tonybogdanov/">tonybogdanov</a>, <a href="https://profiles.wordpress.org/tobifjellner/">Tor-Bjorn Fjellner</a>, <a href="https://profiles.wordpress.org/earnjam/">William Earnhardt</a>, そして <a href="https://profiles.wordpress.org/fierevere/">Yui</a>。</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:48:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:29:"WordPress 5.2 “ジャコ”";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:41:"https://ja.wordpress.org/2019/05/08/jaco/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 08 May 2019 02:04:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5639";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:102:"以下は、Matt Mullenweg が書いた WordPress.org 公式ブログの記事、「WordPre [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:29968:"
<p>以下は、<a href="https://profiles.wordpress.org/matt">Matt Mullenweg</a> が書いた WordPress.org 公式ブログの記事、「<a href="https://wordpress.org/news/2019/05/jaco/">WordPress 5.2 “Jaco”</a>」を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。<br></p>



<hr class="wp-block-separator" />



<h2>サイトを安全に保つ</h2>



<figure class="wp-block-image"><img src="https://i1.wp.com/wordpress.org/news/files/2019/05/about_maintain-wordpress-cropped.png?fit=632%2C500&amp;ssl=1" alt="" class="wp-image-6926" /></figure>



<p>名高く革新的なジャズベーシスト、ジャコ・パストリアスに敬意を評して命名された WordPress 5.2がダウンロードもしくは WordPress のダッシュボードからのアップデートが可能になりました。このアップデートの新しい機能により、サイトでもし何かがうまくいかなかったときの修正がこれまでより、より容易になりました。</p>



<p>設定の問題や致命的なエラーを特定、修正するためのより強力なツールが備わりました。クライアントを手助けする開発者であれ、ご自分のサイトのみを管理する方であれ、これらのツールは必要なときに正しい情報を手に入れる助けになるでしょう。</p>



<hr class="wp-block-separator" />



<h3>サイトヘルスチェック</h3>



<div class="wp-block-image"><figure class="alignleft"><img src="https://i2.wp.com/wordpress.org/news/files/2019/05/about_site-health.png?resize=205%2C143&amp;ssl=1" alt="" class="wp-image-6927" /></figure></div>



<p>5.1で導入された<a href="https://ja.wordpress.org/2019/02/22/betty/">サイトヘルス</a>機能に加え、このリリースではよくある設定問題のデバッグに役立つ2つの新しいページが追加されました。また、開発者がサイト管理者のためにデバッグ情報を含められるスペースも追加しています。</p>



<h3>PHP エラープロテクション</h3>



<div class="wp-block-image"><figure class="alignleft"><img src="https://i1.wp.com/wordpress.org/news/files/2019/05/about_error-protection.png?resize=202%2C228&amp;ssl=1" alt="" class="wp-image-6930" /></figure></div>



<p>この管理者向けのアップデートにより、開発者の時間を損なわずに致命的なエラーを安全に修正もしくは管理できるようになります。いわゆる「死のホワイトスクリーン」のより優れた処理と、エラーを引き起こしているプラグインもしくはテーマを停止させるリカバリーモードへの移行が特徴です。</p>



<hr class="wp-block-separator" />



<h2>皆さんのための改善</h2>



<h3>アクセシビリティの向上</h3>



<p>スクリーンリーダーやその他の支援技術を利用する方々のため、状況認識とキーボードナビゲーションのフローを改善するための多くの変更が連携して施されました。</p>



<h3>新しいダッシュボードアイコン</h3>



<p>Instagram、BuddyPress 用のアイコンセット、そしてグローバルな多様性を受け入れるための回転する地球を含む13個の新しいアイコンが備わりました。ダッシュボードで見つけてお楽しみください !</p>



<h3>プラグイン互換性チェック</h3>



<p>インストールされているプラグインがサイトの PHP のバージョンと互換性があるかを WordPress が自動的に検知するようになりました。もしそのプラグインが現在使用中の PHP のバージョンよりも上のバージョンを必要とする場合、潜在的な互換性エラーを回避するため、WordPress はそのプラグインを有効化しません。</p>



<hr class="wp-block-separator" />



<h2>開発者をハッピーに</h2>



<p><a href="https://make.wordpress.org/core/2019/03/26/coding-standards-updates-for-php-5-6/"><strong>PHP バージョンの引き上げ</strong></a></p>



<p>サポートされる PHP の最低バージョンが5.6.20になりました。WordPress 5.2から、テーマとプラグインは名前空間、無名関数、そしてもっとたくさんのことを安全に活用できるようになりました !</p>



<p><a href="https://make.wordpress.org/core/2019/04/24/developer-focused-privacy-updates-in-5-2/"><strong>プライバシーのアップデート</strong></a></p>



<p>新しいテーマページテンプレート、条件分岐関数、そしてプライバシーポリシーページのデザインとカスタマイズをより容易にする2つの CSS クラス。</p>



<p><strong><a href="https://make.wordpress.org/core/2019/04/24/miscellaneous-developer-updates-in-5-2/">新しいボディタグのフック</a> </strong></p>



<p>5.2 では <code>wp_body_open</code> フックが導入されました。テーマが、<code>&lt;body&gt;</code> 要素の最初にコードを挿入できるようにします。</p>



<p><a href="https://make.wordpress.org/core/2019/03/25/building-javascript/"><strong>JavaScript のビルド</strong></a></p>



<p>wordpress/scripts パッケージ内での webpack と Babel 設定の追加により、モダンな JavaScript を書くための複雑なビルドツールのセットアップに開発者は悩む必要がなくなりました。</p>



<p><em>*PHP の古いバージョン(5.6.20未満)でサイトが動いている場合は、5.2をインストールする前に <a href="https://ja.wordpress.org/support/update-php/">PHP をアップデート</a>してください。</em></p>



<hr class="wp-block-separator" />



<h2>チーム</h2>



<p>このリリースは <a href="http://ma.tt/">Matt Mullenweg</a>、<a href="https://josepha.blog/">Josepha Haden Chomphosy</a>、そして <a href="https://pento.net/">Gary Pendergast</a> によってリードされました。 彼らは以下の327名の寛大なボランティア貢献者の皆さんに素晴らしい力添えを受けました。ご利用中の音楽サービスでジャコ・パストリアスの曲を流しながら、この方たちのプロフィールページを眺めてみてください:<a href="https://profiles.wordpress.org/aandrewdixon">aandrewdixon</a>, <a href="https://profiles.wordpress.org/aaroncampbell">Aaron D. Campbell</a>, <a href="https://profiles.wordpress.org/jorbin">Aaron Jorbin</a>, <a href="https://profiles.wordpress.org/adamsilverstein">Adam Silverstein</a>, <a href="https://profiles.wordpress.org/adamsoucie">Adam Soucie</a>, <a href="https://profiles.wordpress.org/oztaser">Adil Öztaşer</a>, <a href="https://profiles.wordpress.org/ajitbohra">Ajit Bohra</a>, <a href="https://profiles.wordpress.org/schlessera">Alain Schlesser</a>, <a href="https://profiles.wordpress.org/aldavigdis">aldavigdis</a>, <a href="https://profiles.wordpress.org/alexdenning">Alex Denning</a>, <a href="https://profiles.wordpress.org/akirk">Alex Kirk</a>, <a href="https://profiles.wordpress.org/viper007bond">Alex Mills</a>, <a href="https://profiles.wordpress.org/tellyworth">Alex Shiels</a>, <a href="https://profiles.wordpress.org/lexiqueen">Alexis</a>, <a href="https://profiles.wordpress.org/alexislloyd">Alexis Lloyd</a>, <a href="https://profiles.wordpress.org/allancole">allancole</a>, <a href="https://profiles.wordpress.org/allendav">Allen Snook</a>, <a href="https://profiles.wordpress.org/arena">André</a>, <a href="https://profiles.wordpress.org/nosolosw">Andrés</a>, <a href="https://profiles.wordpress.org/andraganescu">andraganescu</a>, <a href="https://profiles.wordpress.org/afercia">Andrea Fercia</a>, <a href="https://profiles.wordpress.org/andreamiddleton">Andrea Middleton</a>, <a href="https://profiles.wordpress.org/euthelup">Andrei Lupu</a>, <a href="https://profiles.wordpress.org/aduth">Andrew Duthie</a>, <a href="https://profiles.wordpress.org/nacin">Andrew Nacin</a>, <a href="https://profiles.wordpress.org/azaozz">Andrew Ozz</a>, <a href="https://profiles.wordpress.org/rarst">Andrey &#8220;Rarst&#8221; Savchenko</a>, <a href="https://profiles.wordpress.org/afragen">Andy Fragen</a>, <a href="https://profiles.wordpress.org/andizer">Andy Meerwaldt</a>, <a href="https://profiles.wordpress.org/aniketpatel">Aniket Patel</a>, <a href="https://profiles.wordpress.org/atimmer">Anton Timmermans</a>, <a href="https://profiles.wordpress.org/vanyukov">Anton Vanyukov</a>, <a href="https://profiles.wordpress.org/avillegasn">Antonio Villegas</a>, <a href="https://profiles.wordpress.org/antonypuckey">antonypuckey</a>, <a href="https://profiles.wordpress.org/aristath">Aristeides Stathopoulos</a>, <a href="https://profiles.wordpress.org/wpboss">Aslam Shekh</a>, <a href="https://profiles.wordpress.org/axaak">axaak</a>, <a href="https://profiles.wordpress.org/pixolin">Bego Mario Garde</a>, <a href="https://profiles.wordpress.org/empireoflight">Ben Dunkle</a>, <a href="https://profiles.wordpress.org/britner">Ben Ritner &#8211; Kadence Themes</a>, <a href="https://profiles.wordpress.org/bfintal">Benjamin Intal</a>, <a href="https://profiles.wordpress.org/billerickson">Bill Erickson</a>, <a href="https://profiles.wordpress.org/birgire">Birgir Erlendsson</a>, <a href="https://profiles.wordpress.org/bodohugobarwich">Bodo (Hugo) Barwich</a>, <a href="https://profiles.wordpress.org/gitlost">bonger</a>, <a href="https://profiles.wordpress.org/boonebgorges">Boone Gorges</a>, <a href="https://profiles.wordpress.org/bradleyt">Bradley Taylor</a>, <a href="https://profiles.wordpress.org/kraftbj">Brandon Kraft</a>, <a href="https://profiles.wordpress.org/brentswisher">Brent Swisher</a>, <a href="https://profiles.wordpress.org/bulletdigital">bulletdigital</a>, <a href="https://profiles.wordpress.org/burhandodhy">Burhan Nasir</a>, <a href="https://profiles.wordpress.org/cathibosco1">Cathi Bosco</a>, <a href="https://profiles.wordpress.org/chetan200891">Chetan Prajapati</a>, <a href="https://profiles.wordpress.org/chiaralovelaces">Chiara Magnani</a>, <a href="https://profiles.wordpress.org/chouby">Chouby</a>, <a href="https://profiles.wordpress.org/chrisvanpatten">Chris Van Patten</a>, <a href="https://profiles.wordpress.org/dswebsme">D.S. Webster</a>, <a href="https://profiles.wordpress.org/colorful-tones">Damon Cook</a>, <a href="https://profiles.wordpress.org/danielbachhuber">Daniel Bachhuber</a>, <a href="https://profiles.wordpress.org/danieltj">Daniel James</a>, <a href="https://profiles.wordpress.org/diddledan">Daniel Llewellyn</a>, <a href="https://profiles.wordpress.org/talldanwp">Daniel Richards</a>, <a href="https://profiles.wordpress.org/mte90">Daniele Scasciafratte</a>, <a href="https://profiles.wordpress.org/nerrad">Darren Ethier (nerrad)</a>, <a href="https://profiles.wordpress.org/drw158">Dave Whitley</a>, <a href="https://profiles.wordpress.org/davefx">DaveFX</a>, <a href="https://profiles.wordpress.org/davetgreen">davetgreen</a>, <a href="https://profiles.wordpress.org/david.binda">David Binovec</a>, <a href="https://profiles.wordpress.org/davidbinda">David Binovec</a>, <a href="https://profiles.wordpress.org/dlh">David Herrera</a>, <a href="https://profiles.wordpress.org/dgroddick">David Roddick</a>, <a href="https://profiles.wordpress.org/get_dave">David Smith</a>, <a href="https://profiles.wordpress.org/davidbaumwald">davidb</a>, <a href="https://profiles.wordpress.org/folletto">Davide &#8216;Folletto&#8217; Casali</a>, <a href="https://profiles.wordpress.org/dekervit">dekervit</a>, <a href="https://profiles.wordpress.org/denis-de-bernardy">Denis de Bernardy</a>, <a href="https://profiles.wordpress.org/dmsnell">Dennis Snell</a>, <a href="https://profiles.wordpress.org/valendesigns">Derek Herman</a>, <a href="https://profiles.wordpress.org/pcfreak30">Derrick Hammer</a>, <a href="https://profiles.wordpress.org/designsimply">designsimply</a>, <a href="https://profiles.wordpress.org/dhanukanuwan">Dhanukanuwan</a>, <a href="https://profiles.wordpress.org/dharm1025">Dharmesh Patel</a>, <a href="https://profiles.wordpress.org/dianeco">Diane</a>, <a href="https://profiles.wordpress.org/diegoreymendez">diegoreymendez</a>, <a href="https://profiles.wordpress.org/dilipbheda">Dilip Bheda</a>, <a href="https://profiles.wordpress.org/odminstudios">Dima</a>, <a href="https://profiles.wordpress.org/dd32">Dion Hulse</a>, <a href="https://profiles.wordpress.org/dency">Dixita Dusara</a>, <a href="https://profiles.wordpress.org/iamdmitrymayorov">Dmitry Mayorov</a>, <a href="https://profiles.wordpress.org/ocean90">Dominik Schilling</a>, <a href="https://profiles.wordpress.org/drewapicture">Drew Jaynes</a>, <a href="https://profiles.wordpress.org/dsifford">dsifford</a>, <a href="https://profiles.wordpress.org/iseulde">Ella van Durpe</a>, <a href="https://profiles.wordpress.org/etoledom">etoledom</a>, <a href="https://profiles.wordpress.org/fabiankaegy">fabiankaegy</a>, <a href="https://profiles.wordpress.org/faisal03">Faisal Alvi</a>, <a href="https://profiles.wordpress.org/parsmizban">Farhad Sakhaei</a>, <a href="https://profiles.wordpress.org/flixos90">Felix Arntz</a>, <a href="https://profiles.wordpress.org/peaceablewhale">Franklin Tse</a>, <a href="https://profiles.wordpress.org/fuegas">Fuegas</a>, <a href="https://profiles.wordpress.org/garrett-eclipse">Garrett Hyder</a>, <a href="https://profiles.wordpress.org/garyj">Gary Jones</a>, <a href="https://profiles.wordpress.org/soulseekah">Gennady Kovshenin</a>, <a href="https://profiles.wordpress.org/gziolo">Grzegorz (Greg) Ziółkowski</a>, <a href="https://profiles.wordpress.org/wido">Guido Scialfa</a>, <a href="https://profiles.wordpress.org/gutendev">GutenDev</a>, <a href="https://profiles.wordpress.org/hannahmalcolm">Hannah Malcolm</a>, <a href="https://profiles.wordpress.org/hardik-amipara">Hardik Amipara</a>, <a href="https://profiles.wordpress.org/thakkarhardik">Hardik Thakkar</a>, <a href="https://profiles.wordpress.org/luehrsen">Hendrik Luehrsen</a>, <a href="https://profiles.wordpress.org/henrywright-1">Henry</a>, <a href="https://profiles.wordpress.org/henrywright">Henry Wright</a>, <a href="https://profiles.wordpress.org/ryanshoover">Hoover</a>, <a href="https://profiles.wordpress.org/ianbelanger">Ian Belanger</a>, <a href="https://profiles.wordpress.org/iandunn">Ian Dunn</a>, <a href="https://profiles.wordpress.org/ice9js">ice9js</a>, <a href="https://profiles.wordpress.org/zinigor">Igor Zinovyev</a>, <a href="https://profiles.wordpress.org/imath">imath</a>, <a href="https://profiles.wordpress.org/ixium">Ixium</a>, <a href="https://profiles.wordpress.org/jdgrimes">J.D. Grimes</a>, <a href="https://profiles.wordpress.org/jakeparis">jakeparis</a>, <a href="https://profiles.wordpress.org/cc0a">James</a>, <a href="https://profiles.wordpress.org/janak007">janak Kaneriya</a>, <a href="https://profiles.wordpress.org/jarred-kennedy">Jarred Kennedy</a>, <a href="https://profiles.wordpress.org/vengisss">Javier Villanueva</a>, <a href="https://profiles.wordpress.org/jayupadhyay01">Jay Upadhyay</a>, <a href="https://profiles.wordpress.org/jaydeep-rami">Jaydip Rami</a>, <a href="https://profiles.wordpress.org/jaymanpandya">Jayman Pandya</a>, <a href="https://profiles.wordpress.org/jdeeburke">jdeeburke</a>, <a href="https://profiles.wordpress.org/audrasjb">Jean-Baptiste Audras</a>, <a href="https://profiles.wordpress.org/jeffpaul">Jeff Paul</a>, <a href="https://profiles.wordpress.org/cheffheid">Jeffrey de Wit</a>, <a href="https://profiles.wordpress.org/miss_jwo">Jenny</a>, <a href="https://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>, <a href="https://profiles.wordpress.org/endocreative">Jeremy Green</a>, <a href="https://profiles.wordpress.org/jeherve">Jeremy Herve</a>, <a href="https://profiles.wordpress.org/jitendrabanjara1991">jitendrabanjara1991</a>, <a href="https://profiles.wordpress.org/johnjamesjacoby">JJJ</a>, <a href="https://profiles.wordpress.org/joedolson">Joe Dolson</a>, <a href="https://profiles.wordpress.org/joemcgill">Joe McGill</a>, <a href="https://profiles.wordpress.org/joen">Joen Asmussen</a>, <a href="https://profiles.wordpress.org/j-falk">Johan Falk</a>, <a href="https://profiles.wordpress.org/johannadevos">Johanna de Vos</a>, <a href="https://profiles.wordpress.org/johnbillion">John Blackbourn</a>, <a href="https://profiles.wordpress.org/desrosj">Jonathan Desrosiers</a>, <a href="https://profiles.wordpress.org/jonathandejong">Jonathandejong</a>, <a href="https://profiles.wordpress.org/spacedmonkey">Jonny Harris</a>, <a href="https://profiles.wordpress.org/jonnybojangles">jonnybojangles</a>, <a href="https://profiles.wordpress.org/joostdevalk">Joost de Valk</a>, <a href="https://profiles.wordpress.org/jordesign">jordesign</a>, <a href="https://profiles.wordpress.org/koke">Jorge Bernal</a>, <a href="https://profiles.wordpress.org/jorgefilipecosta">Jorge Costa</a>, <a href="https://profiles.wordpress.org/keraweb">Jory Hogeveen</a>, <a href="https://profiles.wordpress.org/jcastaneda">Jose Castaneda</a>, <a href="https://profiles.wordpress.org/josephwa">josephwa</a>, <a href="https://profiles.wordpress.org/builtbynorthby">Josh Feck</a>, <a href="https://profiles.wordpress.org/joshuawold">JoshuaWold</a>, <a href="https://profiles.wordpress.org/joyously">Joy</a>, <a href="https://profiles.wordpress.org/jplojohn">jplo</a>, <a href="https://profiles.wordpress.org/jrtashjian">JR Tashjian</a>, <a href="https://profiles.wordpress.org/jrf">jrf</a>, <a href="https://profiles.wordpress.org/juiiee8487">Juhi Patel</a>, <a href="https://profiles.wordpress.org/juliarrr">juliarrr</a>, <a href="https://profiles.wordpress.org/kadamwhite">K. Adam White</a>, <a href="https://profiles.wordpress.org/kamataryo">KamataRyo</a>, <a href="https://profiles.wordpress.org/karinedo">Karine Do</a>, <a href="https://profiles.wordpress.org/katyatina">Katyatina</a>, <a href="https://profiles.wordpress.org/kelin1003">Kelin Chauhan</a>, <a href="https://profiles.wordpress.org/ryelle">Kelly Dwan</a>, <a href="https://profiles.wordpress.org/itzmekhokan">Khokan Sardar</a>, <a href="https://profiles.wordpress.org/killua99">killua99</a>, <a href="https://profiles.wordpress.org/ixkaito">Kite</a>, <a href="https://profiles.wordpress.org/kjellr">Kjell Reigstad</a>, <a href="https://profiles.wordpress.org/knutsp">Knut Sparhell</a>, <a href="https://profiles.wordpress.org/olein">Koji Kuno</a>, <a href="https://profiles.wordpress.org/obenland">Konstantin Obenland</a>, <a href="https://profiles.wordpress.org/xkon">Konstantinos Xenos</a>, <a href="https://profiles.wordpress.org/codemascot">Kʜᴀɴ (ಠ_ಠ)</a>, <a href="https://profiles.wordpress.org/laurelfulford">laurelfulford</a>, <a href="https://profiles.wordpress.org/lkraav">lkraav</a>, <a href="https://profiles.wordpress.org/lukecarbis">Luke Carbis</a>, <a href="https://profiles.wordpress.org/lgedeon">Luke Gedeon</a>, <a href="https://profiles.wordpress.org/lukepettway">Luke Pettway</a>, <a href="https://profiles.wordpress.org/maedahbatool">Maedah Batool</a>, <a href="https://profiles.wordpress.org/travel_girl">Maja Benke</a>, <a href="https://profiles.wordpress.org/malae">Malae</a>, <a href="https://profiles.wordpress.org/manzoorwanijk">Manzoor Wani</a>, <a href="https://profiles.wordpress.org/robobot3000">Marcin</a>, <a href="https://profiles.wordpress.org/iworks">Marcin Pietrzak</a>, <a href="https://profiles.wordpress.org/marco-peralta">Marco Peralta</a>, <a href="https://profiles.wordpress.org/marcofernandes">marcofernandes</a>, <a href="https://profiles.wordpress.org/mkaz">Marcus Kazmierczak</a>, <a href="https://profiles.wordpress.org/marekhrabe">marekhrabe</a>, <a href="https://profiles.wordpress.org/clorith">Marius Jensen</a>, <a href="https://profiles.wordpress.org/mbelchev">Mariyan Belchev</a>, <a href="https://profiles.wordpress.org/mapk">Mark Uraine</a>, <a href="https://profiles.wordpress.org/markcallen">markcallen</a>, <a href="https://profiles.wordpress.org/mechter">Markus Echterhoff</a>, <a href="https://profiles.wordpress.org/m-e-h">Marty Helmick</a>, <a href="https://profiles.wordpress.org/marybaum">marybaum</a>, <a href="https://profiles.wordpress.org/mattnyeus">mattnyeus</a>, <a href="https://profiles.wordpress.org/mdwolinski">mdwolinski</a>, <a href="https://profiles.wordpress.org/immeet94">Meet Makadia</a>, <a href="https://profiles.wordpress.org/melchoyce">Mel Choyce</a>, <a href="https://profiles.wordpress.org/mheikkila">mheikkila</a>, <a href="https://profiles.wordpress.org/wpscholar">Micah Wood</a>, <a href="https://profiles.wordpress.org/michelleweber">michelleweber</a>, <a href="https://profiles.wordpress.org/mcsf">Miguel Fonseca</a>, <a href="https://profiles.wordpress.org/mmtr86">Miguel Torres</a>, <a href="https://profiles.wordpress.org/simison">Mikael Korpela</a>, <a href="https://profiles.wordpress.org/mauteri">Mike Auteri</a>, <a href="https://profiles.wordpress.org/mikeschinkel">Mike Schinkel [WPLib Box project lead]</a>, <a href="https://profiles.wordpress.org/mikeschroder">Mike Schroder</a>, <a href="https://profiles.wordpress.org/mikeselander">Mike Selander</a>, <a href="https://profiles.wordpress.org/mikengarrett">MikeNGarrett</a>, <a href="https://profiles.wordpress.org/dimadin">Milan Dinić</a>, <a href="https://profiles.wordpress.org/0mirka00">mirka</a>, <a href="https://profiles.wordpress.org/lord_viper">Mobin Ghasempoor</a>, <a href="https://profiles.wordpress.org/mohadeseghasemi">Mohadese Ghasemi</a>, <a href="https://profiles.wordpress.org/saimonh">Mohammed Saimon</a>, <a href="https://profiles.wordpress.org/mor10">Morten Rand-Hendriksen</a>, <a href="https://profiles.wordpress.org/man4toman">Morteza Geransayeh</a>, <a href="https://profiles.wordpress.org/mmuhsin">Muhammad Muhsin</a>, <a href="https://profiles.wordpress.org/mukesh27">Mukesh Panchal</a>, <a href="https://profiles.wordpress.org/m_uysl">Mustafa Uysal</a>, <a href="https://profiles.wordpress.org/mzorz">mzorz</a>, <a href="https://profiles.wordpress.org/nfmohit">Nahid F. Mohit</a>, <a href="https://profiles.wordpress.org/naoki0h">Naoki Ohashi</a>, <a href="https://profiles.wordpress.org/nateallen">Nate Allen</a>, <a href="https://profiles.wordpress.org/greatislander">Ned Zimmerman</a>, <a href="https://profiles.wordpress.org/neobabis">Neokazis Charalampos</a>, <a href="https://profiles.wordpress.org/modernnerd">Nick Cernis</a>, <a href="https://profiles.wordpress.org/ndiego">Nick Diego</a>, <a href="https://profiles.wordpress.org/celloexpressions">Nick Halsey</a>, <a href="https://profiles.wordpress.org/jainnidhi">Nidhi Jain</a>, <a href="https://profiles.wordpress.org/nielslange">Niels Lange</a>, <a href="https://profiles.wordpress.org/nielsdeblaauw">nielsdeblaauw</a>, <a href="https://profiles.wordpress.org/nnikolov">Nikolay Nikolov</a>, <a href="https://profiles.wordpress.org/rabmalin">Nilambar Sharma</a>, <a href="https://profiles.wordpress.org/ninio">ninio</a>, <a href="https://profiles.wordpress.org/notnownikki">notnownikki</a>, <a href="https://profiles.wordpress.org/pandelisz">pandelisz</a>, <a href="https://profiles.wordpress.org/paragoninitiativeenterprises">paragoninitiativeenterprises</a>, <a href="https://profiles.wordpress.org/swissspidy">Pascal Birchler</a>, <a href="https://profiles.wordpress.org/pbearne">Paul Bearne</a>, <a href="https://profiles.wordpress.org/pbiron">Paul Biron</a>, <a href="https://profiles.wordpress.org/pedromendonca">Pedro Mendonça</a>, <a href="https://profiles.wordpress.org/peterbooker">Peter Booker</a>, <a href="https://profiles.wordpress.org/peterwilsoncc">Peter Wilson</a>, <a href="https://profiles.wordpress.org/pfiled">pfiled</a>, <a href="https://profiles.wordpress.org/pilou69">pilou69</a>, <a href="https://profiles.wordpress.org/pranalipatel">Pranali Patel</a>, <a href="https://profiles.wordpress.org/pratikkry">Pratik K. Yadav</a>, <a href="https://profiles.wordpress.org/presskopp">Presskopp</a>, <a href="https://profiles.wordpress.org/psealock">psealock</a>, <a href="https://profiles.wordpress.org/bamadesigner">Rachel Cherry</a>, <a href="https://profiles.wordpress.org/rahmon">Rahmon</a>, <a href="https://profiles.wordpress.org/superpoincare">Ramanan</a>, <a href="https://profiles.wordpress.org/ramiy">Rami Yushuvaev</a>, <a href="https://profiles.wordpress.org/ramizmanked">Ramiz Manked</a>, <a href="https://profiles.wordpress.org/ramonopoly">ramonopoly</a>, <a href="https://profiles.wordpress.org/youknowriad">Riad Benguella</a>, <a href="https://profiles.wordpress.org/rinatkhaziev">Rinat Khaziev</a>, <a href="https://profiles.wordpress.org/noisysocks">Robert Anderson</a>, <a href="https://profiles.wordpress.org/rsusanto">Rudy Susanto</a>, <a href="https://profiles.wordpress.org/ryan">Ryan Boren</a>, <a href="https://profiles.wordpress.org/welcher">Ryan Welcher</a>, <a href="https://profiles.wordpress.org/saeedfard">Saeed Fard</a>, <a href="https://profiles.wordpress.org/salcode">Sal Ferrarello</a>, <a href="https://profiles.wordpress.org/samanehmirrajabi">Samaneh Mirrajabi</a>, <a href="https://profiles.wordpress.org/samikeijonen">Sami Keijonen</a>, <a href="https://profiles.wordpress.org/elhardoum">Samuel Elh</a>, <a href="https://profiles.wordpress.org/sgarza">Santiago Garza</a>, <a href="https://profiles.wordpress.org/saracope">Sara Cope</a>, <a href="https://profiles.wordpress.org/saracup">saracup</a>, <a href="https://profiles.wordpress.org/tinkerbelly">sarah semark</a>, <a href="https://profiles.wordpress.org/sebastianpisula">Sebastian Pisula</a>, <a href="https://profiles.wordpress.org/ebrahimzadeh">Sekineh Ebrahimzadeh</a>, <a href="https://profiles.wordpress.org/sergeybiryukov">Sergey Biryukov</a>, <a href="https://profiles.wordpress.org/sergioestevao">SergioEstevao</a>, <a href="https://profiles.wordpress.org/sgastard">sgastard</a>, <a href="https://profiles.wordpress.org/sharifkiberu">sharifkiberu</a>, <a href="https://profiles.wordpress.org/shazdeh">shazdeh</a>, <a href="https://profiles.wordpress.org/shital-patel">Shital Marakana</a>, <a href="https://profiles.wordpress.org/sky_76">sky_76</a>, <a href="https://profiles.wordpress.org/soean">Soren Wrede</a>, <a href="https://profiles.wordpress.org/netweb">Stephen Edgar</a>, <a href="https://profiles.wordpress.org/stevenkword">Steven Word</a>, <a href="https://profiles.wordpress.org/subrataemfluence">Subrata Sarkar</a>, <a href="https://profiles.wordpress.org/sudar">Sudar Muthu</a>, <a href="https://profiles.wordpress.org/sudhiryadav">Sudhir Yadav</a>, <a href="https://profiles.wordpress.org/szepeviktor">szepe.viktor</a>, <a href="https://profiles.wordpress.org/miyauchi">Takayuki Miyauchi</a>, <a href="https://profiles.wordpress.org/karmatosed">Tammie Lister</a>, <a href="https://profiles.wordpress.org/themonic">Themonic</a>, <a href="https://profiles.wordpress.org/thomstark">thomstark</a>, <a href="https://profiles.wordpress.org/tfrommen">Thorsten Frommen</a>, <a href="https://profiles.wordpress.org/thrijith">Thrijith Thankachan</a>, <a href="https://profiles.wordpress.org/hedgefield">Tim Hedgefield</a>, <a href="https://profiles.wordpress.org/timwright12">Tim Wright</a>, <a href="https://profiles.wordpress.org/timothyblynjacobs">Timothy Jacobs</a>, <a href="https://profiles.wordpress.org/timph">timph</a>, <a href="https://profiles.wordpress.org/tmatsuur">tmatsuur</a>, <a href="https://profiles.wordpress.org/ohiosierra">tmdesigned</a>, <a href="https://profiles.wordpress.org/tmdesigned">tmdesigned</a>, <a href="https://profiles.wordpress.org/tz-media">Tobias Zimpel</a>, <a href="https://profiles.wordpress.org/tomharrigan">TomHarrigan</a>, <a href="https://profiles.wordpress.org/tobifjellner">Tor-Bjorn Fjellner</a>, <a href="https://profiles.wordpress.org/toro_unit">Toro_Unit (Hiroshi Urabe)</a>, <a href="https://profiles.wordpress.org/torres126">torres126</a>, <a href="https://profiles.wordpress.org/zodiac1978">Torsten Landsiedel</a>, <a href="https://profiles.wordpress.org/itowhid06">Towhidul Islam</a>, <a href="https://profiles.wordpress.org/liljimmi">Tracy Levesque</a>, <a href="https://profiles.wordpress.org/umang7">Umang Bhanvadia</a>, <a href="https://profiles.wordpress.org/vaishalipanchal">Vaishali Panchal</a>, <a href="https://profiles.wordpress.org/webfactory">WebFactory</a>, <a href="https://profiles.wordpress.org/westonruter">Weston Ruter</a>, <a href="https://profiles.wordpress.org/bahia0019">William &#8216;Bahia&#8217; Bay</a>, <a href="https://profiles.wordpress.org/earnjam">William Earnhardt</a>, <a href="https://profiles.wordpress.org/williampatton">williampatton</a>, <a href="https://profiles.wordpress.org/willscrlt">Willscrlt</a>, <a href="https://profiles.wordpress.org/wolly">Wolly aka Paolo Valenti</a>, <a href="https://profiles.wordpress.org/wrwrwr0">wrwrwr0</a>, <a href="https://profiles.wordpress.org/yoavf">Yoav Farhi</a>, <a href="https://profiles.wordpress.org/fierevere">Yui</a>, そして <a href="https://profiles.wordpress.org/zebulan">zebulan</a>。</p>



<p>また、<a href="https://wordpress.org/support/">サポートフォーラム</a> (<a href="https://ja.wordpress.org/support/">日本語</a>)で貢献してくださっているコミュニティボランティアの皆さんにも感謝いたします。WordPress を初めて使う方からであれ、最初のリリースからの利用者であれ、彼らは世界中からの質問に答えています。こうしたリリースは皆さんのおかげでより成功したものと</p>



<p>最新情報を追ったり、貢献したい方は <a href="https://make.wordpress.org/">Make WordPress</a> や<a href="https://make.wordpress.org/core/">コア開発ブログ</a>をチェックしてみてください。</p>



<p>WordPress を選んでいただき、ありがとうございます !</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:48:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:17:"WordPress 5.2 RC2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://ja.wordpress.org/2019/05/06/wordpress-5-2-rc2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 06 May 2019 06:45:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5636";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Josephaが書いた WordPress.org 公式ブログの記事、「WordPress 5.2 R [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:3447:"
<p>以下は、<a href="https://profiles.wordpress.org/chanthaboune/">Josepha</a>が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/05/wordpress-5-2-rc2/">「WordPress 5.2 RC 2」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.2 の2つ目のリリース候補が利用可能になりました !</p>



<p>WordPress  5.2は<strong><a href="https://make.wordpress.org/core/5-2/">5月7日 (火)</a></strong><a href="https://make.wordpress.org/core/5-2/"> </a>にリリース予定ですが、そのためには皆さんの手助けが必要です。まだバージョン5.2を試していないなら、今がその時です。</p>



<p>WordPress 5.2リリース候補版をテストする方法は2つあります。<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> プラグインを使うか、<a href="https://wordpress.org/wordpress-5.2-RC2.zip">ここから RC 版 (zip) をダウンロード</a>してください。</p>



<p>WordPress 5.2についての詳細は<a href="https://wordpress.org/news/2019/04/wordpress-5-2-release-candidate/">最初のリリース候補の投稿を御覧ください。</a>(<a href="https://ja.wordpress.org/2019/04/29/wordpress-5-2-release-candidate/">日本語</a>)</p>



<p>このリリースには最終的なアバウトページのデザインが含まれます。また、次の修正が含まれています:</p>



<ul><li>リカバリーモード通知メールの正しい翻訳 (#47093)。</li><li>マルチサイトでのサイトヘルス機能の改善 (#47084)。</li></ul>



<h2>プラグイン・テーマ開発者の方へ</h2>



<p>WordPress 5.2でプラグインとテーマをテストし、readme ファイルの「検証済み最新バージョン」を 5.2に更新してください。互換性の問題を発見した場合は、最終リリース前に解決できるように<a href="https://wordpress.org/support/forum/alphabeta/">サポートフォーラム (英語版)</a> に投稿してください。</p>



<p>大きな変更の詳細に触れた、開発者向けの<a href="https://make.wordpress.org/core/2019/04/16/wordpress-5-2-field-guide/">5.2フィールドガイド</a>も公開しています。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください !</p>



<p><strong>バグを見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/"> (日本語)</a> に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は <a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>It’s the start of May<br>and the release is coming.<br>We all give a cheer!</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:32:"WordPress 5.2 リリース候補";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://ja.wordpress.org/2019/04/29/wordpress-5-2-release-candidate/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 29 Apr 2019 05:29:29 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5630";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Josephaが書いた WordPress.org 公式ブログの記事、「WordPress 5.2 R [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4355:"
<p>以下は、<a href="https://profiles.wordpress.org/chanthaboune/">Josepha</a>が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/04/wordpress-5-2-release-candidate/">「WordPress 5.2 Release Candidate」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.2の最初のリリース候補版がご利用いただけるようになりました。</p>



<p>これは、WordPress 5.2のリリースが近づいている今、重要なマイルストーンです。「リリース候補版」とは、新しいバージョンをリリースする準備はできたものの、多くのユーザーと数千個のプラグイン・テーマが存在するため、何か足りないものがある可能性もあるということを意味しています。WordPress  5.2は<strong>5月7日 (火)</strong> にリリース予定ですが、そのためには皆さんの手助けが必要です。まだバージョン5.2を試していないなら、今がその時です。</p>



<p>WordPress 5.2リリース候補版をテストする方法は2つあります。<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> プラグインを使うか、<a href="https://wordpress.org/wordpress-5.2-RC1.zip">ここから RC 版 (zip) をダウンロード</a>してください。</p>



<h2>WordPress 5.2に含まれるのは?</h2>



<p>前回のリリースに引き続き、WordPress 5.2ではさらに設定問題や致命的なエラーを特定、修正するためのより強固なツールを提供しています。クライアントを手助けする開発者であれ、ご自分のサイトのみを管理する方であれ、これらのツールは必要なときに正しい情報を手に入れる助けになるでしょう。</p>



<p>サイトヘルスチェックツールと PHP エラープロテクションツールはまったく新しい機能で、もしサイトのプラグインやテーマに関する問題を発見しても安心させてくれます。また、ダッシュボードで使用できるアイコンの更新や、支援技術を使用するすべてのユーザーに対する新しいアクセシビリティへの対応などもあります。</p>



<h2>プラグイン・テーマ開発者の方へ</h2>



<p>WordPress 5.2でプラグインとテーマをテストし、readme ファイルの「検証済み最新バージョン」を 5.2に更新してください。互換性の問題を発見した場合は、最終リリース前に解決できるように<a href="https://wordpress.org/support/forum/alphabeta/">サポートフォーラム (英語版)</a> に投稿してください。</p>



<p>大きな変更の詳細に触れた、開発者向けの<a href="https://make.wordpress.org/core/2019/04/16/wordpress-5-2-field-guide/">5.2フィールドガイド</a>も公開しています。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください。このリリースが、5.2リリーススケジュールにおける<a href="https://make.wordpress.org/polyglots/handbook/glossary/#hard-freeze">ハードストリングフリーズ</a> (文字列が確定したポイント) のタイミングとなります。</p>



<p><strong>バグを見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/"> (日本語)</a> に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は <a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>Howdy, RC 1!<br>With tools this interesting,<br>I can hardly wait.</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"WordPress 5.2 ベータ 3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://ja.wordpress.org/2019/04/13/wordpress-5-2-beta-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 13 Apr 2019 03:06:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5610";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Jonathan Desrosiers が書いた WordPress.org 公式ブログの記事、「Wo [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:6421:"
<p>以下は、<a href="https://profiles.wordpress.org/desrosj/">Jonathan Desrosiers</a> が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/04/wordpress-5-2-beta-3/">「WordPress 5.2 Beta 3」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.2 ベータ 3がリリースされました。</p>



<p>この<strong>ソフトウェアはまだ開発中です</strong>ので、本番サイトで使うことはおすすめしません。新しいバージョンを試すためにテストサイトを立ち上げることを検討してみてください。</p>



<p>WordPress 5.2ベータをテストする方法は2つあります。<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> プラグインを使うか (「最新版ナイトリービルド」を選択)、<a href="https://wordpress.org/wordpress-5.2-beta3.zip">ここから ベータ 版 (zip) をダウンロード</a>してください。</p>



<p>WordPress 5.2は<a href="https://make.wordpress.org/core/5-2/">4月30日</a>にリリースされる予定です。そこにたどり着くために私たちにはみなさんの助けが必要です。<a href="https://ja.wordpress.org/2019/04/13/wordpress-5-2-beta-2/">ベータ2</a>を試した皆さんからのテストやフィードバックに感謝します。あれから<a href="https://core.trac.wordpress.org/query?status=closed&amp;changetime=04%2F09%2F2019..04%2F13%2F2019&amp;milestone=5.2&amp;group=component&amp;col=id&amp;col=summary&amp;col=status&amp;col=milestone&amp;col=owner&amp;col=type&amp;col=priority&amp;order=priority">40のチケットがクローズされました。</a>主な変更とバグの修正をご紹介します。</p>



<ul><li>新しいサイトヘルス機能は改善され続けています。</li><li>サポートしていないバージョンの PHP 上で動いているサイトではプラグインがアップデートされなくなりました。(<a href="https://core.trac.wordpress.org/ticket/46613">#46613</a>)</li><li>サイトがリカバリーモードで動いている場合、それがより明確になりました。(<a href="https://core.trac.wordpress.org/ticket/46608">#46608</a>)</li><li>集中ボタンがクラッシクエディターでのキーボードナビゲーションを妨げないようになりました。(<a href="https://core.trac.wordpress.org/ticket/46640">#46640</a>).</li><li>支援技術により管理バーサブメニューでのアナウンスがより良くなりました。 (<a href="https://core.trac.wordpress.org/ticket/37513">#37513</a>).</li><li>WordPress メールの件名がより一貫性を持つようになりました。 (<a href="https://core.trac.wordpress.org/ticket/37940">#37940</a>).</li><li>個人データのエクスポートはユーザーデータのダウンロードが完了したときだけ表示されます。( <a href="https://core.trac.wordpress.org/ticket/44644">#44644</a>).</li><li>アクセシビリティをさらに改善しました (<a href="https://core.trac.wordpress.org/ticket/35497">#35497</a> と <a href="https://core.trac.wordpress.org/ticket/42853">#42853</a>).</li></ul>



<h2>PHP の最低バージョンのアップデート</h2>



<p><strong>重要なお知らせ:</strong> WordPress 5.2ベータ2から、WordPress が必要とする PHP の最低バージョンが5.6.20になります。もし PHP  の古いバージョンで運営している場合は 、WordPress 5.2 が正式にリリースされる前にアップデートすることを強くおすすめします。</p>



<figure class="wp-block-embed-wordpress wp-block-embed is-type-wp-embed is-provider-日本語"><div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content" data-secret="VZ8A9yLpYF"><a href="https://ja.wordpress.org/2019/04/03/minimum-php-version-update/">PHP 最低必須バージョンの変更</a></blockquote><iframe title="&#8220;PHP 最低必須バージョンの変更&#8221; &#8212; 日本語" class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" src="https://ja.wordpress.org/2019/04/03/minimum-php-version-update/embed/#?secret=VZ8A9yLpYF" data-secret="VZ8A9yLpYF" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div></figure>



<h2>開発者の方へ</h2>



<p>WordPress 5.2 は、WordPress を開発する体験をより洗練されたものにするための変更を数多く含んでいます。遅れないようにするため、<a href="https://make.wordpress.org/core/">Make WordPress Core ブログ</a> を購読し、皆さんのプロダクトに影響を与えうるアップデートや変更に関する<a href="https://make.wordpress.org/core/tag/5-1+dev-notes/">開発者向け文章</a>に特別な注意を払っておいてください。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください。 ベータ 3 リリースが、5.2 リリースサイクルにおける<a href="https://make.wordpress.org/polyglots/handbook/glossary/#soft-freeze">ソフトストリングフリーズ</a> (文字列がおおむね確定したポイント) のタイミングとなります。</p>



<p><strong>バグを見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/">&nbsp;(日本語)</a>&nbsp;に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は&nbsp;<a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>Would you look at that<br>each day brings release closer<br>test to be ready</em>.</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"WordPress 5.2 ベータ2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://ja.wordpress.org/2019/04/13/wordpress-5-2-beta-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 13 Apr 2019 02:31:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5605";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Gary Pendergastが書いた WordPress.org 公式ブログの記事、「WordPre [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:5684:"
<p>以下は、<a href="https://profiles.wordpress.org/pento/">Gary Pendergast</a>が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/04/wordpress-5-2-beta-2/">「WordPress 5.2 Beta 2」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.2 ベータ 2がリリースされました。</p>



<p>この<strong>ソフトウェアはまだ開発中です</strong>ので、本番サイトで使うことはおすすめしません。新しいバージョンを試すためにテストサイトを立ち上げることを検討してみてください。</p>



<p>WordPress 5.2ベータをテストする方法は2つあります。<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> プラグインを使うか (「最新版ナイトリービルド」を選択)、<a href="https://wordpress.org/wordpress-5.2-beta2.zip">ここから ベータ 版 (zip) をダウンロード</a>してください。</p>



<p>WordPress 5.2は<a href="https://make.wordpress.org/core/5-2/">4月30日</a>にリリースされる予定です。そこにたどり着くために私たちにはみなさんの助けが必要です。ベータ1を試した皆さんからのテストやフィードバックに感謝します。あれから<a href="https://core.trac.wordpress.org/query?status=closed&amp;changetime=2019-03-28..&amp;milestone=5.2&amp;group=component&amp;col=id&amp;col=summary&amp;col=owner&amp;col=type&amp;col=priority&amp;col=component&amp;col=version&amp;order=priority">100のチケットがクローズされました。</a>主な変更とバグの修正をご紹介します。</p>



<ul><li>Emoji 12のサポートを追加しました! </li><li>新しい <code>wp_body_open()</code> テンプレートタグ (と、それに付随する<code>wp_body_open</code> アクション) により、テーマ (そしてプラグインも) から <code>&lt;body&gt;</code> 開始タグ直後にコンテンツを追加できるようになりました。 (<a href="https://core.trac.wordpress.org/ticket/12563">#12563</a>)</li><li>ダイナミックブロックコンテンツで余計なパラグラフタグが間違って表示されないようになりました。 (<a href="https://core.trac.wordpress.org/ticket/45495">#45495</a>)</li><li>サイトヘルスチェックの画面でバグの修正、微調整、パフォーマンスの向上が行われました。</li><li>クラッシュプロテクションがプラグインの編集を妨げないようになりました。(<a href="https://core.trac.wordpress.org/ticket/46045">#46045</a>).</li><li>カスタムエラーハンドラーが正しく読み込まれるようになりました。 (<a href="https://core.trac.wordpress.org/ticket/46069">#46069</a>).</li></ul>



<h2>PHP の最低バージョンのアップデート</h2>



<p>WordPress 5.2ベータ2から、WordPress が必要とする PHP の最低バージョンが5.6.20になります。もし PHP の古いバージョンで運営している場合は 、WordPress 5.2 が正式にリリースされる前にアップデートすることを強くおすすめします。</p>



<figure class="wp-block-embed-wordpress wp-block-embed is-type-wp-embed is-provider-日本語"><div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content" data-secret="jnrY1zz3C2"><a href="https://ja.wordpress.org/2019/04/03/minimum-php-version-update/">PHP 最低必須バージョンの変更</a></blockquote><iframe title="&#8220;PHP 最低必須バージョンの変更&#8221; &#8212; 日本語" class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" src="https://ja.wordpress.org/2019/04/03/minimum-php-version-update/embed/#?secret=jnrY1zz3C2" data-secret="jnrY1zz3C2" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div></figure>



<h2>開発者の方へ</h2>



<p>WordPress 5.2 は、WordPress を開発する体験をより洗練されたものにするための変更を数多く含んでいます。遅れないようにするため、<a href="https://make.wordpress.org/core/">Make WordPress Core ブログ</a> を購読し、皆さんのプロダクトに影響を与えうるアップデートや変更に関する<a href="https://make.wordpress.org/core/tag/5-1+dev-notes/">開発者向け文章</a>に特別な注意を払っておいてください。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください。</p>



<p>バグ<strong>を見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/">(日本語)</a>&nbsp;に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は&nbsp;<a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>The wonderful thing<br> about betas, is betas<br> are wonderful things.</em> </p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"WordPress 5.2 ベータ1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://ja.wordpress.org/2019/04/04/wordpress-5-2-beta-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 04 Apr 2019 08:41:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5572";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"以下は、Josephaが書いた WordPress.org 公式ブログの記事、「WordPress 5.2 B [&#8230;]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"JOTAKI Taisuke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:9990:"
<p>以下は、<a href="https://profiles.wordpress.org/chanthaboune/">Josepha</a>が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/03/wordpress-5-2-beta-1/">「WordPress 5.2 Beta 1」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.2 ベータ 1がリリースされました。</p>



<p>この<strong>ソフトウェアはまだ開発中です</strong>ので、本番サイトで使うことはおすすめしません。新しいバージョンを試すためにテストサイトを立ち上げることを検討してみてください。</p>



<p>WordPress 5.2 ベータ版をテストする方法は2つあります:</p>



<ul><li><a href="https://ja.wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a>&nbsp;プラグイン (「最新版ナイトリービルド」を選択 ) を利用する</li><li><a href="https://wordpress.org/wordpress-5.2-beta1.zip">ベータ版の ZIP ファイルをこちらからダウンロードする</a></li></ul>



<p>WordPress 5.2は<a href="https://make.wordpress.org/core/5-2/">4月30日</a>にリリースされる予定です。そこにたどり着くために私たちにはみなさんの助けが必要です。今後数週間でできるだけ多くのバグを見つけることができるよう、以下にテストすべき重要項目の一部を挙げました。</p>



<h2>ブロックエディター</h2>



<p>WordPress 5.1以降、ブロックエディターのパフォーマンスが大幅に向上し、大量の投稿の読み込み時間が35％短縮され、キーを押す時間（入力時の反応の速さ）が半分になりました。</p>



<p>アクセシビリティも向上し続けています。ブロックエディターは、ブラウザの縮小モーション設定をサポートします。投稿URLのスラッグはより良いラベルとヘルプテキストを持っています。ランドマークをナビゲートするキーボードのフォーカススタイルは、より明確で一貫性があります。さまざまな新しい会話メッセージがあり、スクリーンリーダーの動作をより便利にするために既存のメッセージが調整されています。</p>



<p>いくつかの新しいブロックを追加しました。</p>



<ul><li>RSSブロック</li><li>Amazon Kindle埋め込みブロック</li><li>検索ブロック</li><li>カレンダーブロック</li><li>タグクラウドブロック</li></ul>



<p>これらのブロックを追跡し、必要なものだけを表示するために、ブロックのオンとオフを切り替える新しいブロック管理ツールがあります。</p>



<figure class="wp-block-image"><img src="https://i2.wp.com/wordpress.org/news/files/2019/03/01-block-manager-1024x768.png?fit=632%2C474&amp;ssl=1" alt="" class="wp-image-6806" /><figcaption>ブロック管理モーダル</figcaption></figure>



<p>私たちは常に既存のブロックにも取り組んでいます。ブロックエディターには何百ものバグフィックスと改良がほどこされました。グーテンベルグプラグインリリースでそれらについてもっと読むことができます：4.9、5.0、5.1、5.2、および5.3。</p>



<h3>WordPress モバイルアプリ</h3>



<p>ブロックエディターはウェブサイトだけのものでもありません。WordPress モバイルアプリには現在、実験的なバージョンの組み込みのブロックエディターが含まれています。これはまだ開発中ですが、今すぐ試すことができます。</p>



<figure class="wp-block-embed-wordpress wp-block-embed is-type-wp-embed is-provider-make-wordpress-mobile"><div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content" data-secret="AikCDGVOo4"><a href="https://make.wordpress.org/mobile/2019/02/26/the-block-editor-is-coming-to-the-mobile-apps/">The block editor is coming to the mobile apps</a></blockquote><iframe title="&#8220;The block editor is coming to the mobile apps&#8221; &#8212; Make WordPress Mobile" class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" src="https://make.wordpress.org/mobile/2019/02/26/the-block-editor-is-coming-to-the-mobile-apps/embed/#?secret=AikCDGVOo4" data-secret="AikCDGVOo4" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div></figure>



<h2>サイトヘルスチェック</h2>



<p>サイトヘルスチェックは、WordPress エコシステム全体の安定性とパフォーマンスの向上を目的とした進行中のプロジェクトです。</p>



<p>このプロジェクトの最初のフェーズ（当初は WordPress 5.1を目標としていました）が WordPress 5.2には含まれています。初めに WordPress が問題のあるコードをキャッチして一時停止するので、ダッシュボードにログインして問題が何であるかを確認できます（<a href="https://core.trac.wordpress.org/ticket/44458">#44458</a>）。以前は、ファイルにFTPでアクセスするか、ホストに連絡する必要がありました。</p>



<p>また、ダッシュボードに新しいヘルスチェックツールを追加しています。 <em>ツール</em>メニューにアクセスして<em>ヘルスチェック</em>をクリックすると、サイトの速度とセキュリティを向上させるのに役立つ情報が得られます。</p>



<figure class="wp-block-embed-wordpress wp-block-embed is-type-wp-embed is-provider-make-wordpress-core"><div class="wp-block-embed__wrapper">
<blockquote class="wp-embedded-content" data-secret="pWu7mOaVYB"><a href="https://make.wordpress.org/core/2019/03/20/the-improved-fatal-error-protection/">The Improved Fatal Error Protection</a></blockquote><iframe title="&#8220;The Improved Fatal Error Protection&#8221; &#8212; Make WordPress Core" class="wp-embedded-content" sandbox="allow-scripts" security="restricted" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" src="https://make.wordpress.org/core/2019/03/20/the-improved-fatal-error-protection/embed/#?secret=pWu7mOaVYB" data-secret="pWu7mOaVYB" width="600" height="338" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div></figure>



<h2>PHP バージョンバンプ</h2>



<p>このリリースでは、<a href="https://make.wordpress.org/core/2018/12/08/updating-the-minimum-php-version/">WordPress がサポートされる PHP の最低バージョンを5.6に引き上げます</a>。この変更に準備ができているかどうかを確認するため、WordPress 5.2では必要に応じて警告が表示され、PHP のバージョンをアップグレードする手助けをします。</p>



<h2>開発者の皆さんへ</h2>



<ul><li>プラグインがサポートする PHP の最低バージョンを指定できるようになったため、ユーザーのサイトを壊す危険を冒さずに安全に開発方法を現代化することができます。(<a href="https://core.trac.wordpress.org/ticket/40934">#40934</a>)</li><li><code>sodium_compat</code> ライブラリを追加しました。これは、<a href="https://blog.zend.com/2018/11/06/modern-cryptography-in-php-7-2-with-sodium/">PHP 7.2で追加されたSodiumベースの暗号化ライブラリ</a>に対する下位互換性を提供します。 (<a href="https://core.trac.wordpress.org/ticket/45806">#45806</a>)</li><li>ダッシュアイコンの新しいリリースがあります。WordPress ダッシュボードアイコンフォントです。利用できる新しい25のアイコンがあります！ (<a href="https://core.trac.wordpress.org/ticket/41074">#41074</a>)</li><li>アクセシビリティを向上させるために  <code>get_search_form()</code> にラベルを渡せるようになりました 。(<a href="https://core.trac.wordpress.org/ticket/42057">#42057</a>)</li></ul>



<p>WordPress 5.2ではこれまでに<a href="https://core.trac.wordpress.org/query?status=closed&amp;milestone=5.2&amp;group=resolution&amp;order=priority">130個のチケットがクローズ</a>され、WordPress の操作性を円滑にするための多数の小さなバグ修正と改良が行われています。</p>



<p>5.2 について開発者が知っておくべきその他の変更の詳細については、今後の数週間 <a href="https://make.wordpress.org/core/">Make WordPress Core ブログ</a> (<code>dev-notes</code>&nbsp;タグが<a href="https://make.wordpress.org/core/tag/5-1+dev-notes/">ついています</a>) をチェックしてみてください。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください。</p>



<p>バグ<strong>を見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/">(日本語)</a>&nbsp;に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は&nbsp;<a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>With each new release,<br>bearing multiple betas; <br>We fix, then we fly.</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"PHP 最低必須バージョンの変更";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"https://ja.wordpress.org/2019/04/03/minimum-php-version-update/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 03 Apr 2019 01:48:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Hosting";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5559";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:154:"今月末リリース予定の WordPress 5.2 では PHP の最低必須バージョンを更新し、PHP 5.6.20 以降が必須となる見通しです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Naoko Takano";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4816:"
<p>以下は、<a href="https://profiles.wordpress.org/jorbin/">Aaron Jorbin</a>&nbsp;が書いた WordPress.org 公式ブログの記事、「<a href="https://wordpress.org/news/2019/04/minimum-php-version-update/">Minimum PHP Version update</a>」を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>今月末に WordPress 5.2 のリリースを予定していますが、それと同時に PHP の最低必須バージョンを更新します。WordPress には、PHP 5.6.20 以降が必須となります。</p>



<p>WordPress 5.1 から、PHP バージョン 5.6 以下を使っているユーザーの方にはダッシュボードに <a href="https://ja.wordpress.org/support/update-php/">PHP の更新を助ける情報</a>を含む通知が表示されています。以来、<a href="https://ja.wordpress.org/about/stats/">WordPress 統計情報</a>で、より新しいバージョンの PHP を利用するユーザーの増加が確認できるようになりました。</p>



<figure class="wp-block-image"><img src="https://ja.wordpress.org/files/2019/04/update-php-notice-1024x388.png" alt="" class="wp-image-5562" srcset="https://ja.wordpress.org/files/2019/04/update-php-notice-1024x388.png 1024w, https://ja.wordpress.org/files/2019/04/update-php-notice-300x114.png 300w, https://ja.wordpress.org/files/2019/04/update-php-notice-768x291.png 768w, https://ja.wordpress.org/files/2019/04/update-php-notice.png 1226w" sizes="(max-width: 1024px) 100vw, 1024px" /><figcaption>古すぎるバージョンの PHP を使っているユーザーに表示される通知</figcaption></figure>



<h2>PHP をアップグレードすべき理由</h2>



<p>お使いのサーバーでサポート対象外バージョンの PHP が稼働している場合、 WordPress 更新ツールは WordPress 5.2 をサイトに提供しません。WordPress を手動で更新しようとした場合、作業は失敗するでしょう。最新の WordPress 機能を使い続けたい場合は PHP をより新しいバージョンにアップグレードする必要があります。</p>



<p>PHP を新しいバージョンにアップグレードする際、WordPress としては推奨バージョンである PHP 7.3 への更新をおすすめしています。PHP internals チームは、最新バージョンがこれまで最速となるようすばらしい努力を重ねてきています。これはつまり、アップグレードを行うことでサイト運営者・訪問者の両方に対してサイトのスピードを改善できるということです。</p>



<p>このパフォーマンス強化はまた、サイトのホスティングに必要なサーバーの数を減らせるということも意味しています。PHP をアップグレードすることは、サイト運営者であるあなたに朗報なだけではなく、<a href="https://wordpress.org/news/2019/03/one-third-of-the-web/">Web 上のサイトの1/3を占める WordPress</a> がこれまでよりも少ない電力を要するため、地球にも優しいということでもあります。</p>



<h2>PHP のアップグレード方法</h2>



<p>新バージョンの PHP にアップグレードするために手助けが必要な方は、詳<a href="https://ja.wordpress.org/support/update-php/">しいドキュメンテーションを利用できます</a>。リンク先のページには、ホスティングサービス (レンタルサーバーなど) へサポートを依頼するために送るメッセージのサンプルも含まれます。多くのホスティングサービスも、各自に特化した&nbsp;<a href="https://github.com/WordPress/servehappy-resources/blob/master/tutorials/hosting-specific/tutorials-ja.md">PHP をアップグレード</a>する方法についての情報を公開しています。</p>



<h2>現在は PHP 5.6、近々 PHP 7 以降へ</h2>



<p>今回、<a href="https://wordpress.org/news/2010/07/eol-for-php4-and-mysql4/">2010年</a>以来初めて WordPress の PHP 必須バージョンを上げることになりますが、これが2019年最後の変更とはならないかもしれません。WordPress コアチームは、年末に PHP 7 以降を最低必須バージョンにすることも視野に入れつつ、最新バージョンの PHP がどれくらい採用されているかを観察していく予定です。</p>



<p><a href="https://ja.wordpress.org/support/update-php/"><strong>PHP のバージョンアップ</a>をして、今後 WordPress のバージョンを更新できるように備えましょう !</strong></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:48:"









";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:29:"WordPress 5.1 “ベティ”";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:42:"https://ja.wordpress.org/2019/02/22/betty/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 22 Feb 2019 02:04:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5542";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"WordPress のバージョン 5.1「ベティ」がご利用いただけるようになりました。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Naoko Takano";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:47762:"
<p>以下は、<a href="https://profiles.wordpress.org/matt">Matt Mullenweg</a>&nbsp;が書いた WordPress.org 公式ブログの記事、「<a href="https://wordpress.org/news/2019/02/betty/">WordPress 5.1 “Betty”</a>」を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。<br></p>



<hr class="wp-block-separator" />



<h2>コツコツ改善</h2>



<figure class="wp-block-image"><img src="https://s.w.org/images/core/5.1/update.svg" alt="PHP 互換性チェック機能のイメージ" /></figure>



<p>WordPress のバージョン 5.1が、ダウンロードまたはダッシュボードからの更新用にご利用いただけるようになりました。このリリースは、ジャズボーカリストのベティ・カーターに敬意を表して名付けました。</p>



<p>新しいブロックエディターを導入したメジャーリリースである <a href="https://ja.wordpress.org/2018/12/07/wordpress-5-0-bebo/">WordPress 5.0</a>  の後継となる今回のバージョンのフォーカスは「洗練」です。特に、エディター全体のパフォーマンスの向上に力を注ぎました。さらにこのリリースは、サイト管理者や開発者に必須のツールを新たに含むことにより、より良く、速く、安全な WordPress への道筋をつけるものとなっています。</p>



<h2>サイトヘルス</h2>



<div class="wp-block-image"><figure class="alignright is-resized"><img src="https://s.w.org/images/core/5.1/site-health.svg" alt="サイトヘルス機能のイメージ" width="182" height="160" /></figure></div>



<p>今回のリリースでは安全性と速度を念頭に置いて、WordPress 初となる「<a href="https://make.wordpress.org/core/2019/01/14/php-site-health-mechanisms-in-5-1/">サイトヘルス</a>」機能を導入しました。かなり古いバージョンの PHP (WordPress を動しているプログラミング言語) を実行しているサイト管理者に対し、WordPress はお知らせを表示し始めます。</p>



<p>新しいプラグインをインストールする際、サイトヘルス機能は使用中の PHP バージョンとプラグインの互換性をチェックします。もしプラグインが現在のサイトでは動作しないバージョンを必須としている場合は、WordPress がプラグインをインストールできなくします。</p>



<h2>エディターの改善</h2>



<div class="wp-block-image"><figure class="alignright is-resized"><img src="https://s.w.org/images/core/5.1/editor-performance.svg" alt="エディターパフォーマンス改善のイメージ" width="182" height="182" /></figure></div>



<p>WordPress 5.0 から導入された新ブロックエディターは改善を続けています。今回最も大きな点として、エディター内での安定したパフォーマンス向上を実現することができました。エディターの起動が少し速く、タイピングがよりスムーズに感じるはずです。</p>



<p>次回数回のリリースでも、さらなるパフォーマンス改善を予定しています。</p>



<hr class="wp-block-separator" />



<h2>開発者の皆さんへ</h2>



<h3><a href="https://make.wordpress.org/core/2019/01/28/multisite-support-for-site-metadata-in-5-1/">マルチサイトメタデータ</a></h3>



<p>5.1 には、サイトに関するメタデータを保存し、マルチサイトネットワークで必要となる任意のサイトデータの保存も可能にする新しいデータベーステーブルを追加しました。</p>



<h3><a href="https://make.wordpress.org/core/2019/01/23/cron-api-changes-in-wordpress-5-1/">Cron API</a></h3>



<p>Cron API を、データを返すのを助ける新機能および Cron ストレージを変更するための新しいフィルターとともに更新しました。他の挙動変更により、FastCGI と PHP-FPM 7.0.16 以降を実行中のサーバーでのCron 生成に影響があります。</p>



<h3><a href="https://make.wordpress.org/core/2018/05/16/preparing-wordpress-for-a-javascript-future-part-1-build-step-and-folder-reorganization/">新 JS ビルド</a></h3>



<p>WordPress 5.1 では、5.0 でスタートした大幅なコードの再編成の後、新しい JavaScript ビルドオプションを取り入れました。</p>



<h3><a href="https://make.wordpress.org/core/2019/01/23/miscellaneous-developer-focused-changes-in-5-1/">その他の開発者向け改善点</a></h3>



<p>その他の改善は以下などです。</p>



<ul><li><code>WP_DEBUG_LOG</code> 定数用の値変更</li><li>テストスイート内の新しいテスト設定ファイル定数、新しいプラグインアクションフック</li><li><code>wp_unique_post_slug()</code>、<code>WP_User_Query</code>、<code>count_users()</code> 用の短絡フィルター</li><li>新&nbsp;<code>human_readable_duration</code>&nbsp;関数</li><li>タクソノミーメタボックスのサニタイズ改善</li><li><code>WP_Meta_Query</code> を使う際のメタキーに対する制限的な&nbsp;<code>LIKE</code>&nbsp;のサポート</li><li>REST API エンドポイント登録時の間違いの通知</li></ul>



<hr class="wp-block-separator" />



<h2>チーム</h2>



<p>このリリースのリードは <a href="http://ma.tt/">Matt Mullenweg</a> 、そして <a href="https://pento.net/">Gary Pendergast</a> が<a href="https://core.trac.wordpress.org/changeset/42343">シニア・コード・リシャッフラー</a>そして<a href="https://core.trac.wordpress.org/changeset/43309">詩人</a>として共同作業しました。2人は、以下の561人の貢献者による素晴らしい力添えを受けました。このうち、231人は初の貢献者でした ! ご利用中の音楽サービスでベティ・カーターの曲を流しながら、この方たちのプロフィールページを眺めてみてください。 <a href="https://profiles.wordpress.org/0x6f0">0x6f0</a>,&nbsp;<a href="https://profiles.wordpress.org/1265578519-1">1265578519</a>,&nbsp;<a href="https://profiles.wordpress.org/1naveengiri">1naveengiri</a>,&nbsp;<a href="https://profiles.wordpress.org/360zen">360zen</a>,&nbsp;<a href="https://profiles.wordpress.org/aardrian">aardrian</a>,&nbsp;<a href="https://profiles.wordpress.org/jorbin">Aaron Jorbin</a>,&nbsp;<a href="https://profiles.wordpress.org/abdullahramzan">Abdullah Ramzan</a>,&nbsp;<a href="https://profiles.wordpress.org/abhayvishwakarma">Abhay Vishwakarma</a>,&nbsp;<a href="https://profiles.wordpress.org/abhijitrakas">Abhijit Rakas</a>,&nbsp;<a href="https://profiles.wordpress.org/ibachal">Achal Jain</a>,&nbsp;<a href="https://profiles.wordpress.org/achbed">achbed</a>,&nbsp;<a href="https://profiles.wordpress.org/adamsilverstein">Adam Silverstein</a>,&nbsp;<a href="https://profiles.wordpress.org/ajitbohra">Ajit Bohra</a>,&nbsp;<a href="https://profiles.wordpress.org/schlessera">Alain Schlesser</a>,&nbsp;<a href="https://profiles.wordpress.org/aldavigdis">aldavigdis</a>,&nbsp;<a href="https://profiles.wordpress.org/alejandroxlopez">alejandroxlopez</a>,&nbsp;<a href="https://profiles.wordpress.org/alexstine">Alex</a>,&nbsp;<a href="https://profiles.wordpress.org/tellyworth">Alex Shiels</a>,&nbsp;<a href="https://profiles.wordpress.org/xyfi">Alexander Botteram</a>,&nbsp;<a href="https://profiles.wordpress.org/alexvorn2">Alexandru Vornicescu</a>,&nbsp;<a href="https://profiles.wordpress.org/alexgso">alexgso</a>,&nbsp;<a href="https://profiles.wordpress.org/all">All</a>,&nbsp;<a href="https://profiles.wordpress.org/allancole">allancole</a>,&nbsp;<a href="https://profiles.wordpress.org/allendav">Allen Snook</a>,&nbsp;<a href="https://profiles.wordpress.org/alvarogois">Alvaro Gois dos Santos</a>,&nbsp;<a href="https://profiles.wordpress.org/acirujano">Ana Cirujano</a>,&nbsp;<a href="https://profiles.wordpress.org/anantajitjg">Anantajit JG</a>,&nbsp;<a href="https://profiles.wordpress.org/nosolosw">Andrés</a>,&nbsp;<a href="https://profiles.wordpress.org/afercia">Andrea Fercia</a>,&nbsp;<a href="https://profiles.wordpress.org/andg">Andrea Gandino</a>,&nbsp;<a href="https://profiles.wordpress.org/andreamiddleton">Andrea Middleton</a>,&nbsp;<a href="https://profiles.wordpress.org/andrei0x309">andrei0x309</a>,&nbsp;<a href="https://profiles.wordpress.org/andreiglingeanu">andreiglingeanu</a>,&nbsp;<a href="https://profiles.wordpress.org/aduth">Andrew Duthie</a>,&nbsp;<a href="https://profiles.wordpress.org/andrewza">Andrew Lima</a>,&nbsp;<a href="https://profiles.wordpress.org/nacin">Andrew Nacin</a>,&nbsp;<a href="https://profiles.wordpress.org/anevins">Andrew Nevins</a>,&nbsp;<a href="https://profiles.wordpress.org/azaozz">Andrew Ozz</a>,&nbsp;<a href="https://profiles.wordpress.org/rarst">Andrey Savchenko</a>,&nbsp;<a href="https://profiles.wordpress.org/afragen">Andy Fragen</a>,&nbsp;<a href="https://profiles.wordpress.org/andizer">Andy Meerwaldt</a>,&nbsp;<a href="https://profiles.wordpress.org/la-geek">Angelika Reisiger</a>,&nbsp;<a href="https://profiles.wordpress.org/antaltettinger">Antal Tettinger</a>,&nbsp;<a href="https://profiles.wordpress.org/antipole">antipole</a>,&nbsp;<a href="https://profiles.wordpress.org/atimmer">Anton Timmermans</a>,&nbsp;<a href="https://profiles.wordpress.org/avillegasn">Antonio Villegas</a>,&nbsp;<a href="https://profiles.wordpress.org/antonioeatgoat">antonioeatgoat</a>,&nbsp;<a href="https://profiles.wordpress.org/aranwer104">Anwer AR</a>,&nbsp;<a href="https://profiles.wordpress.org/aryamaaru">Arun</a>,&nbsp;<a href="https://profiles.wordpress.org/mrasharirfan">Ashar Irfan</a>,&nbsp;<a href="https://profiles.wordpress.org/ashokrd2013">ashokrd2013</a>,&nbsp;<a href="https://profiles.wordpress.org/ayeshrajans">Ayesh Karunaratne</a>,&nbsp;<a href="https://profiles.wordpress.org/ayubadiputra">Ayub Adiputra</a>,&nbsp;<a href="https://profiles.wordpress.org/barryceelen">Barry Ceelen</a>,&nbsp;<a href="https://profiles.wordpress.org/behzod">Behzod Saidov</a>,&nbsp;<a href="https://profiles.wordpress.org/benhuberman">benhuberman</a>,&nbsp;<a href="https://profiles.wordpress.org/benoitchantre">Benoit Chantre</a>,&nbsp;<a href="https://profiles.wordpress.org/benvaassen">benvaassen</a>,&nbsp;<a href="https://profiles.wordpress.org/bhargavmehta">Bhargav Mehta</a>,&nbsp;<a href="https://profiles.wordpress.org/bikecrazyy">bikecrazyy</a>,&nbsp;<a href="https://profiles.wordpress.org/birgire">Birgir Erlendsson</a>,&nbsp;<a href="https://profiles.wordpress.org/bjornw">BjornW</a>,&nbsp;<a href="https://profiles.wordpress.org/blair-jersyer">Blair jersyer</a>,&nbsp;<a href="https://profiles.wordpress.org/blob">blob</a>,&nbsp;<a href="https://profiles.wordpress.org/blobfolio">Blobfolio</a>,&nbsp;<a href="https://profiles.wordpress.org/bobbingwide">bobbingwide</a>,&nbsp;<a href="https://profiles.wordpress.org/boblinthorst">boblinthorst</a>,&nbsp;<a href="https://profiles.wordpress.org/boonebgorges">Boone Gorges</a>,&nbsp;<a href="https://profiles.wordpress.org/bor0">Boro Sitnikovski</a>,&nbsp;<a href="https://profiles.wordpress.org/bradparbs">Brad Parbs</a>,&nbsp;<a href="https://profiles.wordpress.org/bradleyt">Bradley</a>,&nbsp;<a href="https://profiles.wordpress.org/bramheijmink">bramheijmink</a>,&nbsp;<a href="https://profiles.wordpress.org/kraftbj">Brandon Kraft</a>,&nbsp;<a href="https://profiles.wordpress.org/bpayton">Brandon Payton</a>,&nbsp;<a href="https://profiles.wordpress.org/brentswisher">Brent Swisher</a>,&nbsp;<a href="https://profiles.wordpress.org/rzen">Brian Richards</a>,&nbsp;<a href="https://profiles.wordpress.org/bridgetwillard">bridgetwillard</a>,&nbsp;<a href="https://profiles.wordpress.org/bandonrandon">Brooke.</a>,&nbsp;<a href="https://profiles.wordpress.org/bruceallen">bruceallen</a>,&nbsp;<a href="https://profiles.wordpress.org/burhandodhy">Burhan Nasir</a>,&nbsp;<a href="https://profiles.wordpress.org/burlingtonbytes">Bytes.co</a>,&nbsp;<a href="https://profiles.wordpress.org/icaleb">Caleb Burks</a>,&nbsp;<a href="https://profiles.wordpress.org/calin">Calin Don</a>,&nbsp;<a href="https://profiles.wordpress.org/campusboy1987">campusboy</a>,&nbsp;<a href="https://profiles.wordpress.org/carolinegeven">carolinegeven</a>,&nbsp;<a href="https://profiles.wordpress.org/ccismaru">ccismaru</a>,&nbsp;<a href="https://profiles.wordpress.org/chasewg">chasewg</a>,&nbsp;<a href="https://profiles.wordpress.org/chetan200891">Chetan Prajapati</a>,&nbsp;<a href="https://profiles.wordpress.org/chouby">Chouby</a>,&nbsp;<a href="https://profiles.wordpress.org/chrico">ChriCo</a>,&nbsp;<a href="https://profiles.wordpress.org/chriscct7">chriscct7</a>,&nbsp;<a href="https://profiles.wordpress.org/boda1982">Christopher Spires</a>,&nbsp;<a href="https://profiles.wordpress.org/claudiu">claudiu</a>,&nbsp;<a href="https://profiles.wordpress.org/cliffpaulick">Clifford Paulick</a>,&nbsp;<a href="https://profiles.wordpress.org/munklefish">Code Clinic</a>,&nbsp;<a href="https://profiles.wordpress.org/codegrau">codegrau</a>,&nbsp;<a href="https://profiles.wordpress.org/coleh">coleh</a>,&nbsp;<a href="https://profiles.wordpress.org/conner_bw">conner_bw</a>,&nbsp;<a href="https://profiles.wordpress.org/coreymckrill">Corey McKrill</a>,&nbsp;<a href="https://profiles.wordpress.org/croce">croce</a>,&nbsp;<a href="https://profiles.wordpress.org/littlebigthing">Csaba (LittleBigThings)</a>,&nbsp;<a href="https://profiles.wordpress.org/clarinetlord">Cyrus Collier</a>,&nbsp;<a href="https://profiles.wordpress.org/danielbachhuber">Daniel Bachhuber</a>,&nbsp;<a href="https://profiles.wordpress.org/danieltj">Daniel James</a>,&nbsp;<a href="https://profiles.wordpress.org/daniel-koskinen">Daniel Koskinen</a>,&nbsp;<a href="https://profiles.wordpress.org/talldanwp">Daniel Richards</a>,&nbsp;<a href="https://profiles.wordpress.org/mte90">Daniele Scasciafratte</a>,&nbsp;<a href="https://profiles.wordpress.org/danimalbrown">danimalbrown</a>,&nbsp;<a href="https://profiles.wordpress.org/dannycooper">Danny Cooper</a>,&nbsp;<a href="https://profiles.wordpress.org/dannydehaan">Danny de Haan</a>,&nbsp;<a href="https://profiles.wordpress.org/darko-a7">Darko A7</a>,&nbsp;<a href="https://profiles.wordpress.org/nerrad">Darren Ethier (nerrad)</a>,&nbsp;<a href="https://profiles.wordpress.org/davepullig">Dave Pullig</a>,&nbsp;<a href="https://profiles.wordpress.org/davidakennedy">David A. Kennedy</a>,&nbsp;<a href="https://profiles.wordpress.org/davidanderson">David Anderson</a>,&nbsp;<a href="https://profiles.wordpress.org/davidbinda">David Binovec</a>,&nbsp;<a href="https://profiles.wordpress.org/desertsnowman">David Cramer</a>,&nbsp;<a href="https://profiles.wordpress.org/dlh">David Herrera</a>,&nbsp;<a href="https://profiles.wordpress.org/dglingren">David Lingren</a>,&nbsp;<a href="https://profiles.wordpress.org/dshanske">David Shanske</a>,&nbsp;<a href="https://profiles.wordpress.org/superdav42">David Stone</a>,&nbsp;<a href="https://profiles.wordpress.org/dekervit">dekervit</a>,&nbsp;<a href="https://profiles.wordpress.org/denisco">Denis Yanchevskiy</a>,&nbsp;<a href="https://profiles.wordpress.org/dmsnell">Dennis Snell</a>,&nbsp;<a href="https://profiles.wordpress.org/designsimply">designsimply</a>,&nbsp;<a href="https://profiles.wordpress.org/dfangstrom">dfangstrom</a>,&nbsp;<a href="https://profiles.wordpress.org/dhanendran">Dhanendran</a>,&nbsp;<a href="https://profiles.wordpress.org/dharm1025">Dharmesh Patel</a>,&nbsp;<a href="https://profiles.wordpress.org/dhavalkasvala">Dhaval kasavala</a>,&nbsp;<a href="https://profiles.wordpress.org/dhruvin">Dhruvin</a>,&nbsp;<a href="https://profiles.wordpress.org/diedeexterkate">DiedeExterkate</a>,&nbsp;<a href="https://profiles.wordpress.org/dilipbheda">Dilip Bheda</a>,&nbsp;<a href="https://profiles.wordpress.org/dingo_bastard">dingo_d</a>,&nbsp;<a href="https://profiles.wordpress.org/dd32">Dion Hulse</a>,&nbsp;<a href="https://profiles.wordpress.org/dipeshkakadiya">dipeshkakadiya</a>,&nbsp;<a href="https://profiles.wordpress.org/ocean90">Dominik Schilling</a>,&nbsp;<a href="https://profiles.wordpress.org/donncha">Donncha O Caoimh</a>,&nbsp;<a href="https://profiles.wordpress.org/dontstealmyfish">dontstealmyfish</a>,&nbsp;<a href="https://profiles.wordpress.org/drewapicture">Drew Jaynes</a>,&nbsp;<a href="https://profiles.wordpress.org/drivingralle">Drivingralle</a>,&nbsp;<a href="https://profiles.wordpress.org/drywallbmb">drywallbmb</a>,&nbsp;<a href="https://profiles.wordpress.org/dschalk">dschalk</a>,&nbsp;<a href="https://profiles.wordpress.org/dsifford">dsifford</a>,&nbsp;<a href="https://profiles.wordpress.org/eamax">eamax</a>,&nbsp;<a href="https://profiles.wordpress.org/eartboard">eArtboard</a>,&nbsp;<a href="https://profiles.wordpress.org/edo888">edo888</a>,&nbsp;<a href="https://profiles.wordpress.org/edocev">edocev</a>,&nbsp;<a href="https://profiles.wordpress.org/electricfeet">ElectricFeet</a>,&nbsp;<a href="https://profiles.wordpress.org/iseulde">Ella Van&nbsp;Durpe</a>,&nbsp;<a href="https://profiles.wordpress.org/ericlewis">Eric Andrew Lewis</a>,&nbsp;<a href="https://profiles.wordpress.org/ericdaams">Eric Daams</a>,&nbsp;<a href="https://profiles.wordpress.org/erich_k4wp">Erich Munz</a>,&nbsp;<a href="https://profiles.wordpress.org/ethitter">Erick Hitter</a>,&nbsp;<a href="https://profiles.wordpress.org/ericmeyer">ericmeyer</a>,&nbsp;<a href="https://profiles.wordpress.org/etoledom">etoledom</a>,&nbsp;<a href="https://profiles.wordpress.org/evansolomon">Evan Solomon</a>,&nbsp;<a href="https://profiles.wordpress.org/dyrer">Evangelos Athanasiadis</a>,&nbsp;<a href="https://profiles.wordpress.org/ever">ever</a>,&nbsp;<a href="https://profiles.wordpress.org/everyone">everyone</a>,&nbsp;<a href="https://profiles.wordpress.org/faisal03">Faisal Alvi</a>,&nbsp;<a href="https://profiles.wordpress.org/felipeelia">Felipe Elia</a>,&nbsp;<a href="https://profiles.wordpress.org/flixos90">Felix Arntz</a>,&nbsp;<a href="https://profiles.wordpress.org/fclaussen">Fernando Claussen</a>,&nbsp;<a href="https://profiles.wordpress.org/flipkeijzer">flipkeijzer</a>,&nbsp;<a href="https://profiles.wordpress.org/mista-flo">Florian TIAR</a>,&nbsp;<a href="https://profiles.wordpress.org/folio">folio</a>,&nbsp;<a href="https://profiles.wordpress.org/fpcsjames">FPCSJames</a>,&nbsp;<a href="https://profiles.wordpress.org/frank-klein">Frank Klein</a>,&nbsp;<a href="https://profiles.wordpress.org/from">frOM</a>,&nbsp;<a href="https://profiles.wordpress.org/fuchsws">fuchsws</a>,&nbsp;<a href="https://profiles.wordpress.org/fullyint">fullyint</a>,&nbsp;<a href="https://profiles.wordpress.org/gma992">Gabriel Maldonado</a>,&nbsp;<a href="https://profiles.wordpress.org/garetharnold">Gareth</a>,&nbsp;<a href="https://profiles.wordpress.org/garrett-eclipse">Garrett Hyder</a>,&nbsp;<a href="https://profiles.wordpress.org/garyj">Gary Jones</a>,&nbsp;<a href="https://profiles.wordpress.org/soulseekah">Gennady Kovshenin</a>,&nbsp;<a href="https://profiles.wordpress.org/kloon">Gerhard Potgieter</a>,&nbsp;<a href="https://profiles.wordpress.org/girishpanchal">Girish Panchal</a>,&nbsp;<a href="https://profiles.wordpress.org/gm_alex">GM_Alex</a>,&nbsp;<a href="https://profiles.wordpress.org/gnif">gnif</a>,&nbsp;<a href="https://profiles.wordpress.org/graymouser">graymouser</a>,&nbsp;<a href="https://profiles.wordpress.org/greg">greg</a>,&nbsp;<a href="https://profiles.wordpress.org/gziolo">Grzegorz (Greg) Ziółkowski</a>,&nbsp;<a href="https://profiles.wordpress.org/guido07111975">Guido</a>,&nbsp;<a href="https://profiles.wordpress.org/gutendev">GutenDev</a>,&nbsp;<a href="https://profiles.wordpress.org/hafiz">Hafiz Rahman</a>,&nbsp;<a href="https://profiles.wordpress.org/hailite">Hai@LiteSpeed</a>,&nbsp;<a href="https://profiles.wordpress.org/hansjovisyoast">Hans-Christiaan Braun</a>,&nbsp;<a href="https://profiles.wordpress.org/hardeepasrani">Hardeep Asrani</a>,&nbsp;<a href="https://profiles.wordpress.org/hardik-amipara">Hardik Amipara</a>,&nbsp;<a href="https://profiles.wordpress.org/harsh175">Harsh Patel</a>,&nbsp;<a href="https://profiles.wordpress.org/haruharuharuby">haruharuharuby</a>,&nbsp;<a href="https://profiles.wordpress.org/idea15">Heather Burns</a>,&nbsp;<a href="https://profiles.wordpress.org/helen">Helen Hou-Sandi</a>,&nbsp;<a href="https://profiles.wordpress.org/henrywright">Henry Wright</a>,&nbsp;<a href="https://profiles.wordpress.org/herregroen">Herre Groen</a>,&nbsp;<a href="https://profiles.wordpress.org/hitendra">hitendra</a>,&nbsp;<a href="https://profiles.wordpress.org/hitendra-chopda">Hitendra Chopda</a>,&nbsp;<a href="https://profiles.wordpress.org/ianbelanger">Ian Belanger</a>,&nbsp;<a href="https://profiles.wordpress.org/iandunn">Ian Dunn</a>,&nbsp;<a href="https://profiles.wordpress.org/ibantxillo">ibantxillo</a>,&nbsp;<a href="https://profiles.wordpress.org/igmoweb">Ignacio Cruz Moreno</a>,&nbsp;<a href="https://profiles.wordpress.org/igorsch">Igor</a>,&nbsp;<a href="https://profiles.wordpress.org/ibenic">Igor Benic</a>,&nbsp;<a href="https://profiles.wordpress.org/imath">imath</a>,&nbsp;<a href="https://profiles.wordpress.org/ionvv">ionvv</a>,&nbsp;<a href="https://profiles.wordpress.org/ireneyoast">Irene Strikkers</a>,&nbsp;<a href="https://profiles.wordpress.org/isabel104">isabel104</a>,&nbsp;<a href="https://profiles.wordpress.org/ishitaka">ishitaka</a>,&nbsp;<a href="https://profiles.wordpress.org/meatman89fs">Ivan Mudrik</a>,&nbsp;<a href="https://profiles.wordpress.org/jdgrimes">J.D. Grimes</a>,&nbsp;<a href="https://profiles.wordpress.org/jackreichert">Jack Reichert</a>,&nbsp;<a href="https://profiles.wordpress.org/jakept">Jacob Peattie</a>,&nbsp;<a href="https://profiles.wordpress.org/jnylen0">James Nylen</a>,&nbsp;<a href="https://profiles.wordpress.org/janak007">janak Kaneriya</a>,&nbsp;<a href="https://profiles.wordpress.org/janalwin">janalwin</a>,&nbsp;<a href="https://profiles.wordpress.org/jankimoradiya">Janki Moradiya</a>,&nbsp;<a href="https://profiles.wordpress.org/janthiel">janthiel</a>,&nbsp;<a href="https://profiles.wordpress.org/jaswrks">Jason Caldwell</a>,&nbsp;<a href="https://profiles.wordpress.org/javorszky">javorszky</a>,&nbsp;<a href="https://profiles.wordpress.org/jaydeep-rami">Jaydip Rami</a>,&nbsp;<a href="https://profiles.wordpress.org/jaymanpandya">Jayman Pandya</a>,&nbsp;<a href="https://profiles.wordpress.org/audrasjb">Jb Audras</a>,&nbsp;<a href="https://profiles.wordpress.org/jfarthing84">Jeff Farthing</a>,&nbsp;<a href="https://profiles.wordpress.org/cheffheid">Jeffrey de Wit</a>,&nbsp;<a href="https://profiles.wordpress.org/jeffpaul">Jeffrey Paul</a>,&nbsp;<a href="https://profiles.wordpress.org/jmdodd">Jennifer M. Dodd</a>,&nbsp;<a href="https://profiles.wordpress.org/miss_jwo">Jenny</a>,&nbsp;<a href="https://profiles.wordpress.org/jeremeylduvall">Jeremey</a>,&nbsp;<a href="https://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>,&nbsp;<a href="https://profiles.wordpress.org/jeherve">Jeremy Herve</a>,&nbsp;<a href="https://profiles.wordpress.org/jpry">Jeremy Pry</a>,&nbsp;<a href="https://profiles.wordpress.org/jeremyescott">Jeremy Scott</a>,&nbsp;<a href="https://profiles.wordpress.org/jesperher">Jesper V Nielsen</a>,&nbsp;<a href="https://profiles.wordpress.org/professor44">Jesse Friedman</a>,&nbsp;<a href="https://profiles.wordpress.org/jjcomack">Jimmy Comack</a>,&nbsp;<a href="https://profiles.wordpress.org/jipmoors">Jip Moors</a>,&nbsp;<a href="https://profiles.wordpress.org/jirihon">Jiri Hon</a>,&nbsp;<a href="https://profiles.wordpress.org/johnjamesjacoby">JJJ</a>,&nbsp;<a href="https://profiles.wordpress.org/joanrho">joanrho</a>,&nbsp;<a href="https://profiles.wordpress.org/jobthomas">Job</a>,&nbsp;<a href="https://profiles.wordpress.org/sephsekla">Joe Bailey-Roberts</a>,&nbsp;<a href="https://profiles.wordpress.org/joedolson">Joe Dolson</a>,&nbsp;<a href="https://profiles.wordpress.org/joehoyle">Joe Hoyle</a>,&nbsp;<a href="https://profiles.wordpress.org/joemcgill">Joe McGill</a>,&nbsp;<a href="https://profiles.wordpress.org/joelcj91">Joel James</a>,&nbsp;<a href="https://profiles.wordpress.org/joen">Joen Asmussen</a>,&nbsp;<a href="https://profiles.wordpress.org/johnbillion">John Blackbourn</a>,&nbsp;<a href="https://profiles.wordpress.org/johnny5">John Godley</a>,&nbsp;<a href="https://profiles.wordpress.org/johnalarcon">johnalarcon</a>,&nbsp;<a href="https://profiles.wordpress.org/johnpgreen">johnpgreen</a>,&nbsp;<a href="https://profiles.wordpress.org/johnschulz">johnschulz</a>,&nbsp;<a href="https://profiles.wordpress.org/jrchamp">Jonathan Champ</a>,&nbsp;<a href="https://profiles.wordpress.org/desrosj">Jonathan Desrosiers</a>,&nbsp;<a href="https://profiles.wordpress.org/joneiseman">joneiseman</a>,&nbsp;<a href="https://profiles.wordpress.org/spacedmonkey">Jonny Harris</a>,&nbsp;<a href="https://profiles.wordpress.org/joostdevalk">Joost de Valk</a>,&nbsp;<a href="https://profiles.wordpress.org/jorgefilipecosta">Jorge Costa</a>,&nbsp;<a href="https://profiles.wordpress.org/josephscott">Joseph Scott</a>,&nbsp;<a href="https://profiles.wordpress.org/joshuawold">JoshuaWold</a>,&nbsp;<a href="https://profiles.wordpress.org/joyously">Joy</a>,&nbsp;<a href="https://profiles.wordpress.org/jpurdy647">jpurdy647</a>,&nbsp;<a href="https://profiles.wordpress.org/jrdelarosa">jrdelarosa</a>,&nbsp;<a href="https://profiles.wordpress.org/jryancard">jryancard</a>,&nbsp;<a href="https://profiles.wordpress.org/juiiee8487">Juhi Patel</a>,&nbsp;<a href="https://profiles.wordpress.org/jamosova">Julia Amosova</a>,&nbsp;<a href="https://profiles.wordpress.org/juliemoynat">juliemoynat</a>,&nbsp;<a href="https://profiles.wordpress.org/jrf">Juliette Reinders Folmer</a>,&nbsp;<a href="https://profiles.wordpress.org/junaidkbr">Junaid Ahmed</a>,&nbsp;<a href="https://profiles.wordpress.org/justinsainton">Justin Sainton</a>,&nbsp;<a href="https://profiles.wordpress.org/jtsternberg">Justin Sternberg</a>,&nbsp;<a href="https://profiles.wordpress.org/greenshady">Justin Tadlock</a>,&nbsp;<a href="https://profiles.wordpress.org/kadamwhite">K.Adam White</a>,&nbsp;<a href="https://profiles.wordpress.org/kapteinbluf">kapteinbluf</a>,&nbsp;<a href="https://profiles.wordpress.org/keesiemeijer">keesiemeijer</a>,&nbsp;<a href="https://profiles.wordpress.org/ryelle">Kelly Dwan</a>,&nbsp;<a href="https://profiles.wordpress.org/kelvink">kelvink</a>,&nbsp;<a href="https://profiles.wordpress.org/khaihong">khaihong</a>,&nbsp;<a href="https://profiles.wordpress.org/kiranpotphode">Kiran Potphode</a>,&nbsp;<a href="https://profiles.wordpress.org/ixkaito">Kite</a>,&nbsp;<a href="https://profiles.wordpress.org/kjellr">kjellr</a>,&nbsp;<a href="https://profiles.wordpress.org/kkarpieszuk">kkarpieszuk</a>,&nbsp;<a href="https://profiles.wordpress.org/kmeze">kmeze</a>,&nbsp;<a href="https://profiles.wordpress.org/knutsp">Knut Sparhell</a>,&nbsp;<a href="https://profiles.wordpress.org/konainm">konainm</a>,&nbsp;<a href="https://profiles.wordpress.org/obenland">Konstantin Obenland</a>,&nbsp;<a href="https://profiles.wordpress.org/xkon">Konstantinos Xenos</a>,&nbsp;<a href="https://profiles.wordpress.org/kristastevens">kristastevens</a>,&nbsp;<a href="https://profiles.wordpress.org/krutidugade">krutidugade</a>,&nbsp;<a href="https://profiles.wordpress.org/laghee">laghee</a>,&nbsp;<a href="https://profiles.wordpress.org/lakenh">Laken Hafner</a>,&nbsp;<a href="https://profiles.wordpress.org/lancewillett">Lance Willett</a>,&nbsp;<a href="https://profiles.wordpress.org/laurelfulford">laurelfulford</a>,&nbsp;<a href="https://profiles.wordpress.org/lbenicio">lbenicio</a>,&nbsp;<a href="https://profiles.wordpress.org/leanderiversen">Leander Iversen</a>,&nbsp;<a href="https://profiles.wordpress.org/leemon">leemon</a>,&nbsp;<a href="https://profiles.wordpress.org/lenasterg">lenasterg</a>,&nbsp;<a href="https://profiles.wordpress.org/lisannekluitmans">lisannekluitmans</a>,&nbsp;<a href="https://profiles.wordpress.org/lizkarkoski">lizkarkoski</a>,&nbsp;<a href="https://profiles.wordpress.org/lucagrandicelli">Luca Grandicelli</a>,&nbsp;<a href="https://profiles.wordpress.org/lucasrolff">LucasRolff</a>,&nbsp;<a href="https://profiles.wordpress.org/luciano">luciano</a>,&nbsp;<a href="https://profiles.wordpress.org/luminus">Luminus</a>,&nbsp;<a href="https://profiles.wordpress.org/mariovalney">Mário Valney</a>,&nbsp;<a href="https://profiles.wordpress.org/maartenleenders">maartenleenders</a>,&nbsp;<a href="https://profiles.wordpress.org/macbookandrew">macbookandrew</a>,&nbsp;<a href="https://profiles.wordpress.org/travel_girl">Maja Benke</a>,&nbsp;<a href="https://profiles.wordpress.org/mako09">Mako</a>,&nbsp;<a href="https://profiles.wordpress.org/tomdxw">mallorydxw-old</a>,&nbsp;<a href="https://profiles.wordpress.org/manuelaugustin">Manuel Augustin</a>,&nbsp;<a href="https://profiles.wordpress.org/manuel_84">manuel_84</a>,&nbsp;<a href="https://profiles.wordpress.org/zottto">Marc Nilius</a>,&nbsp;<a href="https://profiles.wordpress.org/marcelo2605">marcelo2605</a>,&nbsp;<a href="https://profiles.wordpress.org/marcomartins">Marco Martins</a>,&nbsp;<a href="https://profiles.wordpress.org/marcomarsala">marco.marsala</a>,&nbsp;<a href="https://profiles.wordpress.org/mkaz">Marcus Kazmierczak</a>,&nbsp;<a href="https://profiles.wordpress.org/marcwieland95">marcwieland95</a>,&nbsp;<a href="https://profiles.wordpress.org/clorith">Marius L. J.</a>,&nbsp;<a href="https://profiles.wordpress.org/mariusvw">mariusvw</a>,&nbsp;<a href="https://profiles.wordpress.org/mbelchev">Mariyan Belchev</a>,&nbsp;<a href="https://profiles.wordpress.org/markjaquith">Mark Jaquith</a>,&nbsp;<a href="https://profiles.wordpress.org/iceable">Mathieu Sarrasin</a>,&nbsp;<a href="https://profiles.wordpress.org/mathieuhays">mathieuhays</a>,&nbsp;<a href="https://profiles.wordpress.org/webdevmattcrom">Matt Cromwell</a>,&nbsp;<a href="https://profiles.wordpress.org/mgibbs189">Matt Gibbs</a>,&nbsp;<a href="https://profiles.wordpress.org/sivel">Matt Martz</a>,&nbsp;<a href="https://profiles.wordpress.org/mboynes">Matthew Boynes</a>,&nbsp;<a href="https://profiles.wordpress.org/lonelyvegan">Matthew Riley MacPherson</a>,&nbsp;<a href="https://profiles.wordpress.org/mattyrob">mattyrob</a>,&nbsp;<a href="https://profiles.wordpress.org/mcmwebsol">mcmwebsol</a>,&nbsp;<a href="https://profiles.wordpress.org/melchoyce">Mel Choyce</a>,&nbsp;<a href="https://profiles.wordpress.org/mensmaximus">mensmaximus</a>,&nbsp;<a href="https://profiles.wordpress.org/mermel">mermel</a>,&nbsp;<a href="https://profiles.wordpress.org/metalandcoffee">metalandcoffee</a>,&nbsp;<a href="https://profiles.wordpress.org/wpscholar">Micah Wood</a>,&nbsp;<a href="https://profiles.wordpress.org/mnelson4">Michael Nelson</a>,&nbsp;<a href="https://profiles.wordpress.org/michielatyoast">Michiel Heijmans</a>,&nbsp;<a href="https://profiles.wordpress.org/sebastienthivinfocom">Migrated to @sebastienserre</a>,&nbsp;<a href="https://profiles.wordpress.org/mcsf">Miguel Fonseca</a>,&nbsp;<a href="https://profiles.wordpress.org/mmtr86">Miguel Torres</a>,&nbsp;<a href="https://profiles.wordpress.org/mihaiiceyro">mihaiiceyro</a>,&nbsp;<a href="https://profiles.wordpress.org/mihdan">mihdan</a>,&nbsp;<a href="https://profiles.wordpress.org/mikegillihan">Mike Gillihan</a>,&nbsp;<a href="https://profiles.wordpress.org/mikejolley">Mike Jolley</a>,&nbsp;<a href="https://profiles.wordpress.org/mikeschroder">Mike Schroder</a>,&nbsp;<a href="https://profiles.wordpress.org/dimadin">Milan Dinić</a>,&nbsp;<a href="https://profiles.wordpress.org/lanche86">Milan Ivanovic</a>,&nbsp;<a href="https://profiles.wordpress.org/milana_cap">Milana Cap</a>,&nbsp;<a href="https://profiles.wordpress.org/milindmore22">Milind More</a>,&nbsp;<a href="https://profiles.wordpress.org/mirkoschubert">mirkoschubert</a>,&nbsp;<a href="https://profiles.wordpress.org/monikarao">Monika Rao</a>,&nbsp;<a href="https://profiles.wordpress.org/boemedia">Monique Dubbelman</a>,&nbsp;<a href="https://profiles.wordpress.org/mt8biz">moto hachi ( mt8.biz )</a>,&nbsp;<a href="https://profiles.wordpress.org/mrmadhat">mrmadhat</a>,&nbsp;<a href="https://profiles.wordpress.org/xpertone">Muhammad Kashif</a>,&nbsp;<a href="https://profiles.wordpress.org/mukesh27">Mukesh Panchal</a>,&nbsp;<a href="https://profiles.wordpress.org/lorenzone92">MultiformeIngegno</a>,&nbsp;<a href="https://profiles.wordpress.org/mmaumio">Muntasir Mahmud</a>,&nbsp;<a href="https://profiles.wordpress.org/munyagu">munyagu</a>,&nbsp;<a href="https://profiles.wordpress.org/mythemeshop">MyThemeShop</a>,&nbsp;<a href="https://profiles.wordpress.org/mzorz">mzorz</a>,&nbsp;<a href="https://profiles.wordpress.org/nadim0988">nadim0988</a>,&nbsp;<a href="https://profiles.wordpress.org/nandorsky">nandorsky</a>,&nbsp;<a href="https://profiles.wordpress.org/naoki0h">Naoki Ohashi</a>,&nbsp;<a href="https://profiles.wordpress.org/nao">Naoko Takano</a>,&nbsp;<a href="https://profiles.wordpress.org/nataliashitova">nataliashitova</a>,&nbsp;<a href="https://profiles.wordpress.org/nateallen">Nate Allen</a>,&nbsp;<a href="https://profiles.wordpress.org/nathanatmoz">Nathan Johnson</a>,&nbsp;<a href="https://profiles.wordpress.org/ndavison">ndavison</a>,&nbsp;<a href="https://profiles.wordpress.org/greatislander">Ned Zimmerman</a>,&nbsp;<a href="https://profiles.wordpress.org/nextendweb">Nextendweb</a>,&nbsp;<a href="https://profiles.wordpress.org/ndiego">Nick Diego</a>,&nbsp;<a href="https://profiles.wordpress.org/celloexpressions">Nick Halsey</a>,&nbsp;<a href="https://profiles.wordpress.org/nickmomrik">Nick Momrik</a>,&nbsp;<a href="https://profiles.wordpress.org/nick_thegeek">Nick the Geek</a>,&nbsp;<a href="https://profiles.wordpress.org/nahuelmahe">Nicolas Figueira</a>,&nbsp;<a href="https://profiles.wordpress.org/nikeo">Nicolas GUILLAUME</a>,&nbsp;<a href="https://profiles.wordpress.org/nicollle">Nicolle Helgers</a>,&nbsp;<a href="https://profiles.wordpress.org/jainnidhi">Nidhi Jain</a>,&nbsp;<a href="https://profiles.wordpress.org/nielslange">Niels Lange</a>,&nbsp;<a href="https://profiles.wordpress.org/nikschavan">Nikhil Chavan</a>,&nbsp;<a href="https://profiles.wordpress.org/rabmalin">Nilambar Sharma</a>,&nbsp;<a href="https://profiles.wordpress.org/mrtortai">Noam Eppel</a>,&nbsp;<a href="https://profiles.wordpress.org/notnownikki">notnownikki</a>,&nbsp;<a href="https://profiles.wordpress.org/odysseygate">odyssey</a>,&nbsp;<a href="https://profiles.wordpress.org/omarreiss">Omar Reiss</a>,&nbsp;<a href="https://profiles.wordpress.org/codestor">Omkar Bhagat</a>,&nbsp;<a href="https://profiles.wordpress.org/on">on</a>,&nbsp;<a href="https://profiles.wordpress.org/others">others</a>,&nbsp;<a href="https://profiles.wordpress.org/ov3rfly">Ov3rfly</a>,&nbsp;<a href="https://profiles.wordpress.org/paaljoachim">Paal Joachim Romdahl</a>,&nbsp;<a href="https://profiles.wordpress.org/palmiak">palmiak</a>,&nbsp;<a href="https://profiles.wordpress.org/panchen">panchen</a>,&nbsp;<a href="https://profiles.wordpress.org/parbaugh">parbaugh</a>,&nbsp;<a href="https://profiles.wordpress.org/xparham">Parham Ghaffarian</a>,&nbsp;<a href="https://profiles.wordpress.org/swissspidy">Pascal Birchler</a>,&nbsp;<a href="https://profiles.wordpress.org/casiepa">Pascal Casier</a>,&nbsp;<a href="https://profiles.wordpress.org/pbearne">Paul Bearne</a>,&nbsp;<a href="https://profiles.wordpress.org/pbiron">Paul Biron</a>,&nbsp;<a href="https://profiles.wordpress.org/natacado">Paul Paradise</a>,&nbsp;<a href="https://profiles.wordpress.org/paulschreiber">Paul Schreiber</a>,&nbsp;<a href="https://profiles.wordpress.org/piewp">Perdaan</a>,&nbsp;<a href="https://profiles.wordpress.org/pputzer">Peter Putzer</a>,&nbsp;<a href="https://profiles.wordpress.org/peterwilsoncc">Peter Wilson</a>,&nbsp;<a href="https://profiles.wordpress.org/walbo">Petter Walbø Johnsgård</a>,&nbsp;<a href="https://profiles.wordpress.org/pskli">Pierre Saïkali</a>,&nbsp;<a href="https://profiles.wordpress.org/wizzard_">Pieter Daalder</a>,&nbsp;<a href="https://profiles.wordpress.org/piyush9100">Piyush Patel</a>,&nbsp;<a href="https://profiles.wordpress.org/poena">poena</a>,&nbsp;<a href="https://profiles.wordpress.org/promz">Pramod Jodhani</a>,&nbsp;<a href="https://profiles.wordpress.org/pmbaldha">Prashant Baldha</a>,&nbsp;<a href="https://profiles.wordpress.org/pratikkry">Pratik K. Yadav</a>,&nbsp;<a href="https://profiles.wordpress.org/pratikthink">Pratik K. Yadav</a>,&nbsp;<a href="https://profiles.wordpress.org/precies">precies</a>,&nbsp;<a href="https://profiles.wordpress.org/presskopp">Presskopp</a>,&nbsp;<a href="https://profiles.wordpress.org/presslabs">Presslabs</a>,&nbsp;<a href="https://profiles.wordpress.org/presstigers">PressTigers</a>,&nbsp;<a href="https://profiles.wordpress.org/programmin">programmin</a>,&nbsp;<a href="https://profiles.wordpress.org/punit5658">Punit Patel</a>,&nbsp;<a href="https://profiles.wordpress.org/purnendu">Purnendu Dash</a>,&nbsp;<a href="https://profiles.wordpress.org/qcmiao">qcmiao</a>,&nbsp;<a href="https://profiles.wordpress.org/rachelbaker">Rachel Baker</a>,&nbsp;<a href="https://profiles.wordpress.org/bamadesigner">Rachel Cherry</a>,&nbsp;<a href="https://profiles.wordpress.org/larrach">Rachel Peter</a>,&nbsp;<a href="https://profiles.wordpress.org/rafsuntaskin">Rafsun Chowdhury</a>,&nbsp;<a href="https://profiles.wordpress.org/rahulsprajapati">Rahul Prajapati</a>,&nbsp;<a href="https://profiles.wordpress.org/cthreelabs">Raja Mohammed</a>,&nbsp;<a href="https://profiles.wordpress.org/superpoincare">Ramanan</a>,&nbsp;<a href="https://profiles.wordpress.org/ramiy">Rami Yushuvaev</a>,&nbsp;<a href="https://profiles.wordpress.org/ramizmanked">Ramiz Manked</a>,&nbsp;<a href="https://profiles.wordpress.org/ramonopoly">ramonopoly</a>,&nbsp;<a href="https://profiles.wordpress.org/ravanh">RavanH</a>,&nbsp;<a href="https://profiles.wordpress.org/redcastor">redcastor</a>,&nbsp;<a href="https://profiles.wordpress.org/remyvv">remyvv</a>,&nbsp;<a href="https://profiles.wordpress.org/rensw90">rensw90</a>,&nbsp;<a href="https://profiles.wordpress.org/rhetorical">rhetorical</a>,&nbsp;<a href="https://profiles.wordpress.org/youknowriad">Riad Benguella</a>,&nbsp;<a href="https://profiles.wordpress.org/rianrietveld">Rian Rietveld</a>,&nbsp;<a href="https://profiles.wordpress.org/iamfriendly">Richard Tape</a>,&nbsp;<a href="https://profiles.wordpress.org/rickalee">Ricky Lee Whittemore</a>,&nbsp;<a href="https://profiles.wordpress.org/rinkuyadav999">Rinku Y</a>,&nbsp;<a href="https://profiles.wordpress.org/rishishah">Rishi Shah</a>,&nbsp;<a href="https://profiles.wordpress.org/robbie505">Robbie</a>,&nbsp;<a href="https://profiles.wordpress.org/robdxw">robdxw</a>,&nbsp;<a href="https://profiles.wordpress.org/noisysocks">Robert Anderson</a>,&nbsp;<a href="https://profiles.wordpress.org/littlerchicken">Robin Cornett</a>,&nbsp;<a href="https://profiles.wordpress.org/robinvandervliet">Robin van der Vliet</a>,&nbsp;<a href="https://profiles.wordpress.org/rmccue">Ryan McCue</a>,&nbsp;<a href="https://profiles.wordpress.org/othellobloke">Ryan Paul</a>,&nbsp;<a href="https://profiles.wordpress.org/welcher">Ryan Welcher</a>,&nbsp;<a href="https://profiles.wordpress.org/ryotsun">ryotsun</a>,&nbsp;<a href="https://profiles.wordpress.org/sebastienserre">Sébastien SERRE</a>,&nbsp;<a href="https://profiles.wordpress.org/stodorovic">Saša</a>,&nbsp;<a href="https://profiles.wordpress.org/sagarnasit">sagarnasit</a>,&nbsp;<a href="https://profiles.wordpress.org/sasiddiqui">Sami Ahmed Siddiqui</a>,&nbsp;<a href="https://profiles.wordpress.org/samikeijonen">Sami Keijonen</a>,&nbsp;<a href="https://profiles.wordpress.org/otto42">Samuel Wood (Otto)</a>,&nbsp;<a href="https://profiles.wordpress.org/tinkerbelly">sarah semark</a>,&nbsp;<a href="https://profiles.wordpress.org/sayedwp">Sayed Taqui</a>,&nbsp;<a href="https://profiles.wordpress.org/scottlee">Scott Lee</a>,&nbsp;<a href="https://profiles.wordpress.org/coffee2code">Scott Reilly</a>,&nbsp;<a href="https://profiles.wordpress.org/seanchayes">Sean Hayes</a>,&nbsp;<a href="https://profiles.wordpress.org/sebakurzyn">Sebastian Kurzynoswki</a>,&nbsp;<a href="https://profiles.wordpress.org/sebastianpisula">Sebastian Pisula</a>,&nbsp;<a href="https://profiles.wordpress.org/sergeybiryukov">Sergey Biryukov</a>,&nbsp;<a href="https://profiles.wordpress.org/shamim51">Shamim Hasan</a>,&nbsp;<a href="https://profiles.wordpress.org/shaneeckert">Shane Eckert</a>,&nbsp;<a href="https://profiles.wordpress.org/sharaz">Sharaz Shahid</a>,&nbsp;<a href="https://profiles.wordpress.org/shashwatmittal">Shashwat Mittal</a>,&nbsp;<a href="https://profiles.wordpress.org/shooper">Shawn Hooper</a>,&nbsp;<a href="https://profiles.wordpress.org/sherwood">sherwood</a>,&nbsp;<a href="https://profiles.wordpress.org/shital-patel">Shital Marakana</a>,&nbsp;<a href="https://profiles.wordpress.org/shivapoudel">Shiva Poudel</a>,&nbsp;<a href="https://profiles.wordpress.org/pross">Simon Prosser</a>,&nbsp;<a href="https://profiles.wordpress.org/sjardo">sjardo</a>,&nbsp;<a href="https://profiles.wordpress.org/skoldin">skoldin</a>,&nbsp;<a href="https://profiles.wordpress.org/slilley">slilley</a>,&nbsp;<a href="https://profiles.wordpress.org/slushman">slushman</a>,&nbsp;<a href="https://profiles.wordpress.org/sonjaleix">Sonja Leix</a>,&nbsp;<a href="https://profiles.wordpress.org/sonjanyc">sonjanyc</a>,&nbsp;<a href="https://profiles.wordpress.org/soean">Soren Wrede</a>,&nbsp;<a href="https://profiles.wordpress.org/spartank">spartank</a>,&nbsp;<a href="https://profiles.wordpress.org/spyderbytes">spyderbytes</a>,&nbsp;<a href="https://profiles.wordpress.org/sstoqnov">Stanimir Stoyanov</a>,&nbsp;<a href="https://profiles.wordpress.org/metodiew">Stanko Metodiev</a>,&nbsp;<a href="https://profiles.wordpress.org/stazdotio">stazdotio</a>,&nbsp;<a href="https://profiles.wordpress.org/netweb">Stephen Edgar</a>,&nbsp;<a href="https://profiles.wordpress.org/stephenharris">Stephen Harris</a>,&nbsp;<a href="https://profiles.wordpress.org/stevenlinx">stevenlinx</a>,&nbsp;<a href="https://profiles.wordpress.org/stormrockwell">Storm Rockwell</a>,&nbsp;<a href="https://profiles.wordpress.org/skostadinov">Stoyan Kostadinov</a>,&nbsp;<a href="https://profiles.wordpress.org/strategio">strategio</a>,&nbsp;<a href="https://profiles.wordpress.org/subrataemfluence">Subrata Sarkar</a>,&nbsp;<a href="https://profiles.wordpress.org/manikmist09">Sultan Nasir Uddin</a>,&nbsp;<a href="https://profiles.wordpress.org/swift">swift</a>,&nbsp;<a href="https://profiles.wordpress.org/takahashi_fumiki">Takahashi Fumiki</a>,&nbsp;<a href="https://profiles.wordpress.org/miyauchi">Takayuki Miyauchi</a>,&nbsp;<a href="https://profiles.wordpress.org/karmatosed">Tammie Lister</a>,&nbsp;<a href="https://profiles.wordpress.org/tlovett1">Taylor Lovett</a>,&nbsp;<a href="https://profiles.wordpress.org/teddytime">teddytime</a>,&nbsp;<a href="https://profiles.wordpress.org/terriann">Terri Ann</a>,&nbsp;<a href="https://profiles.wordpress.org/terwdan">terwdan</a>,&nbsp;<a href="https://profiles.wordpress.org/tharsheblows">tharsheblows</a>,&nbsp;<a href="https://profiles.wordpress.org/the">the</a>,&nbsp;<a href="https://profiles.wordpress.org/themezee">ThemeZee</a>,&nbsp;<a href="https://profiles.wordpress.org/thomasplevy">Thomas Patrick Levy</a>,&nbsp;<a href="https://profiles.wordpress.org/thomas-vitale">Thomas Vitale</a>,&nbsp;<a href="https://profiles.wordpress.org/thomaswm">thomaswm</a>,&nbsp;<a href="https://profiles.wordpress.org/tfrommen">Thorsten Frommen</a>,&nbsp;<a href="https://profiles.wordpress.org/thrijith">Thrijith Thankachan</a>,&nbsp;<a href="https://profiles.wordpress.org/tiagohillebrandt">Tiago Hillebrandt</a>,&nbsp;<a href="https://profiles.wordpress.org/tigertech">tigertech</a>,&nbsp;<a href="https://profiles.wordpress.org/timhavinga">Tim Havinga</a>,&nbsp;<a href="https://profiles.wordpress.org/hedgefield">Tim Hengeveld</a>,&nbsp;<a href="https://profiles.wordpress.org/timmydcrawford">Timmy Crawford</a>,&nbsp;<a href="https://profiles.wordpress.org/timothyblynjacobs">Timothy Jacobs</a>,&nbsp;<a href="https://profiles.wordpress.org/titodevera">titodevera</a>,&nbsp;<a href="https://profiles.wordpress.org/tkama">Tkama</a>,&nbsp;<a href="https://profiles.wordpress.org/to">to</a>,&nbsp;<a href="https://profiles.wordpress.org/tz-media">Tobias Zimpel</a>,&nbsp;<a href="https://profiles.wordpress.org/tjnowell">Tom J Nowell</a>,&nbsp;<a href="https://profiles.wordpress.org/tomharrigan">TomHarrigan</a>,&nbsp;<a href="https://profiles.wordpress.org/tferry">Tommy</a>,&nbsp;<a href="https://profiles.wordpress.org/tonybogdanov">tonybogdanov</a>,&nbsp;<a href="https://profiles.wordpress.org/tobifjellner">Tor-Bjorn Fjellner</a>,&nbsp;<a href="https://profiles.wordpress.org/torontodigits">TorontoDigits</a>,&nbsp;<a href="https://profiles.wordpress.org/mirucon">Toshihiro Kanai</a>,&nbsp;<a href="https://profiles.wordpress.org/itowhid06">Towhidul Islam</a>,&nbsp;<a href="https://profiles.wordpress.org/transl8or">transl8or</a>,&nbsp;<a href="https://profiles.wordpress.org/grapplerulrich">Ulrich</a>,&nbsp;<a href="https://profiles.wordpress.org/upadalavipul">upadalavipul</a>,&nbsp;<a href="https://profiles.wordpress.org/usmankhalid">Usman Khalid</a>,&nbsp;<a href="https://profiles.wordpress.org/utsav72640">Utsav tilava</a>,&nbsp;<a href="https://profiles.wordpress.org/uttam007">uttam007</a>,&nbsp;<a href="https://profiles.wordpress.org/vaishalipanchal">Vaishali Panchal</a>,&nbsp;<a href="https://profiles.wordpress.org/valer1e">Valérie Galassi</a>,&nbsp;<a href="https://profiles.wordpress.org/valchovski">valchovski</a>,&nbsp;<a href="https://profiles.wordpress.org/vishaldodiya">vishaldodiya</a>,&nbsp;<a href="https://profiles.wordpress.org/vnsavage">vnsavage</a>,&nbsp;<a href="https://profiles.wordpress.org/voneff">voneff</a>,&nbsp;<a href="https://profiles.wordpress.org/warmlaundry">warmlaundry</a>,&nbsp;<a href="https://profiles.wordpress.org/wbrubaker">wbrubaker</a>,&nbsp;<a href="https://profiles.wordpress.org/westonruter">Weston Ruter</a>,&nbsp;<a href="https://profiles.wordpress.org/who">who</a>,&nbsp;<a href="https://profiles.wordpress.org/kwonye">Will Kwon</a>,&nbsp;<a href="https://profiles.wordpress.org/earnjam">William Earnhardt</a>,&nbsp;<a href="https://profiles.wordpress.org/williampatton">williampatton</a>,&nbsp;<a href="https://profiles.wordpress.org/wpcs">wpcs</a>,&nbsp;<a href="https://profiles.wordpress.org/wpzinc">wpzinc</a>,&nbsp;<a href="https://profiles.wordpress.org/xhezairi">xhezairi</a>,&nbsp;<a href="https://profiles.wordpress.org/yahil">Yahil Madakiya</a>,&nbsp;<a href="https://profiles.wordpress.org/yoavf">Yoav Farhi</a>,&nbsp;<a href="https://profiles.wordpress.org/fierevere">Yui</a>,&nbsp;<a href="https://profiles.wordpress.org/yuriv">YuriV</a>,&nbsp;<a href="https://profiles.wordpress.org/zanematthew">Zane Matthew</a>, <a href="https://profiles.wordpress.org/zebulan">zebulan</a>.</p>



<p>最後に、WordPress 5.1 に協力してくれたコミュニティ翻訳者の皆さん、ありがとうございました。彼らや彼女らのおかげで、WordPress 5.1 はリリース時に34言語への翻訳が完了していました。今後、言語数はもっと増えるでしょう。</p>



<p>最新情報を追ったり、貢献したい方は <a href="https://make.wordpress.org/">Make WordPress</a> や<a href="https://make.wordpress.org/core/">コア開発ブログ</a>をチェックしてみてください。</p>



<p>WordPress を選んでいただき、ありがとうございます !</p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:51:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:6:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"WordPress 5.1 リリース候補2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://ja.wordpress.org/2019/02/19/wordpress-5-1-rc2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2019 05:21:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ja.wordpress.org/?p=5539";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:201:"WordPress 5.1 の2つ目のリリース候補版がご利用いただけるようになりました。テスト、翻訳、プラグインとテーマの対応のご協力をぜひお願いします。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Naoko Takano";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:3927:"
<p>以下は、<a href="https://profiles.wordpress.org/pento">Gary Pendergast</a>&nbsp;が書いた WordPress.org 公式ブログの記事、<a href="https://wordpress.org/news/2019/02/wordpress-5-1-rc2/">「WordPress 5.1 RC2」</a>を訳したものです。</p>



<p>誤字脱字誤訳などありましたら<a href="https://ja.wordpress.org/support/forum/alphabeta/">フォーラムまでお知らせください</a>。</p>



<hr class="wp-block-separator" />



<p>WordPress 5.1 の2つ目のリリース候補版がご利用いただけるようになりました。</p>



<p>WordPress 5.1は<a href="https://make.wordpress.org/core/5-1/">2月21日 (木)</a> にリリース予定ですが、そのためには皆さんの手助けが必要です。まだバージョン5.1 を試していないなら、今がその時です。</p>



<p>WordPress 5.1リリース候補版をテストする方法は2つあります。<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> プラグインを使うか (「最新版ナイトリービルド」を選択)、<a href="https://wordpress.org/wordpress-5.1-RC2.zip">ここから RC 版 (zip) をダウンロード</a>してください。</p>



<p>WordPress 5.1 での変更について詳しくは、<a href="https://ja.wordpress.org/2019/02/08/wordpress-5-1-release-candidate/">最初のリリース候補版の投稿</a>をご覧ください。</p>



<p>このリリースには、最終的な「WordPress について」のページデザインが含まれます。また、以下の修正も含みます。</p>



<ul><li>新規 WordPress インストールがデータベース接頭辞を正しく設定しない問題 (<a href="https://core.trac.wordpress.org/ticket/46220">#46220</a>)。</li><li>ブラウザーの開発者ツールを開く際に発生する HTTP エラー (<a href="https://core.trac.wordpress.org/ticket/46218">#46218</a>)。</li><li>レガシーなメディアダイアログにおけるページ送りリンクの誤ったスタイル (<a href="https://core.trac.wordpress.org/ticket/41858">#41858</a>)。</li><li>Ajax を通して読み込まれたコメントで「返信」をクリックした際にコメントフォームが読み込まれない問題 (<a href="https://core.trac.wordpress.org/ticket/46260">#46260</a>)。</li></ul>



<h2>プラグイン・テーマ開発者の方へ</h2>



<p>WordPress 5.1 でプラグインとテーマをテストし、readme ファイルの「検証済み最新バージョン」を 5.1 に更新してください。互換性の問題を発見した場合は、最終リリース前に解決できるように<a href="https://wordpress.org/support/forum/alphabeta/">サポートフォーラム (英語版)</a>&nbsp;に投稿してください。</p>



<p>大きな変更の詳細に触れた、開発者向けの5.1フィールドガイドも公開しています。</p>



<h2>協力するには</h2>



<p>英語以外の言語を話す方は、<a href="https://translate.wordpress.org/projects/wp/dev">WordPress を100言語以上に翻訳するのにご協力</a>ください。</p>



<p><strong>バグを見つけたと思った場合</strong>は、サポートフォーラムの<a href="https://wordpress.org/support/forum/alphabeta">アルファ・ベータエリア</a><a href="https://ja.wordpress.org/support/forum/alphabeta/">&nbsp;(日本語)</a>&nbsp;に投稿できます。情報をお待ちしています。もし再現可能なバグ報告を書ける場合は&nbsp;<a href="https://make.wordpress.org/core/reports/">WordPress Trac に報告</a>してください。<a href="https://core.trac.wordpress.org/tickets/major">既知のバグ一覧はこちら</a>で見ることができます。</p>



<hr class="wp-block-separator" />



<p><em>WordPress Five Point One:<br>It’s so slick, shiny, and new.<br>Lands in a few days!</em></p>
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:30:"https://ja.wordpress.org/feed/";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:44:"http://purl.org/rss/1.0/modules/syndication/";a:2:{s:12:"updatePeriod";a:1:{i:0;a:5:{s:4:"data";s:9:"
hourly	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:15:"updateFrequency";a:1:{i:0;a:5:{s:4:"data";s:4:"
1	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"' . "\0" . '*' . "\0" . 'data";a:8:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Sun, 02 Jun 2019 01:24:43 GMT";s:12:"content-type";s:34:"application/rss+xml; charset=UTF-8";s:6:"x-olaf";s:3:"⛄";s:13:"last-modified";s:29:"Wed, 22 May 2019 07:22:06 GMT";s:4:"link";s:61:"<https://ja.wordpress.org/wp-json/>; rel="https://api.w.org/"";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:9:"HIT ord 2";}}s:5:"build";s:14:"20130911040210";}',
                'autoload' => 'no',
            ],
            121 => [
                'option_id' => 126,
                'option_name' => '_transient_timeout_feed_mod_ab995de7a5278071ed721c721c891aed',
                'option_value' => '1559481884',
                'autoload' => 'no',
            ],
            122 => [
                'option_id' => 127,
                'option_name' => '_transient_feed_mod_ab995de7a5278071ed721c721c891aed',
                'option_value' => '1559438684',
                'autoload' => 'no',
            ],
            123 => [
                'option_id' => 128,
                'option_name' => '_transient_timeout_feed_6f409681938158427d2ded6eb1b9ea27',
                'option_value' => '1559481885',
                'autoload' => 'no',
            ],
            124 => [
                'option_id' => 129,
                'option_name' => '_transient_feed_6f409681938158427d2ded6eb1b9ea27',
                'option_value' => 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:5:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:141:"










































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:55:"WordPress | サポートフォーラム » 返信一覧";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:44:"https://ja.wordpress.org/support/forums/feed";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 02 Jun 2019 10:24:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:37:"https://bbpress.org/?v=2.6-alpha-6091";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"ja";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236760";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:53:"返信先: サイトにアクセスできません。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236760";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 23:06:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:213:"

<p>こんにちは</p>
<p>アクセスできない時にはどのような画面になっているんでしょうか？<br />
また、可能であれば URL を教えて下さい。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"munyagu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:183:"https://ja.wordpress.org/support/topic/5-2-1%e3%81%b8%e3%81%ae%e3%82%a2%e3%83%83%e3%83%97%e3%83%87%e3%83%bc%e3%83%88%e3%81%8c%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93/#post-236759";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:47:"5.2.1へのアップデートができません";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:183:"https://ja.wordpress.org/support/topic/5-2-1%e3%81%b8%e3%81%ae%e3%82%a2%e3%83%83%e3%83%97%e3%83%87%e3%83%bc%e3%83%88%e3%81%8c%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93/#post-236759";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 19:54:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1011:"

<p>さくらのレンタルサーバでwordpressを利用しています。<br />
5.2.1へのアップデートの案内が出ていたのでクリックしたのですがアップデートができない状況です。<br />
（重要: 更新の前にデータベースとファイルをバックアップしてください。更新についてヘルプが必要な際は WordPress のアップグレード Codex ページをご覧ください。とアナウンスが出ています）<br />
データベースのバックアップ、ファイルのバックアップは必要なものを取得済みです。<br />
これまでは問題なくアップデートできていたので、どこに問題があるのかが分かりません。</p>
<p>現在のバージョンは4.9.10です。<br />
環境はWindows10です。</p>
<p>どなたかお分かりになれば問題点を教えていただけないでしょうか。<br />
どうぞよろしくお願いいたします。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"beginner1828";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e8%a8%98%e4%ba%8b%e3%83%9a%e3%83%bc%e3%82%b8%e3%81%ae%e3%82%ae%e3%83%a3%e3%83%a9%e3%83%aa%e3%83%bc%e3%81%ae%e3%82%ab%e3%83%a9%e3%83%a0%e3%81%ae%e8%a1%a8%e7%a4%ba%e3%81%8c%e3%81%8a%e3%81%8b%e3%81%97/#post-236758";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:69:"記事ページのギャラリーのカラムの表示がおかしい";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e8%a8%98%e4%ba%8b%e3%83%9a%e3%83%bc%e3%82%b8%e3%81%ae%e3%82%ae%e3%83%a3%e3%83%a9%e3%83%aa%e3%83%bc%e3%81%ae%e3%82%ab%e3%83%a9%e3%83%a0%e3%81%ae%e8%a1%a8%e7%a4%ba%e3%81%8c%e3%81%8a%e3%81%8b%e3%81%97/#post-236758";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 16:54:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1009:"

<p>はじめまして。お世話になります。</p>
<p>今回ですが、私が運営しているサイトにおいて、ギャラリーの表示がおかしいとことを相談させていただきます。</p>
<p>問題のページはこちらです。</p>
<p><a href="https://ichigo-an.com/archives/40884" rel="nofollow">https://ichigo-an.com/archives/40884</a></p>
<p>記事では、サザエさんの画像が4枚ありますが、記事投稿画面では2カラムで2列表示としていますが、表示される記事は3カラムになってしまっています。</p>
<p>同じテーマとプラグインを使っている以下のサイトは正しく表示されるのですが、自己解決できません。</p>
<p><a href="https://hamburger24.net" rel="nofollow">https://hamburger24.net</a></p>
<p>※WordPress最新版、さくらのVPS・KUSANAAGIで両サイトとも運営しています。</p>
<p>それではよろしくお願いいたします。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takanashi Shizuo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236757";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:53:"返信先: サイトにアクセスできません。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236757";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 14:23:50 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:109:"

<p>アクセス可能なときって、新しい投稿をしていますか。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:2:"CG";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236755";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"サイトにアクセスできません。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:178:"https://ja.wordpress.org/support/topic/%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%82%a2%e3%82%af%e3%82%bb%e3%82%b9%e3%81%a7%e3%81%8d%e3%81%be%e3%81%9b%e3%82%93%e3%80%82/#post-236755";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 13:43:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:713:"

<p>サイトにアクセスできなくなってしまいました。<br />
しかし、1日の中でもアクセス可能な時と「このページを表示できません」とエラーが出てアクセス不可能な時があります。<br />
考えられる問題はどのようなことでしょうか？</p>


<ul id="bbp-topic-revision-log-236755" class="bbp-topic-revision-log">

<li id="bbp-topic-revision-log-236755-item-236756" class="bbp-topic-revision-log-item">
このトピックは<a href="https://ja.wordpress.org/support/users/izumi0c0/" title="izumi0c0 のプロフィールを表示">izumi0c0</a>が11 時間、 39 分前に変更しました。
</li>

</ul>


";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"izumi0c0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236754";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:77:"返信先: ただいま設定作業中の解除方法が知りたいです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236754";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 13:21:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:419:"

<p>再現しないようなら、キャッシュですね。URLが変更されるわけですから、httpで保存されているものは、httpsに転送されるひつようが出てきますから。途中からHttpsに変わることは、最初からhttpsと比べると、面倒が残ります。新規アクセスできるパソコンから確認するようにしましょう。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:2:"CG";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:77:"返信先: ただいま設定作業中の解除方法が知りたいです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 12:20:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:217:"

<p>今確認してみると設定作業中というものは表示されなくなっていました。</p>
<p>お手数おかけしました。<br />
ありがとうございました。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:6:"ayako8";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236752";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:77:"返信先: ただいま設定作業中の解除方法が知りたいです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236752";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 11:05:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:805:"

<p>「『設定作業中です』の表記が一瞬出ます。」というのが、わからないのですが、「サイトはこどもたちの写真などがあるので、できれば避けたい」としながらも、インターネットに公開しているんですよね。わたしはそういう類は、パソコンに残すこともしませんが。<br />
リンクを貼るのは、支障があるというのでも、支障がある部分はぼかしても伝わるでしょう。<br />
「一瞬出ます」というのは、安全かどうかのチェックをしているというメッセージではないでしょうか。<br />
https化はしてても、鍵マークになってますか。<br />
ついでながら、様は不要に願います。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:2:"CG";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236751";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:77:"返信先: ただいま設定作業中の解除方法が知りたいです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236751";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 10:40:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:822:"

<p>CG様</p>
<p>返信ありがとうございます。</p>
<p>サーバーはXサーバーを使っています。</p>
<p>Yahoo!などでサイトのURL(〇〇.com)検索すると『設定作業中です』の表記が一瞬出ます。<br />
一瞬表示されたあとは問題なくサイトは表示されます。</p>
<p>サイト名(〇〇サッカー)と検索しサイトを開くと『設定作業中』の表記は出ません。</p>
<p>https化の作業は1時間ほど前に完了しています。<br />
エックスサーバーの独自SSL化の設定は1ヶ月以上前に終えています。</p>
<p>サイトはこどもたちの写真などがあるので、できれば避けたいです・・・。</p>
<p>そのままにしておくしかないのでしょうか(*_*？</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:6:"ayako8";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:55:"










";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236750";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:77:"返信先: ただいま設定作業中の解除方法が知りたいです。";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:250:"https://ja.wordpress.org/support/topic/%e3%81%9f%e3%81%a0%e3%81%84%e3%81%be%e8%a8%ad%e5%ae%9a%e4%bd%9c%e6%a5%ad%e4%b8%ad%e3%81%ae%e8%a7%a3%e9%99%a4%e6%96%b9%e6%b3%95%e3%81%8c%e7%9f%a5%e3%82%8a%e3%81%9f%e3%81%84%e3%81%a7%e3%81%99%e3%80%82/#post-236750";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 01 Jun 2019 10:27:50 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1083:"

<p>その「設定作業中です」と出る画面を、示してもらうと伝わりやすいです。<br />
サイトURLで表示されるのか、レンタルサーバーの設定画面でしょうか。ロリポップをご利用なのかしら。<br />
ロリポップでは、『独自SSL（無料）を設定する』という青いボタンをクリックして、設定申請後、『SSL設定作業中』に変わりますので、そのまま５分間放置で待つようにということです。<br />
WordPressの更新中や、プラグインのインストール中、投稿更新中にアクセスがあると、「メンテナンス中です」のメッセージはでますが、それを表示できなくするのは不可避ではないでしょうか。<br />
https化する作業が完了してしまえば、出ることはないと思います。が、ロリポップは使用したこと無いし、わたしはhttps化作業をしたことがないので、どういう状況がありえるのか、わかりません。</p>

";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:2:"CG";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:44:"https://ja.wordpress.org/support/forums/feed";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"' . "\0" . '*' . "\0" . 'data";a:7:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Sun, 02 Jun 2019 01:24:45 GMT";s:12:"content-type";s:34:"application/rss+xml; charset=UTF-8";s:6:"x-olaf";s:3:"⛄";s:12:"x-robots-tag";s:15:"noindex, follow";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:9:"HIT ord 2";}}s:5:"build";s:14:"20130911040210";}',
                    'autoload' => 'no',
                ],
                125 => [
                    'option_id' => 130,
                    'option_name' => '_transient_timeout_feed_mod_6f409681938158427d2ded6eb1b9ea27',
                    'option_value' => '1559481885',
                    'autoload' => 'no',
                ],
                126 => [
                    'option_id' => 131,
                    'option_name' => '_transient_feed_mod_6f409681938158427d2ded6eb1b9ea27',
                    'option_value' => '1559438685',
                    'autoload' => 'no',
                ],
                127 => [
                    'option_id' => 132,
                    'option_name' => '_transient_timeout_dash_v2_45827e8e892dd0b85803a110fad8690f',
                    'option_value' => '1559481885',
                    'autoload' => 'no',
                ],
                128 => [
                    'option_id' => 133,
                    'option_name' => '_transient_dash_v2_45827e8e892dd0b85803a110fad8690f',
                    'option_value' => '<div class="rss-widget"><ul><li><a class=\'rsswidget\' href=\'https://ja.wordpress.org/2019/05/22/wordpress-5-2-1-maintenance-release/\'>WordPress 5.2.1 メンテナンスリリース</a></li></ul></div><div class="rss-widget"><ul><li><a class=\'rsswidget\' href=\'https://ja.wordpress.org/support/topic/%E3%82%B5%E3%82%A4%E3%83%88%E3%81%AB%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%81%A7%E3%81%8D%E3%81%BE%E3%81%9B%E3%82%93%E3%80%82/#post-236760\'>返信先: サイトにアクセスできません。</a></li><li><a class=\'rsswidget\' href=\'https://ja.wordpress.org/support/topic/5-2-1%E3%81%B8%E3%81%AE%E3%82%A2%E3%83%83%E3%83%97%E3%83%87%E3%83%BC%E3%83%88%E3%81%8C%E3%81%A7%E3%81%8D%E3%81%BE%E3%81%9B%E3%82%93/#post-236759\'>5.2.1へのアップデートができません</a></li><li><a class=\'rsswidget\' href=\'https://ja.wordpress.org/support/topic/%E8%A8%98%E4%BA%8B%E3%83%9A%E3%83%BC%E3%82%B8%E3%81%AE%E3%82%AE%E3%83%A3%E3%83%A9%E3%83%AA%E3%83%BC%E3%81%AE%E3%82%AB%E3%83%A9%E3%83%A0%E3%81%AE%E8%A1%A8%E7%A4%BA%E3%81%8C%E3%81%8A%E3%81%8B%E3%81%97/#post-236758\'>記事ページのギャラリーのカラムの表示がおかしい</a></li></ul></div>',
                    'autoload' => 'no',
                ],
                129 => [
                    'option_id' => 137,
                    'option_name' => 'db_upgraded',
                    'option_value' => '',
                    'autoload' => 'yes',
                ],
                130 => [
                    'option_id' => 138,
                    'option_name' => '_site_transient_update_core',
                    'option_value' => 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:62:"https://downloads.wordpress.org/release/ja/wordpress-5.2.1.zip";s:6:"locale";s:2:"ja";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:62:"https://downloads.wordpress.org/release/ja/wordpress-5.2.1.zip";s:10:"no_content";b:0;s:11:"new_bundled";b:0;s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"5.2.1";s:7:"version";s:5:"5.2.1";s:11:"php_version";s:6:"5.6.20";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"5.0";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1559438781;s:15:"version_checked";s:5:"5.2.1";s:12:"translations";a:0:{}}',
                    'autoload' => 'no',
                ],
                131 => [
                    'option_id' => 141,
                    'option_name' => 'can_compress_scripts',
                    'option_value' => '0',
                    'autoload' => 'no',
                ],
                132 => [
                    'option_id' => 142,
                    'option_name' => '_site_transient_timeout_php_check_f3408a2041a3252345cbba83e180fe85',
                    'option_value' => '1560043537',
                    'autoload' => 'no',
                ],
                133 => [
                    'option_id' => 143,
                    'option_name' => '_site_transient_php_check_f3408a2041a3252345cbba83e180fe85',
                    'option_value' => 'a:5:{s:19:"recommended_version";s:3:"7.3";s:15:"minimum_version";s:6:"5.6.20";s:12:"is_supported";b:1;s:9:"is_secure";b:1;s:13:"is_acceptable";b:1;}',
                    'autoload' => 'no',
                ],
                134 => [
                    'option_id' => 144,
                    'option_name' => '_transient_health-check-site-status-result',
                    'option_value' => '{"good":"7","recommended":"7","critical":"2"}',
                    'autoload' => 'yes',
                ],
                135 => [
                    'option_id' => 145,
                    'option_name' => '_transient_timeout_plugin_slugs',
                    'option_value' => '1559525178',
                    'autoload' => 'no',
                ],
                136 => [
                    'option_id' => 146,
                    'option_name' => '_transient_plugin_slugs',
                    'option_value' => 'a:2:{i:0;s:19:"akismet/akismet.php";i:1;s:9:"hello.php";}',
                    'autoload' => 'no',
                ],
                137 => [
                    'option_id' => 147,
                    'option_name' => 'recently_activated',
                    'option_value' => 'a:0:{}',
                    'autoload' => 'yes',
                ],
                138 => [
                    'option_id' => 148,
                    'option_name' => '_site_transient_update_plugins',
                    'option_value' => 'O:8:"stdClass":5:{s:12:"last_checked";i:1559438808;s:7:"checked";a:2:{s:19:"akismet/akismet.php";s:5:"4.1.2";s:21:"hello-dolly/hello.php";s:5:"1.7.2";}s:8:"response";a:0:{}s:12:"translations";a:0:{}s:9:"no_update";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":9:{s:2:"id";s:21:"w.org/plugins/akismet";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:5:"4.1.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/akismet.4.1.2.zip";s:5:"icons";a:2:{s:2:"2x";s:59:"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272";s:2:"1x";s:59:"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272";}s:7:"banners";a:1:{s:2:"1x";s:61:"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904";}s:11:"banners_rtl";a:0:{}}s:21:"hello-dolly/hello.php";O:8:"stdClass":9:{s:2:"id";s:25:"w.org/plugins/hello-dolly";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:21:"hello-dolly/hello.php";s:11:"new_version";s:5:"1.7.2";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:60:"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip";s:5:"icons";a:2:{s:2:"2x";s:64:"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855";s:2:"1x";s:64:"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855";}s:7:"banners";a:1:{s:2:"1x";s:66:"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855";}s:11:"banners_rtl";a:0:{}}}}',
                    'autoload' => 'no',
                ],
                139 => [
                    'option_id' => 149,
                    'option_name' => '_site_transient_update_themes',
                    'option_value' => 'O:8:"stdClass":4:{s:12:"last_checked";i:1559438805;s:7:"checked";a:3:{s:14:"twentynineteen";s:3:"1.4";s:15:"twentyseventeen";s:3:"2.2";s:13:"twentysixteen";s:3:"2.0";}s:8:"response";a:0:{}s:12:"translations";a:0:{}}',
                    'autoload' => 'no',
                ],
            ]);
    }
}
