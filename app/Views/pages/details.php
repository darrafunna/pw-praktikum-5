<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-5">Details</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Device ID</th>
                        <th scope="col">Device Defect</th>
                        <th scope="col">Device Origin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail as $d) : ?>
                        <tr>
                            <td><?= $d['id']; ?></td>
                            <td><?= $d['device_id']; ?></td>
                            <td><?= $d['device_defect']; ?></td>
                            <td><?= $d['device_origin']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>