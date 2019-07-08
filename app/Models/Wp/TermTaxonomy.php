<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $term_taxonomy_id
 * @property int $term_id
 * @property string $taxonomy
 * @property string $description
 * @property int $parent
 * @property int $count
 */
class TermTaxonomy extends Model
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
