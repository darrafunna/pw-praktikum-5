<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-5">Devices</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($devices as $d) : ?>
                        <tr>
                            <td><?= $d['id']; ?></td>
                            <td><?= $d['device_name']; ?></td>
                            <td><?= $d['device_brand']; ?></td>
                            <td><?= $d['device_quantity']; ?></td>
                            <td><?= $d['device_status']; ?></td>
                            <td style="display: flex;">
                                <button class="btn btn-success" value="ON">ON</button>
                                <button class="btn btn-danger" value="OFF">OFF</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>