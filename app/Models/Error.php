<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'description',];

        public function documents(){
            return $this->belongsToMany(Document::class,'document__errors');
        }
}
