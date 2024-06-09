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
                                    <th>Section du rayon</th>
                                    <th>Partie du rayon</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rayons as $rayon)
                                    <tr>
                                        <td>{{ $rayon->id }}</td>
                                        <td>{{ $rayon->section }}</td>
                                        <td>{{ $rayon->partie }}</td>
                                        <td>
                                            <a href="/modifier-rayon/{{ $rayon->id }}" class="btn btn-info">Modifier</a>
                                            <a href="/supprimer-rayon/{{$rayon->id }}" class="btn btn-danger">Supprimer</a>
                                        </td>
                                    </tr>
                                    @php
                                        $ide += 1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        <a href="/rayons/ajouter" class="btn btn-primary">Ajouter un rayon</a>
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