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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/login" class="btn  btn-sm" style=" font-weight:400;font-size:16px;">Se Connecter</a>
        <a href="#" onclick="document.getElementById('logout-form').submit()" class="btn  btn-sm" style=" font-weight:400;font-size:16px;">
            <form action="/logout" action="post" id="logout-form">@csrf</form>
             Se Déconnecter
          </a>
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
        background-color: #4b97e7;
    }
    .btn{
        background-color:#ffffff;
        color:#333;
    }
    .btn:hover{
        background-color:#4b97e7;

    }
</style>
