<?php

namespace App\Http\Controllers;

use App\Adquiriente;
use App\Enajenante;
use Illuminate\Http\Request;
use App\Declaranot;
use App\Concepto;
use App\User;
use App\Http\Requests;
use App\Http\Requests\DeclaranotRequest;

class DeclaranotPrivateController extends Controller
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

        $declaranots = Declaranot::where('type','=','2')->paginate(15);
        return view('declaranotspriv.index', compact('declaranots'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conceptos = Concepto::lists('display_name', 'id');
        $users = User::lists('name', 'id');
        return view('declaranotspriv.create', compact('conceptos', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeclaranotRequest $request)
    {
        $declaranot = new Declaranot($request->all());
        if($declaranot->save()){
            $enajenantes = $request->enajenantes;
            $adquirientes = $request->adquirientes;
            foreach($enajenantes as $e){
                $enj = new Enajenante();
                $enj->full_name = $e["full_name"];
                $enj->rfc = $e["rfc"];
                $enj->curp = $e["curp"];
                $enj->declaranot_id = $declaranot->id;
                $declaranot->enajenantes()->save($enj);

            }

            foreach($adquirientes as $ad){
                $adq = new Adquiriente();
                $adq->full_name = $ad["full_name"];
                $adq->rfc = $ad["rfc"];
                $adq->curp = $ad["curp"];
                $adq->declaranot_id = $declaranot->id;
                $declaranot->adquirientes()->save($adq);
            }
            return redirect('declaranotspriv');


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
        $declaranot = Declaranot::with(['enajenantes', 'adquirientes'])->findOrFail($id);
        $conceptos = Concepto::lists('display_name', 'id');
        $users = User::lists('name', 'id');
        return view('declaranotspriv.edit', compact('declaranot', 'conceptos', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeclaranotRequest $request, $id)
    {
        $declaranot = Declaranot::findOrfail($id);

        if($declaranot->update($request->all())){

            $enajenantes = $request->enajenantes;
            $adquirientes = $request->adquirientes;
            $declaranot->enajenantes()->delete();
            $declaranot->adquirientes()->delete();

            foreach($enajenantes as $e){
                $enj = new Enajenante();
                $enj->full_name = $e["full_name"];
                $enj->rfc = $e["rfc"];
                $enj->curp = $e["curp"];
                $enj->declaranot_id = $declaranot->id;
                $declaranot->enajenantes()->save($enj);

            }

            foreach($adquirientes as $ad){
                $adq = new Adquiriente();
                $adq->full_name = $ad["full_name"];
                $adq->rfc = $ad["rfc"];
                $adq->curp = $ad["curp"];
                $adq->declaranot_id = $declaranot->id;
                $declaranot->adquirientes()->save($adq);
            }
            return redirect('declaranots');
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
        $declaranot = Declaranot::findOrfail($id);
        if($declaranot->delete()){
            return redirect('declaranots');
        }
    }
}
