<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Question extends Model
{

    public $timestamps =false;
    protected $fillable=[
        'message',
        'user_id'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    protected function mensajePregunta(): Attribute{
        return Attribute::make(
            get: fn($value)=> $this->message,
        );
    }



}
