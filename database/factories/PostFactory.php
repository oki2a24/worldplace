<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Wp\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_type_post');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'page',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_type_page');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'attachment',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_type_attachment');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'revision',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_type_revision');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'nav_menu_item',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_type_nav_menu_item');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'future',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_future');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'draft',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_draft');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'pending',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_pending');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'private',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_private');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'trash',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_trash');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'auto-draft',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_auto-draft');

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => 'inherit',
        'comment_status' => 'open',
        'ping_status' => 'open',
        'post_password' => '',
        'post_name' => $faker->text(100),
        'to_ping' => '',
        'pinged' => '',
        'post_modified' => $faker->dateTime,
        'post_modified_gmt' => $faker->dateTime,
        'post_content_filtered' => '',
        'post_parent' => 0,
        'guid' => $faker->url,
        'menu_order' => 0,
        'post_type' => 'post',
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
}, 'post_status_inherit');
