<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    const SERVICES = 1;
    const СERTIFICATION = 2;
    const NORM_BASE = 3;
    const NEWS = 4;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories(){
        return $this->hasMany(Category::class,'pages_id','id');
    }
}
