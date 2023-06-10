@extends('layouts.app')

@section('title-block')
    Все сообщения
@endsection

@section('content')
<style>
    body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
    }

    .container {
        margin-top: 50px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #ff4081;
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .alert {
        background-color: #d1ecf1;
        color: #0c5460;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .alert h3 {
        color: #0c5460;
        font-size: 24px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .alert h4 {
        color: #0c5460;
        font-size: 20px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .alert h6 {
        color: #0c5460;
        font-size: 16px;
        margin-top: 0;
        margin-bottom: 10px;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="container">
    <h1>Все сообщения</h1>
    @foreach($data as $element)
        <div class="alert">

            <h3>{{$element->name}}</h3>
            <h4>{{$element->subject}}</h4>
            <h6>{{$element->group}}</h6>

            <a href="{{ route('candidates-detail-one', $element->id) }}">
                <button class="btn btn-warning"> Детальная информация</button>
            </a>
        </div>
    @endforeach
</div>
@endsection
