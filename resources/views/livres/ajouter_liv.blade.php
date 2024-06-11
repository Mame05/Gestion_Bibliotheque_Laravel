<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION BIBLIOTHÈQUE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Ajouter un livre</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/ajouter/livre-traitement" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titre">Titre:</label>
                                <input type="text" id="titre" name="titre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date_publication">Date de la publication:</label>
                                <input type="date" id="date_publication" name="date_publication" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nombre_page">Nombre de page:</label>
                                <input type="number" id="nombre_page" name="nombre_page" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="auteur">Auteur:</label>
                                <input type="text" id="auteur" name="auteur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN:</label>
                                <input type="text" id="isbn" name="isbn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="editeur">Editeur:</label>
                                <input type="text" id="editeur" name="editeur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Photo de couverture:</label>
                                <input type="text" id="image" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="disponibilite">Est-il disponible?</label>
                                <select id="disponibilite" name="disponibilite" class="form-control" required>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="categorie_id">Categorie:</label>
                                <select id="categorie_id" name="categorie_id" class="form-control">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rayon_id">Section:</label>
                                <select id="rayon_id" name="rayon_id" class="form-control">
                                    @foreach ($rayons as $rayon)
                                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->section }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rayon_id">Partie:</label>
                                <select id="rayon_id" name="rayon_id" class="form-control">
                                    @foreach ($rayons as $rayon)
                                        <option value="{{ $rayon->id }}" {{ old('rayon_id') == $rayon->id ? 'selected' : '' }}>{{ $rayon->partie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <br>
                            <br>
                            <!--<a href="/livres" class="btn btn-outline-primary btn-sm">Retour</a>-->
                            <a href="/" class="btn btn-outline-primary btn-sm">Retour</a>

                        </form>
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
