<?php

namespace App\Models\Wp\PostType;

use App\Models\Wp\Post as WpPost;
use Illuminate\Database\Eloquent\Builder;

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
}
