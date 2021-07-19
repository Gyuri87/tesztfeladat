@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @foreach($events as $event)
                    <div class="card mt-3">
                        <img src="{{asset('img/pexels-photo-1190298.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->name}}</h5>
                            <h6>Helszín: {{$event->location->name}}</h6>
                            <h6>{{$event->date}}</h6>
                            <h6>Jegyár: <b>{{number_format($event->price,0,'',',')}} Ft.</b></h6>
                            <p class="card-text mt-3">{{$event->description}}</p>
                            <h6>Fellépők:</h6>
                            <ul class="list-group">
                                @foreach($event->performers as $performer)
                                    <li class="list-group-item">{{$performer->name}}</li>
                                @endforeach
                            </ul>
                            <a href="/payment/{{$event->id}}" class="btn btn-primary mt-3">Jegyvásárlás</a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
