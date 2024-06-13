<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNECTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Connection</h1>
                    </div>
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="votrenom@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>                            
                            <div class="mb-3">
                                <div class="d-grid d-inline-flex gap-3">
                                    <button class="btn btn-primary" style=" font-weight:400;font-size:16px;">Se connecter</button>
                                    <a href="/register" class="btn btn-outline-secondary" style=" font-weight:400;font-size:16px;
                                    ">S'inscrire</a>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

