<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="pembungkus">
                <div class="judul">
                    <h1 class="mt-5">Welcome to MonitorDev!</h1>
                    <p>Aplikasi Web Monitoring terbaik di Indonesia.</p>
                    <button>Register Now</button>
                </div>
                <div>
                    <img class="gambar" src="\img\gambar.jpg" alt="Gambar">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>