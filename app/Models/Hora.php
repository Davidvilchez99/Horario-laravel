<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    protected $table = "horas";

    protected $fillable = ['diaH', 'horaH', 'codAsignatura'];
    
    protected $primaryKey = ['diaH', 'horaH'];

    public $timestamps = false;
    public $incrementing = false;

    public function obtenerHoras()
    {
        return Hora::all();
    }

    public function obtenerHorarPorDia($diaH)
    {
        return Hora::find($diaH);
    }

    public function obtenerHorasPorUsuario($user_id)
    {
        return Hora::where('user_id', $user_id)->get();
    }

}
