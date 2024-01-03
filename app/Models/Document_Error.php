<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document_Error extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'error_id',
        'document_id',
        'status_id',
    ];

}
