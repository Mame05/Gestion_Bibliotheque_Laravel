<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Livre</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .card-custom {
            background-color: #f8f9fa; /* Adjust this color as needed */
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
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="d-flex">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>{{ $livre->title }}</h3>
                        <div>
                            <a href="/modifier-livre/{{ $livre->id }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                            </a>
                            @method('DELETE')
                            <a href="/supprimer-livre/{{ $livre->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">
                                        <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($livre->image)
                            <img src="{{$livre->image}}" alt="" class="img-fluid mb-3">
                        @else
                            <img src="https://via.placeholder.com/150" alt="No Image" class="img-fluid mb-3">
                        @endif
                        <p><strong>Titre:</strong> {{ $livre->titre }}</p>
                        <p><strong>Auteur:</strong> {{ $livre->auteur }}</p>
                        <p><strong>Catégorie:</strong> {{ $livre->categorie->libelle }}</p>
                        <p><strong>Nombre de page:</strong> {{ $livre->nombre_page }}</p>
                        <p><strong>Numéro de l'ISBN:</strong> {{ $livre->isbn }}</p>
                        <p><strong>Maison d'édition:</strong> {{ $livre->editeur }}</p>
                        <p><strong>Date de publication:</strong> {{ $livre->date_publication }}</p>
                        <p><strong>Section:</strong> {{ $livre->rayon->section }}</p>
                        <p><strong>Partie:</strong> {{ $livre->rayon->partie }}</p>
                        <p>
                            @if ($livre->disponibilite=="Oui")
                                <span class="badge badge-available">Disponible</span>
                            @else
                                <span class="badge badge-unavailable">Non disponible</span>
                            @endif
                        </p>
                        <a href="/" class="btn btn-outline-secondary">Retour à la liste des livres</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
