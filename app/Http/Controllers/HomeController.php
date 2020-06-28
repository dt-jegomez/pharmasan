<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicamento;
use App\Exports\MedicamentoExport;
use Maatwebsite\Excel\Facades\Excel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['Vendedor', 'Administrador']);
        $medicamentos = Medicamento::paginate(10);
        return view('home', compact('medicamentos'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new MedicamentoExport, 'medicamentos.xlsx');
    }
}
