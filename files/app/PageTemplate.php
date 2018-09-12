<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\FunnelType;

class PageTemplate extends Model
{
    public function getCategory($id)
    {
        return FunnelType::find($id);
    }


    public function developer($id) {
        return $this->belongsTo('App\Developer');
    }
}
