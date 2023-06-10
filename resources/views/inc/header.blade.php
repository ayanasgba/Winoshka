<style>
    .navbar {
        justify-content: center;
    }

    .navbar-nav .nav-link {
        transition: background-color 0.3s;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        background-color: #f8f9fa;
        color: pink;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('form')}}">Моя заявка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('candidates-data')}}">Одиночки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
