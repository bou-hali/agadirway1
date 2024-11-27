<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chauffeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add Chauffeur</h1>
        
        <form action="/admin/chauffeurs/add" method="post">
            <?= csrf_field() ?>
            <div class="form-group mb-3">
                <label for="nom">Name</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="prenom">First Name</label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="numTelephone">Phone</label>
                <input type="text" name="numTelephone" id="numTelephone" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="permis">License</label>
                <input type="text" name="permis" id="permis" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Chauffeur</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
