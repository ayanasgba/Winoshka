@extends('layouts.app')

@section('title-block') {{$data->subject}} @endsection

@section('content')
    <h1>{{$data->subject}}</h1>
    
        <div class="alert alert-info">

            <p>{{$data->message}}</p>
            <p>{{$data->email}}</p>

            <a href="{{ route('candidates-update',$data->id) }}">
                <button class="btn btn-primary">Редактировать</button>
            </a>

            <a href="{{ route('candidates-delete',$data->id) }}">
                <button class="btn btn-danger">Удалить</button>
            </a>

        </div>

@endsection
