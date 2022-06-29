<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
/**
 * Class TrabajoController
 * @package App\Http\Controllers
 */
class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = Trabajo::paginate();

        return view('trabajo.index', compact('trabajos'))
            ->with('i', (request()->input('page', 1) - 1) * $trabajos->perPage());
    }

    public function tableAll()
    {
        $trabajos = Trabajo::all();

        return view('trabajo\tabla', compact('trabajos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajo = new Trabajo();
        return view('trabajo.create', compact('trabajo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Trabajo::$rules);

        $trabajo = Trabajo::create($request->all());

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajo = Trabajo::find($id);

        return view('trabajo.show', compact('trabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajo = Trabajo::find($id);

        return view('trabajo.edit', compact('trabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Trabajo $trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajo $trabajo)
    {
        request()->validate(Trabajo::$rules);

        $trabajo->update($request->all());

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo modificado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $trabajo = Trabajo::find($id)->delete();

        return redirect()->route('trabajos.index')
            ->with('success', 'Trabajo borrado correctamente');
    }

    public function generar_pdf(){
        $trabajos = Trabajo::all();
        $pdf = PDF::loadView('trabajos.generar_pdf', compact('trabajos'));
        return $pdf->download('trabajos.pdf');
    }   //end generar_pdf
}

