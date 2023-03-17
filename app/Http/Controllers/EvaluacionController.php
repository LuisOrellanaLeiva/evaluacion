<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Evaluation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Http\Requests\EvaluacionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Exports\EvaluationExport;
use Maatwebsite\Excel\Facades\Excel;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluados = Auth::user()->profile->colaboradores()->where('estado', true)->get();
        return view('evaluacion.index', compact('evaluados'));
    }

    public function evaluar(Profile $profile)
    {
        $evaluacion = $profile->evaluaciones()->where('cerrada', false)->first();
        return view('evaluacion.form', compact('profile', 'evaluacion'));
    }

    // Metodo encargado de guardar respuestas en tiempo real
    public function realtimeStore(EvaluacionRequest $request)
    {
        $evaluado = Evaluation::where([['cerrada', false], ['profile_id', $request->profile_id]])->first();
        if ($evaluado) {
            $evaluado->update($request->all());
        } else {
            Evaluation::create($request->all());
        }

        return response()->json([], Response::HTTP_ACCEPTED);
    }

    // Metodo encargado de guardar las respuestas al hacer click en boton enviar del formulario
    public function store(EvaluacionRequest $request)
    {
        $evaluado = Evaluation::where([['cerrada', false], ['profile_id', $request->profile_id]])->first();
        $evaluado->update(array_merge($request->all(), ['cerrada' => true]));

        return redirect()->route('evaluacion.index')->with('success', 'Evaluacion realizada con exito!');
    }

    public function evaluaciones(){
        $evaluaciones = Evaluation::all();
        return view('evaluacion.evaluaciones',compact('evaluaciones'));
    }

    // metodo encargado de generar un reporte de evaluaciones
    public function export(){
        return Excel::download(new EvaluationExport, 'reporte.xlsx');
    }



}
