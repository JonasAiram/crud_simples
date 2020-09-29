<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Motorista;

class MotoristaController extends Controller
{
    private $objMotorista;

    public function __construct()
    {
        $this->objMotorista = new Motorista();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorista = $this->objMotorista->all();
        return view('index', compact('motorista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objMotorista->create([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'email'=>$request->email,
            'situacao'=>$request->situacao,
            'status'=>$request->status
         ]);
         if($cad){
             return redirect('motoristas');
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
        $motorista = $this->objMotorista->find($id);
        return view('show',compact('motorista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motorista=$this->objMotorista->find($id);
        return view('create',compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objMotorista->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'email'=>$request->email,
            'situacao'=>$request->situacao,
            'status'=>$request->status
        ]);
        return redirect('motoristas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objMotorista->destroy($id);
        return redirect('/motoristas')->with('Motorista Excluido Com Sucesso');
    }
}
