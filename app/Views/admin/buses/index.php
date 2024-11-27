<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1 class="mb-4">Manage Buses</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <a href="/admin/buses/add" class="btn btn-primary mb-3">Add New Bus</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Bus Number</th>
                <th>Brand</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buses as $bus): ?>
                <tr>
                    <td><?= $bus['id'] ?></td>
                    <td><?= $bus['numero'] ?></td>
                    <td><?= $bus['marque'] ?></td>
                    <td><?= $bus['capacite'] ?></td>
                    <td>
                        <a href="/admin/buses/edit/<?= $bus['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/admin/buses/delete/<?= $bus['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
