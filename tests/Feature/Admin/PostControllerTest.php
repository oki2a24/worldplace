<?php

namespace Tests\Feature\Admin;

use App\Models\Wp\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 各テスト実行前に呼ばれる。
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    /**
     * @test
     *
     * @return void
     */
    public function post_typeがpostのレコードが表示されること()
    {
        $post = factory(Post::class, 'post_type_post')->create();
        $page = factory(Post::class, 'post_type_page')->create();
        $attachment = factory(Post::class, 'post_type_attachment')->create();
        $revision = factory(Post::class, 'post_type_revision')->create();
        $navMenuItem = factory(Post::class, 'post_type_nav_menu_item')->create();

        $response = $this->get('/admin/posts');

        $response
            ->assertViewIs('admin.posts.index')
            ->assertStatus(200)
            ->assertSee($post->post_title)
            ->assertDontSee($page->post_title)
            ->assertDontSee($attachment->post_title)
            ->assertDontSee($revision->post_title)
            ->assertDontSee($navMenuItem->post_title);
    }

    /**
     * @test
     *
     * @return void
     */
    public function post_statusが適切なレコードが表示されること()
    {
        $publish = factory(Post::class, 'post_type_post')->create();
        $future = factory(Post::class, 'post_status_future')->create();
        $draft = factory(Post::class, 'post_status_draft')->create();
        $pending = factory(Post::class, 'post_status_pending')->create();
        $private = factory(Post::class, 'post_status_private')->create();
        $trash = factory(Post::class, 'post_status_trash')->create();
        $autoDraft = factory(Post::class, 'post_status_auto-draft')->create();
        $inherit = factory(Post::class, 'post_status_inherit')->create();

        $response = $this->get('/admin/posts');

        $response
            ->assertViewIs('admin.posts.index')
            ->assertStatus(200)
            ->assertSee($publish->post_title)
            ->assertSee($future->post_title)
            ->assertSee($draft->post_title)
            ->assertSee($pending->post_title)
            ->assertSee($private->post_title)
            ->assertSee($trash->post_title)
            ->assertDontSee($autoDraft->post_title)
            ->assertDontSee($inherit->post_title);
    }

    /**
     * @test
     *
     * @return void
     */
    public function post_dateの降順に表示されること()
    {
        $posts = factory(Post::class, 'post_type_post', 3)->create();
        $expects = $posts
            ->sortByDesc(function ($item) {
                return $item->post_date;
            })
            ->values()
            ->pluck('post_title')
            ->all();

        $response = $this->get('/admin/posts');

        $response
            ->assertViewIs('admin.posts.index')
            ->assertStatus(200)
            ->assertSeeInOrder($expects);
    }
}
