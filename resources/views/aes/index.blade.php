@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2>Lista de Aes</h2>
                    <a class="btn btn-primary ml-2" href="{{ route('aes.create') }}">Adicionar Aes</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Número do Aes</th>
                                <th scope="col">Número do Contrato</th>
                                <th scope="col">Número do Projeto</th>
                                <th scope="col">ID Empreiteira</th>
                                <th scope="col">Data de Início</th>
                                <th scope="col">Data de Término</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aess as $aes)
                                <tr>
                                    <th scope="row">{{ $aes->number_aes }}</th>
                                    <td>{{ $aes->contract_number }}</td>
                                    <td>{{ $aes->project_number }}</td>
                                    <td>{{ $aes->id_empreiteira }}</td>
                                    <td>{{ $aes->data_start }}</td>
                                    <td>{{ $aes->data_end }}</td>
                                    <td><a class="btn btn-primary" href="{{ route('aes.edit', $aes->id) }}">Editar</a>
                                    
                                    <form action="{{ route('aes.destroy', $aes->id) }}" method="POST">
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
