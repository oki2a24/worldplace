<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $ID
 * @property int $post_author
 * @property string $post_date
 * @property string $post_date_gmt
 * @property string $post_content
 * @property string $post_title
 * @property string $post_excerpt
 * @property string $post_status
 * @property string $comment_status
 * @property string $ping_status
 * @property string $post_password
 * @property string $post_name
 * @property string $to_ping
 * @property string $pinged
 * @property string $post_modified
 * @property string $post_modified_gmt
 * @property string $post_content_filtered
 * @property int $post_parent
 * @property string $guid
 * @property int $menu_order
 * @property string $post_type
 * @property string $post_mime_type
 * @property int $comment_count
 */
class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wp_posts';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 日付を変形する属性
     *
     * @var array
     */
    protected $dates = [
        'post_date',
    ];

    /**
     * この投稿の投稿者を取得します。
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\WP\User', 'post_author', 'ID');
    }

    /**
     * 投稿種別が投稿のレコードに限定するクエリスコープです。
     * @param Builder $query
     * @return Builder
     */
    public function scopePostTypePost(Builder $query): Builder
    {
        return $query->where('post_type', 'post');
    }

    /**
     * 投稿ステータスが管理画面の投稿一覧の "すべて" に表示するレコードに限定するクエリスコープです。
     * @param Builder $query
     * @return Builder
     */
    public function scopePostStatusAll(Builder $query): Builder
    {
        return $query->where(function ($query) {
            $query
            ->where('post_status', 'publish')
            ->orWhere('post_status', 'future')
            ->orWhere('post_status', 'draft')
            ->orWhere('post_status', 'pending')
            ->orWhere('post_status', 'private')
            ->orWhere('post_status', 'trash');
        });
    }

    /**
     * 投稿日時の降順に並び替えるクエリスコープです。
     * @param Builder $query
     * @return Builder
     */
    public function scopeOrderByPostDateDesc(Builder $query): Builder
    {
        return $query->orderBy('post_date', 'desc');
    }
}
