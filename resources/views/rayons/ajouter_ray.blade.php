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
                        <h3>AJOUTER UN RAYON</h3>
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
                        <form action="/ajouter/rayon-traitement" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="section" class="form-label">Section du rayon:</label>
                                <select id="section" class="form-control" name="section">
                                    <option value="A" {{ old('section') == 'A' ? 'selected' : '' }}>Section A</option>
                                    <option value="B" {{ old('section') == 'B' ? 'selected' : '' }}>Section B</option>
                                    <option value="C" {{ old('section') == 'C' ? 'selected' : '' }}>Section C</option>
                                    <option value="D" {{ old('section') == 'D' ? 'selected' : '' }}>Section D</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="partie" class="form-label">Partie du rayon:</label>
                                <select id="partie" class="form-control" name="partie">
                                    <option value="premier_moitie" {{ old('partie') == 'premier_moitie' ? 'selected' : '' }}>Première moitié</option>
                                    <option value="seconde_moitie" {{ old('partie') == 'seconde_moitie' ? 'selected' : '' }}>Seconde moitié</option>
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            <br>
                            <br>
                            <a href="/rayons" class="btn btn-outline-primary btn-sm">Retour</a>
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


  