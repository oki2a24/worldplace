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
     *
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
        dump(Post::all());

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
}
