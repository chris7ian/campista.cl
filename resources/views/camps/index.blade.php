@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($camps as $camp)
                    {{ $camp->name }}
                @endforeach
            </div>
        </div>
    </div>
@endsection

