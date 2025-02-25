<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $term_id
 * @property string $name
 * @property string $slug
 * @property int $term_group
 */
class Term extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wp_terms';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'term_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'term_group'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
