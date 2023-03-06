<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    protected $fillable = ['id','id_category','name','quota','date'];


        public function category (){
            return $this->belongsTo(Category::class,);
        }

}

