@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Aes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('aes.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="number_aes">Número da Aes</label>
                            <input type="number" class="form-control @error('number_aes') is-invalid @enderror" name="number_aes" placeholder="Ex: 12345" require>
                            @error('number_aes')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contract_number">Número do Contrato</label>
                            <input type="text" class="form-control @error('contract_number') is-invalid @enderror" name="contract_number" placeholder="Ex: Obra por encorporação" require>
                            @error('contract_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="project_number">Número do Projeto</label>
                            <input type="number" class="form-control @error('project_number') is-invalid @enderror" name="project_number" placeholder="Ex: 100us" require>
                            @error('project_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_empreiteira">ID Empreiteira</label>
                            <input type="number" class="form-control @error('id_empreiteira') is-invalid @enderror" name="id_empreiteira" placeholder="Ex: 100us" require>
                            @error('id_empreiteira')
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
                        <input type="submit" class="btn btn-success " value="Adicionar Aes">
                        <a class="btn btn-success" href="{{ route('aes.index') }}">Voltar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
