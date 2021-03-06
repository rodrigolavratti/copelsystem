@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Contratos</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('contratos.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="contract_number">Número do Contrato</label>
                            <input type="number" class="form-control @error('contract_number') is-invalid @enderror" name="contract_number" placeholder="Ex: 12345" require>
                            @error('contract_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contract_type">Tipo de Contrato</label>
                                <select class="form-control @error('contract_type') is-invalid @enderror" name="contract_type">
                                    @foreach($types_of_contract as $type_of_contract)
                                        <option value="{{ $type_of_contract->name }}">{{ $type_of_contract->name }}
                                        </option>
                                    @endforeach
                                @error('contract_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="quantily">Quantidade</label>
                            <input type="number" class="form-control @error('quantily') is-invalid @enderror" name="quantily" placeholder="Ex: 100us" require>
                            @error('quantily')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="data_start">Data de Início</label>
                            <input type="date" class="form-control @error('data_start') is-invalid @enderror" name="data_start" placeholder="" require>
                            @error('data_start')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="data_end">Data de Início</label>
                            <input type="date" class="form-control @error('data_end') is-invalid @enderror" name="data_end" placeholder="" require>
                            @error('data_end')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-success " value="Adicionar Contrato">
                        <a class="btn btn-success" href="{{ route('contratos.index') }}">Voltar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
