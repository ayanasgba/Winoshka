@extends('layouts.app')

@section('title-box')
    Отправь заявку
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

    .form-group label {
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .alert {
        color: #ff4081;
        background-color: #f9f9f9;
        border: 1px solid #ff4081;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .alert ul {
        margin: 0;
        padding-left: 20px;
    }

    .alert li {
        margin-bottom: 5px;
    }

    .btn-success {
        background-color: #ff4081;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #e5397f;
    }
</style>

<div class="container">
    <h1>Кто ты?</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                    <li style="color:red">
                        {{$er}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('info-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="group">Группа:</label>
            <input type="text" name="group" placeholder="Введите группу" id="group" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Почта:</label>
            <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">О себе:</label>
            <input type="text" name="subject" placeholder="Расскажите о себе" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Опишите:</label>
            <textarea name="message" id="message" class="form-control" placeholder="Опишите ее/его" cols="30" rows="10"></textarea>
        </div>
        
        <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>
@endsection
