<?php

namespace App\Http\Controllers;



use App\Aes;
use Illuminate\Http\Request;

class aesController extends Controller
{
    /**
     * Rota para index com informações do Aes
     * 
     * @author Rodrigo Lavratti
     */
    public function index(){
        $aess = Aes::all();
        return view('aes.index',compact('aess'));
    }

 /**
     * Rota para o mostrar
     * 
     * @author Rodrigo Lavratti
     */
    public function show($id)
    {
        //
    }

    /**
     * Rota para o formulário de criação
     * 
     * @author Rodrigo Lavratti
     */

    public function create(){
            return view('aes.create');
    }

    /**
     * Método para salvar as informações que vem do create()
     * 
     * @author Rodrigo Lavratti
     */
    public function store(Request $request, Aes $Aes)
    {
        $validatedData = $request->validate([
            'number_aes' => 'required|unique:aes|max:255',
            'contract_number' => 'required',
            'project_number' => 'required|numeric',
            'id_empreiteira' => 'required',
            'data_start' => 'required|date',
            'data_end' => 'required|date',
        ]);
        Aes::create($request->all());
        
        return redirect()->route('aes.index')->with('message', 'Aes created successfully!');
    }



    public function edit($id)
    {
        $aes = Aes::findOrFail($id);
        return view('aes.edit', compact('aes'));
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
        $validatedData = $request->validate([
              'number_aes' => 'required|max:255',
            'contract_number' => 'required',
            'project_number' => 'required|numeric',
            'id_empreiteira' => 'required',
            'data_start' => 'required|date',
            'data_end' => 'required|date',
        ]);  
        Aes::whereId($id)->update($validatedData);

        return redirect('/aes')->with('success', 'Contract is successfully updated');
    }

    public function destroy($id)
    {
        $Aes = Aes::findOrFail($id);
        $Aes->delete();

        return redirect('/aes')->with('success', 'Contract is successfully deleted');
    }


}

