@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-3">
            <img src="{{asset('QrCodes/'.$drug->QR_name)}}"><br>
            <p> Congratulations! This is your products QR code!</p>
        </div>
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">{{$drug->name}}</li>
                <li class="list-group-item">{{$drug->company_name}}</li>
                <li class="list-group-item">{{$drug->email}}</li>
                <li class="list-group-item">{{$drug->phone}}</li>
                <li class="list-group-item">{{$drug->dossage}}</li>
                <li class="list-group-item">{{$drug->description}}</li>
                <li class="list-group-item">{{$drug->side_effects}}</li>
            </ul>
        </div>
    </div>

@endsection