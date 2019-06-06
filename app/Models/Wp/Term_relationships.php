<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $object_id
 * @property integer $term_taxonomy_id
 * @property int $term_order
 */
class Term_relationships extends Model
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

}
