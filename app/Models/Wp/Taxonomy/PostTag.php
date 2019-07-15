<?php

namespace App\Models\Wp\Taxonomy;

use App\Models\Wp\TermTaxonomy;
use Illuminate\Database\Eloquent\Builder;

class PostTag extends TermTaxonomy
{
    /**
     * モデルの「初期起動」メソッド
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('TaxonomyCategory', function (Builder $builder) {
            $builder->where('taxonomy', 'post_tag');
        });
    }

    /**
     * name を取得します。
     *
     * @return string
     */
    public function getNameAttribute(): string
    {
        return $this->term->name;
    }

    /**
     * slug を取得します。
     *
     * @return string
     */
    public function getSlugAttribute(): string
    {
        return $this->term->slug;
    }
}
