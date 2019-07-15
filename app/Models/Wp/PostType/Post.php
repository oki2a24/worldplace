<?php

namespace App\Models\Wp\PostType;

use App\Models\Wp\Post as WpPost;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends WpPost
{
    /**
     * モデルの「初期起動」メソッド
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('postTypePost', function (Builder $builder) {
            $builder->where('post_type', 'post');
        });
    }

    /**
     * この投稿に所属するカテゴリーを取得します。
     *
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            'App\Models\Wp\Taxonomy\Category',
            'wp_term_relationships',
            'object_id',
            'term_taxonomy_id',
            'ID',
            'term_taxonomy_id'
        );
    }

    /**
     * この投稿に所属するカテゴリーを取得します。
     *
     * @return BelongsToMany
     */
    public function postTags(): BelongsToMany
    {
        return $this->belongsToMany(
            'App\Models\Wp\Taxonomy\PostTag',
            'wp_term_relationships',
            'object_id',
            'term_taxonomy_id',
            'ID',
            'term_taxonomy_id'
        );
    }

    /**
     * 投稿ステータスの説明を返します。
     *
     * @return string
     */
    public function getPostStatusDescriptionAttribute(): string
    {
        $statuses = [
            'draft'   => '下書き',
            'future'   => '予約済み',
            'pending' => 'レビュー待ち',
            'private' => '非公開',
            'publish' => '公開済み',
            'trash' => 'ゴミ箱',
        ];

        return $statuses[$this->post_status];
    }
}
