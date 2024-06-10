<!--<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BIBLIOTHÈQUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <p class="d-inline-flex gap-3">
                  <a href="/categories/ajouter" class="btn btn-primary">Ajouter une catégorie</a>
                </p>
                <hr>
                @*if (session('status'))
                <div class="alert alert-success">
                    {*{session('status')}}
                </div>
                @*endif
                @*php
                    $ide = 1;
                @*endphp
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>La catégorie</th>
                                <th>Nombre de page</th>
                                <th>L'auteur</th>
                                <th>Le numéro de l'isbn</th>
                                <th>Maison d'édition</th>
                                <th>La date de la publication</th>
                                <th>Section du livre</th>
                                <th>Sa partie</th>
                                <th>Sa disponibilité</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @*foreach($livres as $livre)
                            <tr>
                                <td>{*{ $livre->titre }}</td>
                                <td>{*{ $livre->categorie->libelle }}</td>
                                <td>{*{ $livre->nombre_page }}</td>
                                <td>{*{ $livre->auteur }}</td>
                                <td>{*{ $livre->isbn }}</td>
                                <td>{*{ $livre->editeur }}</td>
                                <td>{*{ $livre->date_publication }}</td>
                                <td>{*{ $livre->rayon->section }}</td>
                                <td>{*{ $livre->rayon->partie }}</td>
                                <td>{*{ $livre->disponibilite }}</td>
                            <td>
                                <a href="/modifier-livre/{*{ $livre->id }}" class="btn btn-info">Modifier</a>
                                <a href="/supprimer-livre/{*{ $livre->id }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                            @*php
                            $ide += 1;
                            @*endphp
                        @*endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Liste des Livres</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Couverture</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Nbr_Page</th>
                                    <th>Auteur</th>
                                    <th>N°ISBN</th>
                                    <th>Éditeur</th>
                                    <th>Date_Publication</th>
                                    <th>Section</th>
                                    <th>Partie</th>
                                    <th>Disponibilité</th>
                                    <th>Actions</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livres as $livre)
                                    <tr>
                                        <td>
                                            @if ($livre->image)
                                                <img src="{{ $livre->image }}" alt="" style="width: 100px; height: auto;">
                                            @else
                                                Pas d'image
                                            @endif
                                        </td>
                                        <td>{{ $livre->titre }}</td>
                                        <td>{{ $livre->categorie->libelle }}</td>
                                        <td>{{ $livre->nombre_page }}</td>
                                        <td>{{ $livre->auteur }}</td>
                                        <td>{{ $livre->isbn }}</td>
                                        <td>{{ $livre->editeur }}</td>
                                        <td>{{ $livre->date_publication }}</td>
                                        <td>{{ $livre->rayon->section }}</td>
                                        <td>{{ $livre->rayon->partie }}</td>
                                        <td>{{ $livre->disponibilite }}</td>
                                        <td>
                                            <a href="/modifier-livre/{{ $livre->id }}" class="btn btn-sm btn-primary">Modifier</a>
                                            <!--<form action="/supprimer-livre/{{ $livre->id }}" method="POST" style="display:inline;">
                                                @*csrf-->
                                                @method('DELETE')
                                                <a href="/supprimer-livre/{{ $livre->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Êtes vous sûr de vouloir supprimer cet livre')">Supprimer</a>
                                           <!-- </form>-->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/livres/ajouter" class="btn btn-primary">Ajouter un livre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
