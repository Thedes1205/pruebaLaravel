<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'registration_id',
        'pathFile',
        'mimeFile',
        // 'pathSolicitud',
        // 'mimeSolicitud',
        // 'pathSocieconomico',
        // 'mimeSocieconomico',
        // 'pathCompromiso',
        // 'mimeCompromiso',
        // 'pathRecomendacion',
        // 'mimeRecomendacion',
        // 'pathIngresos',
        // 'mimeIngresos',
        // 'pathDomicilio',
        // 'mimeDomicilio',
        // 'pathKardex',
        // 'mimeKardex',
        // 'pathSituacion',
        // 'mimeSituacion',
        // 'pathCurp',
        // 'mimeCurp',
];
  /*Permite recuperar la informacion del usuario desde la tabla registration*/
  public function registration(){
    return $this->belongsTo(Registration::class);
}
public function status(){
    return $this->hasOne(Status::class);
}
}
