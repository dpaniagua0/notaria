<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escritura;
use App\Service;
use App\User;
use DateTime;
use App\Http\Requests;
use App\Http\Requests\EscrituraRequest;

class EscrituraController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only'=> ['destroy']]);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escrituras = Escritura::paginate(15);
        return view('escrituras.index', compact('escrituras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::lists('display_name', 'id');
        $users = User::lists('name', 'id');
        $status = ['1' => 'En tramite','2' => 'En espera', '3' => 'Cancelado'];
        return view('escrituras.create', compact('services','users','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscrituraRequest $request)
    {
        $escritura = new Escritura($request->all());
        $escritura->arrive_date = date("Y-m-d", strtotime($request->arrive_date));
        $escritura->upload_date = date("Y-m-d", strtotime($request->upload_date));
        if($escritura->save()){
            return redirect('escrituras');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escritura = Escritura::findOrfail($id);
        $services = Service::lists('display_name', 'id');
        $users = User::lists('name', 'id');
        $status = ['1' => 'En tramite','2' => 'En espera', '3' => 'Cancelado'];

        return view('escrituras.edit', compact('services','users','status','escritura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EscrituraRequest $request, $id)
    {
        $escritura = Escritura::findOrfail($id);
        $escritura->arrive_date = date("Y-m-d", strtotime($request->arrive_date));
        $escritura->upload_date = date("Y-m-d", strtotime($request->upload_date));
        
        if($escritura->save()){
            return redirect('escrituras');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escritura = Escritura::findOrfail($id);
        if($escritura->delete()){
            return redirect('escrituras');
        }
    }
}
