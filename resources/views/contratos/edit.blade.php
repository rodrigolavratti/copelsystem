@extends('layouts.app')

@section('content')
<section class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Alterar Contratos</h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('contratos.update', $contrato->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="contract_number">Número do Contrato</label>
                            <input type="number" class="form-control @error('contract_number') is-invalid @enderror" name="contract_number" placeholder="Ex: 12345" value="{{ $contrato->contract_number }}" require />
                            @error('contract_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contract_type">Tipo de Contrato</label>
                            <input type="text" class="form-control @error('contract_type') is-invalid @enderror" name="contract_type" placeholder="Ex: Obra por encorporação" value="{{ $contrato->contract_type }}" require />
                            @error('contract_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantily">Quantidade</label>
                            <input type="number" class="form-control @error('quantily') is-invalid @enderror" name="quantily" placeholder="Ex: 100us" value="{{ $contrato->quantily }}" require />
                            @error('quantily')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="data_start">Data de Início</label>
                            <input type="date" class="form-control @error('data_start') is-invalid @enderror" name="data_start" placeholder="" value="{{ $contrato->data_start }}" require />
                            @error('data_start')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="data_end">Data de Início</label>
                            <input type="date" class="form-control @error('data_end') is-invalid @enderror" name="data_end" placeholder="" value="{{ $contrato->data_end }}" require />
                            @error('data_end')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-success" value="Alterar Contrato">
                        <a class="btn btn-success" href="{{ route('contratos.index') }}">Voltar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
