<!DOCTYPE html>
<html>
<head>
    <title>Edit Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Bus</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/admin/buses/edit/<?= $bus['id'] ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="numero" class="form-label">Bus Number</label>
            <input type="text" class="form-control" id="numero" name="numero" value="<?= $bus['numero'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="marque" class="form-label">Brand</label>
            <input type="text" class="form-control" id="marque" name="marque" value="<?= $bus['marque'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="capacite" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacite" name="capacite" value="<?= $bus['capacite'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Bus</button>
        <a href="/admin/buses" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
