<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $option_id
 * @property string $option_name
 * @property string $option_value
 * @property string $autoload
 */
class Options extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wp_options';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'option_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['option_name', 'option_value', 'autoload'];

}
