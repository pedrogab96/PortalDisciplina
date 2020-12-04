@extends('layouts.app')

@section('content')
    <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>

    <div class="row mt-3">
        <h4 class="text-white">Sinopse</h4> <br>
        {{-- <p class="border border-secondary bg-light"> {{ $disc->description }} </p> --}}
        <textarea style="resize:none" class="form-control" id="sinopse" name="sinopse" rows="7" readonly> {{ $disciplines->description }}</textarea>
    </div>

    <div class="row mt-3">
        <h4 class="text-white">Trailer</h4>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{ $disciplines->urlMedia }}"
                allowfullscreen></iframe>
        </div>
        <p>{{$disciplines->mediaType}}</p>
    </div>

@endsection