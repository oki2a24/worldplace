<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $object_id
 * @property integer $term_taxonomy_id
 * @property int $term_order
 */
class Term_relationship extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wp_term_relationships';

    /**
     * @var array
     */
    protected $fillable = ['term_order'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

}
