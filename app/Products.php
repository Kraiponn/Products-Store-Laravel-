<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Books;;

class Products extends Model
{
    protected $table = 'products';

    public function projects() {
        return $this->hasMany(Projects::class);
    }

}
