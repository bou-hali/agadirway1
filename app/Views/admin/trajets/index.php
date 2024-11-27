<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="mb-4">Manage Routes (Trajets)</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <a href="/admin/trajets/add" class="btn btn-primary mb-3">Add New Route</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Route Name</th>
                <th>Bus ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trajets as $trajet): ?>
                <tr>
                    <td><?= $trajet['id'] ?></td>
                    <td><?= $trajet['nom'] ?></td>
                    <td><?= $trajet['bus_id'] ?></td>
                    <td>
                        <a href="/admin/trajets/edit/<?= $trajet['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/admin/trajets/delete/<?= $trajet['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
