<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Trainers extends Model
{
    protected $table = 'trainers';

    public function search($value){
        return self::where("trainer_name", "LIKE", "%".$value."%")->paginate(15);
    }

} 