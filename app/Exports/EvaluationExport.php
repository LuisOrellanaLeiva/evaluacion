<?php

namespace App\Exports;

use App\Models\Evaluation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EvaluationExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Evaluation::all();
    // }

    public function view(): View
    {
        return view('evaluacion.reporte',[
            'evaluations' => Evaluation::all()
        ]);
    }
}
