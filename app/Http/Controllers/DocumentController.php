<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Service;
use App\User;
use App\Http\Requests;
use App\Http\Requests\DocumentRequest;

class DocumentController extends Controller
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
        $documents = Document::paginate(15);
        return view('documents.index', compact('documents'));
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
        return view('documents.create', compact('services','users','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequest $request)
    {
        $document = new Document($request->all());
        $document->arrive_date = date("Y-m-d", strtotime($request->arrive_date));
        $document->upload_date = date("Y-m-d", strtotime($request->upload_date));
      
        if($document->save()){
            return redirect('documentos');
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
        $document = Document::findOrfail($id);
        $services = Service::lists('display_name', 'id');
        $users = User::lists('name', 'id');
        $status = ['1' => 'En tramite','2' => 'En espera', '3' => 'Cancelado'];
        return view('documents.edit', compact('services','users','status','document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, $id)
    {
        $document = Document::findOrfail($id);

        $document->arrive_date = date("Y-m-d", strtotime($request->arrive_date));
        $document->upload_date = date("Y-m-d", strtotime($request->upload_date));
        if($document->save()){
            return redirect('documentos');
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
        $document = Document::findOrfail($id);
        if($document->delete()){
            return redirect('documentos');
        }
    }
}
