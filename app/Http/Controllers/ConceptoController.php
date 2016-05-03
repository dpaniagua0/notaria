<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concepto;
use App\Http\Requests\ConceptoRequest;
use App\Http\Requests;

class ConceptoController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptos = Concepto::paginate(15);
        return view('conceptos.index', compact('conceptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conceptos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConceptoRequest $request)
    {
        $concepto = new Concepto($request->all());
        if ($concepto->save()) {
            return redirect('conceptos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concepto = Concepto::findOrfail($id);
        return view('conceptos.edit', compact('concepto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConceptoRequest $request, $id)
    {
        $concepto = Concepto::findOrfail($id);
        if (isset($concepto)) {
            if ($concepto->update($request->all())) {
                return redirect('conceptos');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concepto = Concepto::findOrfail($id);
        if ($concepto->delete()) {
            return redirect('conceptos');
        }
    }
}
