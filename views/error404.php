<?php
if (isset($_SESSION['usuario'])) {
    header("location:login");
    exit();
    }
?>
<div class="container mt-5">
    <div class="row mt-5 justify-content-center text-center bg-card">
    <div class="col py-5">
        <h1 class="text-danger display-3">error 404</h1>
        <p class="lead text-white fs-3"> pagina no localizada</p>
        <a class="btn btn-outline-primary" href="inicio">click para volver al inicio </a>
    </div>
    </div>
</div>
