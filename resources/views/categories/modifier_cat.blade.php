<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BOBLIOTHÈQUE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>MODIFIER UNE CATÉGORIE</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}} 
                            </div>
                        @endif
                        <ul>
                            @foreach($errors->all() as $error)  <!--permet d'afficher les erreurs-->
                            <li class="alert alert-danger">{{$error}}   </li>
                            @endforeach
                        </ul>
                        <form action="/modifier/categorie-traitement/" method="POST">
                            @csrf
                            <input type="text" name="id" style="display: none" value="{{ old('id', $categories->id) }}" >
                            <div class="form-group">
                                <label for="libelle" class="form-label">Nom de la catégorie du livre:</label>
                                <select id="libelle" class="form-control" name="libelle" value="{{old('libelle', $categories->libelle)}}">
                                    <option value="Anglais" {{ old('libelle') == 'Anglais' ? 'selected' : '' }} >Anglais</option>
                                    <option value="Français" {{ old('libelle') == 'Français' ? 'selected' : '' }}>Français</option>
                                    <option value="Histo_Geo" {{ old('libelle') == 'Histo_Geo' ? 'selected' : '' }}>Histo_Geo</option>
                                    <option value="Mathematique" {{ old('libelle') == 'Mathematique' ? 'selected' : '' }}>Mathematique</option>
                                    <option value="Roman" {{ old('libelle') == 'Roman' ? 'selected' : '' }}>Roman</option>
                                    <option value="Science_Naturelle" {{ old('libelle') == 'Science_Naturelle' ? 'selected' : '' }}>Science_Naturelle</option>
                                    <option value="Science_Phisique" {{ old('libelle') == 'Science_Phisique' ? 'selected' : '' }}>Science_Phisique</option>
                                    <option value="Theatre" {{ old('libelle') == 'Theatre' ? 'selected' : '' }}>Theatre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description', $categories->description) }}</textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <br>
                            <br>
                            <a href="/categories" class="btn btn-outline-primary btn-sm">Retour</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
  </body>
</html>


  