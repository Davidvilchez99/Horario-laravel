<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Asignatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoraController extends Controller
{
    protected $hora;
    protected $asignatura;

    public function __construct(Hora $hora, Asignatura $asignatura)
    {
        $this->hora = $hora;
        $this->asignatura = $asignatura;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $sql = 'select diaH, horaH, nombreAs, nombreCortoAs, colorAs, codAsignatura from users, asignaturas, horas where horas.codAsignatura = asignaturas.codAs and users.id = asignaturas.user_id and users.id ='.$user_id.' order by horas.horaH, horas.diaH;';
        $horasCompletas = DB::select($sql);
        // $hora = $this->hora->obtenerhoras();
        return view('horas.lista', ['horasCompletas' => $horasCompletas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        return view("horas.crear",["asignaturas" => $this->asignatura->obtenerAsignaturasPorUsuario($user_id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hora = new Hora($request->all());
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($diaH)
    {
        $hora = $this->hora->obtenerHorarPorDia($diaH);
        return view('horas.ver', ['hora' => $hora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($diaH)
    {
        $hora = $this->hora->obtenerHorarPorDia($diaH);
        return view('horas.editar', ['hora' => $hora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $diaH)
    {
        $hora = Hora::find($diaH);
        $hora->fill($request->all());
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($diaH, $horaH, $codAsignatura)
    {
        DB::table('horas')->where('diaH', $diaH)->where('horaH', $horaH)->where('codAsignatura', $codAsignatura)->delete();
        return redirect()->action([HoraController::class, 'index']);
    }
}
