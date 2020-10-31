@extends('layout.index')

@section('content')
    
    @isset($disciplines)
        <div class="container">
            <div class="row">
                @foreach ($disciplines as $discipline)
                    <div class="col-12 col-sm-6 col-lg-3 mt-5">
                        <div class="card shadow">
                            <img src="{{asset('img/teste1.jpg')}}" class="card-img-top" alt=".." >
                            <div class="card-body">
                                <h5 class="card-title">{{ $discipline->name }}</h5>
                                <p class="card-text">{{ Str::limit($discipline->description, 100,' (...)') }}</p>
                            </div>
                            <div class="card-footer">{{ $discipline->nameUser }}</div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    @endisset

@endsection