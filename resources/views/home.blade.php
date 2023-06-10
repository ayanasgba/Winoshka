@extends('layouts.app')

@section('title-box')
    Главная Страница
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

    h5 {
        color: #777;
        font-size: 20px;
        margin-bottom: 40px;
    }

    .col-8 {
        padding-right: 40px;
        border-right: 1px solid #eee;
    }

    .col-6 {
        padding-left: 40px;
    }

    .aside {
        background-color: #ff4081;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
    }

    .aside h3 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .aside p {
        font-size: 16px;
        margin-bottom: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Это сайт для знакомств специально для инаишников!</h1>
            <h5>Обрети свое счастье, зарегистрируйся и уже через час вы будете писать код вместе лёжа в кровате.</h5>    
        </div>
        <div class="col-6">
            @include('inc.aside')
        </div>
    </div>
</div>
@endsection
