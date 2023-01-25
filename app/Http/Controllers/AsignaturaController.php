<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

class AsignaturaController extends Controller
{
    protected $asignaturas;

    public function __construct(Asignatura $asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $asignaturas = $this->asignaturas->obtenerAsignaturasPorUsuario($user_id);
        return view('asignaturas.lista', ['asignaturas' => $asignaturas]);
    }

    public function create()
    {
        return view('asignaturas.crear');
    }

    public function store(Request $request)
    {
        $asignatura = new Asignatura($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    public function show($codAs)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorCod($codAs);
        return view('asignaturas.ver', ['asignatura' => $asignatura]);
    }
    public function edit($codAs)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorCod($codAs);
        return view('asignaturas.editar', ['asignatura' => $asignatura]);
    }


    public function update(Request $request, $codAs)
    {
        $asignatura = Asignatura::find($codAs);
        $asignatura->fill($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    public function destroy($codAs)
    {
        $asignaturas = Asignatura::find($codAs);
        $asignaturas->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}

