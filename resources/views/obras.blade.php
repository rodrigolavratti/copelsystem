@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Obras</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    




                </div>
            </div>
        </div>
    </div>
</section>
@endsection
