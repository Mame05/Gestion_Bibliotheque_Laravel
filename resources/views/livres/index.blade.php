<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque - Accueil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">  
    
    @section('content')
    <style>
        .card-custom {
            background-color: #FFFFFF; /* Adjust this color as needed */
            border-radius: 20px; /* Bordures arrondies */
        }
        .book-cover {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .badge-available {
            background-color: #28a745;
            color: white;
        }
        .badge-unavailable {
            background-color: #dc3545;
            color: white;
        }
        .btn-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        padding: 0;
}

    </style>
</head>
<body>
    
    @extends('banierre')
    @section('title', 'Accueil - Ma Bibliothèque')

    @section('extra-css')
    <style>
    .banner {
        background-image:linear-gradient(rgba(19,17,19,0.50), rgba(19,17,19,0.50)),url('{{ asset('images/banner_accueil.jpg') }}');
        background-size: cover;
        background-position: center;
        color: white;
        width:100%;
        height:500px
    }
    </style>
    @endsection

    @section('banner')
    <div class="banner-content">
    <h1 style="text-align: center; padding-top:200px;">Bienvenue à Ma Bibliothèque</h1>
    </div>
    @endsection
    @auth<a href="/livres/ajouter" class="btn btn-primary btn-circle" style="margin-top: 10px;margin-left:90%;">
        <i class="fas fa-plus"></i>
    </a>@endauth
    <div class="container mt-5">
        <div class="row">
            @foreach ($livres as $livre)
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        @if ($livre->image)
                            <img src="{{ $livre->image}}" alt=""  style="border-radius: 20px;" width="100%" height="250px">
                        @else
                            <img src="https://via.placeholder.com/150" alt="No Image" class="card-img-top book-cover">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $livre->titre }}</h5>
                            <p class="card-text"><strong>Catégorie:</strong> {{ $livre->categorie->libelle }}</p>
                            <p>
                                @if ($livre->disponibilite=="Oui")
                                    <span class="badge badge-available">Disponible</span>
                                @else
                                    <span class="badge badge-unavailable">Non disponible</span>
                                @endif
                            </p>
                            @auth<a href="/detail-livre/{{$livre->id}}" class="btn btn-outline-info">
                                <i class="fas fa-eye"></i>@endauth
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
