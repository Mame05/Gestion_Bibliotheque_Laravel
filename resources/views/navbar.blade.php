<nav>
    <div class="nav-container">
        <div class="nav-logo">
            <a style="font-weight:700;font-size:30px;" href="/">Ma Bibliothèque</a>
        </div>
        <ul class="nav-links">
            <li><a style=" font-weight:400;font-size:24px;" href="/">Accueil</a></li>
            <li><a style=" font-weight:400;font-size:24px;"  href="/categories">Catégories</a></li>
            <li><a style=" font-weight:400;font-size:24px;"  href="/rayons">Rayons</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Connexion</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="/logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
    nav {
        background-color: #333;
        overflow: hidden;
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .nav-logo a {
        font-size: 24px;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    .nav-links {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .nav-links li {
        margin-left: 20px;
    }

    .nav-links li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .nav-links li a:hover {
        background-color: #111;
    }
</style>
