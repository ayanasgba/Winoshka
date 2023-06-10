@extends('layouts.app')

@section('title-box')
    Страница Контактов
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

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .contact-item img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .contact-item a {
        color: #333;
        text-decoration: none;
        font-size: 16px;
    }

    .contact-item a:hover {
        color: #ff4081;
    }
</style>

<div class="container">
    <h1>Страница Контактов</h1>

    <p>Вы можете связаться с нами через следующие способы:</p>

    <div class="contact-item">
        <img src="whatsapp" alt="WhatsApp">
        <a href="https://wa.me/1234567890">WhatsApp</a>
    </div>

    <div class="contact-item">
        <img src="telegram" alt="Telegram">
        <a href="https://t.me/username">Telegram</a>
    </div>

    <div class="contact-item">
        <img src="instagram" alt="Instagram">
        <a href="https://www.instagram.com/username">Instagram</a>
    </div>

    <div class="contact-item">
        <img src="tiktok" alt="TikTok">
        <a href="https://www.tiktok.com/@username">TikTok</a>
    </div>
</div>
@endsection
