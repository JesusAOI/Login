<?php
    require "controller/controlador-login.php";    
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="vh-100 gradient-custom">
    <section >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 ">
                            <img src="img/icono.png" style="width: 80px; height: 70px;" alt="Description of Image">
                            <h2 class="fw-bold mb-2 text-uppercase text-center">Iniciar Sesión</h2>
                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                <label class="form-label text-left" >Email</label>
                                <input type="email" name="correo" class="form-control form-control-lg" />
                            </div>
                            <div data-mdb-input-init class="form-outline form-white mb-4 ">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" />
                                <!-- <a class="text-white-50" href="#!" id="recuperar">Forgot password?</a> -->
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-outline-light btn-lg px-5 text-center" name="btningresar" value="iniciar sesion">                            
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <form action="login.php" method="post">
                    <h2 class="tittle">Iniciar Sesión</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario:</h5>
                        <input type="text" class="input" name="usuario" id="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña:</h5>
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                <div class="view">
                    <div class="fas fa-eye verPassword" Onclick="vista()" id="password"></div>
                </div>

                <div class="text-center">
                    <a href="" class="font-italic isai5">Olvide mi contraseña</a>
                    <a href="" class="font-italic isai5">Registrase</a>
                </div>
                <input type="submit" class="btn btn-primary" name="btningresar" value="iniciar sesion">
            </form>
            <div id="message"></div>
        </div>
    </div>
</body>
</html> -->