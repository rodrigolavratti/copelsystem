@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2>Lista de Contratos</h2>
                    <a class="btn btn-primary ml-2" href="{{ route('contratos.create') }}">Adicionar Contrato</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Número do Contrato</th>
                                <th scope="col">Tipo do Contrato</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Data de Início</th>
                                <th scope="col">Data de Término</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contratos as $contrato)
                                <tr>
                                    <th scope="row">{{ $contrato->contract_number }}</th>
                                    <td>{{ $contrato->contract_type }}</td>
                                    <td>{{ $contrato->quantily }}</td>
                                    <td>{{ $contrato->data_start }}</td>
                                    <td>{{ $contrato->data_end }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('contratos.edit', $contrato->id) }}">Editar</a>
                                    
                                    <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST">
                                       @csrf 
                                       @method('DELETE')
                                       <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>                  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
