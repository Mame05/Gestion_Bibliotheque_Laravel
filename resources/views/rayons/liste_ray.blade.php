<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @section('content')
</head>
<body>
    @extends('banierre')
    @section('title', 'Accueil - Ma Bibliothèque')

    @section('extra-css')
    <style>
    .banner {
        background-image:linear-gradient(rgba(19,17,19,0.50), rgba(19,17,19,0.50)),url('{{ asset('images/banner_rayon.jpg') }}');
        background-size: cover;
        background-position: center;
        color: white;
        width:100%;
        height:600px
    }
    .btn-spacing {
            margin-right: 10px; /* Espace entre les boutons */
        }
    </style>
    @endsection

    @section('banner')
    <div class="banner-content">
    <h1 style="text-align: center; padding-top:200px;">Les rayons de la bibliothèque</h1>
    </div>
    @endsection
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Rayons</h3>
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
                                    <th>Section du rayon</th>
                                    <th>Partie du rayon</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rayons as $rayon)
                                    <tr>
                                        <td>{{ $rayon->section }}</td>
                                        <td>{{ $rayon->partie }}</td>
                                        <td>
                                            <p class="d-inline-flex gap-3">
                                                <a href="/modifier-rayon/{{ $rayon->id }}" class="btn btn-sm btn-warning" style="margin-right: 15px">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                @method('DELETE')
                                                <a href="/supprimer-rayon/{{ $rayon->id }}" class="btn btn-sm btn-danger" style="margin-right: 15px" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rayon ?');">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </p>
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
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>