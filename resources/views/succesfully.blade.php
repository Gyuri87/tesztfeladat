@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($msg)
                    <h2>Sikeres jegyvásárlás!</h2>
                    <p>Jó szorakozást!</p>
                @else
                    <h2>Hoops!</h2>
                    <p>Erre az eseményre már vásároltál jegyet!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
