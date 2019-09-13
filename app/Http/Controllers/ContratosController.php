<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     *  Rota para index com informações do Contrato
     * 
     * @author Rodrigo Lavratti
     */
    public function index(){
        $contratos = Contrato::all();
        return view('contratos.index',compact('contratos'));
    }

    /**
     *  Rota para o mostrar
     */
    public function show($id)
    {
        //
    }

    /**
     *  Rota para o formulário Criação
     * 
     * @author Rodrigo Lavratti
     */
    public function create(){
        return view('contratos.create');
    }

    /**
     *  Método para salvar as informações que vem do create()
     */
    public function store(Request $request, Contrato $contrato)
    {
        $validatedData = $request->validate([
            'contract_number' => 'required|unique:contratos|max:255',
            'contract_type' => 'required',
            'quantily' => 'required|numeric',
            'data_start' => 'required|date',
            'data_end' => 'required|date'
        ]);

        //UMAS DAS FORMAS DE UTILIZAR O CREATE
        // $contrato = new Contrato;
        // $contrato->contract_number = $request->contract_number;
        // $contrato->contract_type = $request->contract_type;
        // $contrato->quantily = $request->quantily;
        // $contrato->data_start = $request->data_start;
        // $contrato->data_end = $request->data_end;
        // $contrato->save();
        Contrato::create($request->all());
        return redirect()->route('contratos.index')->with('message', 'contrato created successfully!');
    }

    /**
     * Rota para o formulário de edição com informações do Contrato
     */
    // public function edit(Contrato $contrato){
    //     return view('contratos.edit', compact('contrato'));
    // }


    /**
     * Rota para o formulário de edição com informações do Contrato
     */
    public function edit($id)
    {
        $contrato = Contrato::findOrFail($id);
        return view('contratos.edit', compact('contrato'));
    }


    /**
     *  Método que irá atualizar as informações no banco
     */
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate([
            'contract_number' => 'required|max:255',
            'contract_type' => 'required',
            'quantily' => 'required|numeric',
            'data_start' => 'required|date',
            'data_end' => 'required|date'
        ]);
        Contrato::whereId($id)->update($validatedData);
        return redirect('/contratos')->with('success','Product update successfully');
    }


    /**
     *  Metodo para deletar 
     */
    public function destroy($id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return redirect('/contratos')->with('success','Product deleted successfully');
    }

}
