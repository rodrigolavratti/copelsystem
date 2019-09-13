@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuários</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user-> id }}</td>
                                        <td>{{ $user-> name }}</td>
                                        <td>{{ $user-> email }}</td>
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
