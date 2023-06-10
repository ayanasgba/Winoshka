@extends('layouts.app')

@section('title-box')
    Страница о нас
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

    p {
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
    }

    ul {
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
        list-style-type: disc;
        padding-left: 20px;
    }
</style>

<div class="container">
    <h1>О нас</h1>
    <p>Добро пожаловать на сайт знакомств для студентов Кыргызско-Германского института прикладной информатики!</p>
    <p>Мы рады приветствовать вас на нашем портале, созданном специально для студентов Кыргызско-Германского института прикладной информатики. Здесь вы можете найти интересных людей, делиться общими интересами и находить новых друзей.</p>
    <p>Наши функции включают:</p>
    <ul>
        <li>Создание профиля с фотографией и информацией о себе</li>
        <li>Поиск других студентов с помощью фильтров</li>
        <li>Обмен сообщениями с заинтересованными людьми</li>
        <li>Организация встреч и мероприятий для студентов</li>
    </ul>
    <p>Мы надеемся, что наш сайт поможет вам расширить круг общения, найти новых друзей и, возможно, даже встретить свою вторую половинку. Удачи!</p>
</div>
@endsection



