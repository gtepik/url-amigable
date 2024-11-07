<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("location:inicio");
    exit();
    }
?>
<body class="d-flex justify-content-center align-items-center mt-5 p-3">
    <form action="login" method="post" class="w-25 p-4">
        <div class="input-group mt-3">
        <i class="bi bi-envelope-fill fs-3 text-white mx-1"></i>
            <input type="email" id="email-id" class="form-control" placeholder="Ingrese su email" name="email" value="">
        </div>
        <div class="input-group mt-3">
        <i class="bi bi-key-fill fs-3 text-white mx-1"></i>
            <input type="password" id="pass-id" class="form-control" placeholder="Ingrese su contraseña" name="pass" value="">
        </div>
        <div class="mt-5 c-button">
            <button type="button" id="btn-saludar" class="btn w-100 text-white fs-4">Ingresar</button>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <p class="">registro</p> 
            <a href="registro" class="text-white mx-3">registrarse</a>
        </div>
        
    </form>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>
</body>