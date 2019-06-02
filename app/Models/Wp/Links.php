<?php

namespace App\Models\Wp;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $link_id
 * @property string $link_url
 * @property string $link_name
 * @property string $link_image
 * @property string $link_target
 * @property string $link_description
 * @property string $link_visible
 * @property integer $link_owner
 * @property int $link_rating
 * @property string $link_updated
 * @property string $link_rel
 * @property string $link_notes
 * @property string $link_rss
 */
class Links extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wp_links';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'link_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_owner', 'link_rating', 'link_updated', 'link_rel', 'link_notes', 'link_rss'];

}
