<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const NEWS = 'Новости';

    /**
     * Статьи
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(){
        return $this->hasMany(Article::class,'categories_id','id');
    }


    /**
     * Страницы - обратная
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page(){
        return $this->belongsTo(Page::class,'pages_id','id');
    }
}
