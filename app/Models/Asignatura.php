<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";

    protected $fillable = ['codAs', 'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs', 'user_id'];
    
    protected $primaryKey = "codAs";
    
    public function obtenerAsignaturas()
    {
        return Asignatura::all();
    }

    public function obtenerAsignaturaPorCod($codAs)
    {
        return Asignatura::find($codAs);
    }

    public function obtenerAsignaturasPorUsuario($user_id)
    {
        return Asignatura::where('user_id', $user_id)->get();
    }
}
