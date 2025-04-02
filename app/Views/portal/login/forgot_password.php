<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<!-- Forgot Password Section -->
<section class="login spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>¿Olvidaste tu contraseña?</h3>
                    <form action="" method="post">
                        <div class="input__item">
                            <input type="email" name="email" placeholder="Email" required>
                            <span class="icon_mail"></span>
                        </div>
                        <button type="submit" class="site-btn">Enviar Instrucciones</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>