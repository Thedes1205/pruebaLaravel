<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'message',
        'file_id',
        'status'
    ];
    // public function document_errors(){
    //     return $this->hasMany(Document_Error::class);
    // }
    // public function document_errors(){
    //     return $this->be(Document_Error::class);
    // }
    public function documents(){
        return $this->belongsToMany(Document::class,'document__errors');
    }
    public function errors(){
        return $this->belongsToMany(Error::class,'document__errors');
    }
    public function file(){
        return $this->belongsTo(File::class);
    }

}
