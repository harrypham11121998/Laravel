<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Companies extends Model
{
    protected $table = 'companies';
    public function search($value){
        return self::where("category_id", "=", $value)->paginate(15);
    }
} 