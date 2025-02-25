<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Wp\Post;
use Faker\Generator as Faker;

$postType = function (Faker $faker, string $postType) {
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
        'post_type' => $postType,
        'post_mime_type' => '',
        'comment_count' => 0,
    ];
};

$factory->define(Post::class, function (Faker $faker) use ($postType) {
    return $postType($faker, 'post');
}, 'post_type_post');

$factory->define(Post::class, function (Faker $faker) use ($postType) {
    return $postType($faker, 'page');
}, 'post_type_page');

$factory->define(Post::class, function (Faker $faker) use ($postType) {
    return $postType($faker, 'attachment');
}, 'post_type_attachment');

$factory->define(Post::class, function (Faker $faker) use ($postType) {
    return $postType($faker, 'revision');
}, 'post_type_revision');

$factory->define(Post::class, function (Faker $faker) use ($postType) {
    return $postType($faker, 'revision');
}, 'post_type_nav_menu_item');

$postStatus = function (Faker $faker, string $postStatus) {
    return [
        'post_author' => 1,
        'post_date' => $faker->dateTime,
        'post_date_gmt' => $faker->dateTime,
        'post_content' => $faker->realText,
        'post_title' => $faker->realText(100),
        'post_excerpt' => '',
        'post_status' => $postStatus,
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
};

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'future');
}, 'post_status_future');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'draft');
}, 'post_status_draft');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'pending');
}, 'post_status_pending');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'private');
}, 'post_status_private');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'trash');
}, 'post_status_trash');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'auto-draft');
}, 'post_status_auto-draft');

$factory->define(Post::class, function (Faker $faker) use ($postStatus) {
    return $postStatus($faker, 'inherit');
}, 'post_status_inherit');
