<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trajet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add Trajet</h1>

        <form action="/admin/trajets/add" method="post">
            <?= csrf_field() ?>
            <div class="form-group mb-3">
                <label for="nom" class="form-label">Name</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="bus_id" class="form-label">Bus ID</label>
                <input type="number" name="bus_id" id="bus_id" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Add Trajet</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
