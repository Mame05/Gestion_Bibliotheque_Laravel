<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BOBLIOTHÈQUE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form>
    @csrf
      <div class="mb-3">
        <label for="libelle" class="form-label">Catégorie du livre:</label>
        <select id="libelle" class="form-select" name="categorie" required>
          <option value="Anglais">Anglais</option>
          <option value="Français">Français</option>
          <option value="Histo_Geo">Histo_Geo</option>
          <option value="Mathematique">Mathematique</option>
          <option value="Roman">Roman</option>
          <option value="Science_Naturelle">Science_Naturelle</option>
          <option value="Science_Phisique">Science_Phisique</option>
          <option value="Theatre">Theatre</option>
        </select>
      </div>
      <div class="mb-3">
        <div class="form-check">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


  