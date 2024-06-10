<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque - Accueil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card-custom {
            background-color: #f8f9fa; /* Adjust this color as needed */
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($livres as $livre)
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        @if ($livre->image)
                            <img src="{{ $livre->image}}" alt="" class="card-img-top book-cover" style="border-radius: 20px;">
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
                            <a href="/detail-livre/{{$livre->id}}" class="btn btn-outline-info">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
