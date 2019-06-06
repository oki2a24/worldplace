<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $meta_id
 * @property integer $comment_id
 * @property string $meta_key
 * @property string $meta_value
 */
class Commentmeta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wp_commentmeta';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'meta_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['comment_id', 'meta_key', 'meta_value'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

}
