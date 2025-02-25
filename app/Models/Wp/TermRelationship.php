<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $object_id
 * @property int $term_taxonomy_id
 * @property int $term_order
 */
class TermRelationship extends Model
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
