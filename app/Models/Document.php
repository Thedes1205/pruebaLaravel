<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'name',];
        public function errors(){
            return $this->belongsToMany(Error::class,'document__errors');
        }
        // public function statuses(){
        //     return $this->belongsToMany(Status::class);
        // }
//         public function statuses(){
//             return $this->belongsTo(Status::class);
//         }
}
