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
                @/*if (session('status'))
                <div class="alert alert-success">
                    {/*{session('status')}}
                </div>
                @/*endif
                @/*php
                    $ide = 1;
                @/*endphp
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Libellé de la catégorie</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @/*foreach($categories as $categorie)
                            <tr>
                                <td>{/*{ $categorie->id }}</td>
                                <td>{/*{ $categorie->libelle }}</td>
                                <td>{/*{ $categorie->description }}</td>
                            <td>
                                <a href="/modifier-categorie/{*{ $categorie->id }}" class="btn btn-info">Modifier</a>
                                <a href="/supprimer-categorie/{*{ $categorie->id }}" class="btn btn-danger">Supprimer</a>
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @php
                            $ide = 1;
                        @endphp

                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Libellé de la catégorie</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>{{ $categorie->id }}</td>
                                        <td>{{ $categorie->libelle }}</td>
                                        <td>{{ $categorie->description }}</td>
                                        <td>
                                            <a href="/modifier-categorie/{{ $categorie->id }}" class="btn btn-info">Modifier</a>
                                            <a href="/supprimer-categorie/{{$categorie->id }}" class="btn btn-danger">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $ide += 1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        <a href="/categories/ajouter" class="btn btn-primary">Ajouter une categorie</a>
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




