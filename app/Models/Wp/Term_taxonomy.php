<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $term_taxonomy_id
 * @property integer $term_id
 * @property string $taxonomy
 * @property string $description
 * @property integer $parent
 * @property integer $count
 */
class Term_taxonomy extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wp_term_taxonomy';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'term_taxonomy_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['term_id', 'taxonomy', 'description', 'parent', 'count'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

}
