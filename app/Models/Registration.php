<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps =false;
    protected $fillable=[
        'firstname',
        'lastname',
        'phone',
        'registration_number',
        'career',
        'grade',
        'shift',
        'gpa',
        'age',
        'gender',
        'school',
        'email',
        'modality',
        'code',
        'place',
        'user_id'
    ];

    /*Permite recuperar la informacion del usuario desde la tabla registration*/
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function file(){
        return $this->hasOne(File::class);
    }

    protected function idRegistration(): Attribute{
        return Attribute::make(
            get: fn($value)=> $this->id,
        );
    }
    protected function name(): Attribute{
        return Attribute::make(
            get: fn ($value) => strtoupper($this->firstname.' '.$this->lastname),
            //set: fn ($value) => strtolower($value),
        );
    }

}
