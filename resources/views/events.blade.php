@extends('layouts/app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Események amelyre megvettem a jegyet</h3>
                @foreach($myEvents as $event)

                    <div class="card mt-3">
                        <img src="{{asset('img/pexels-photo-1190298.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->name}}</h5>
                            <p class="card-text">{{$event->date}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
