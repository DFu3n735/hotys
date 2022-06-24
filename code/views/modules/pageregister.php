<?php
if(isset($_SESSION["cliente"])){
	header("location:pageaccount");
	exit();
}
?>


<?php include"views/modules/header.php"; ?>
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Hogar</a>
                        <span></span>Paginas<span></span>Registro
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5">Crea una cuenta</h1>
                                                <p class="mb-30">¿Ya tienes una cuenta? <a href="pagelogin">Acceso</a></p>
                                            </div>
                                            <form method="post">
                                                <?php
                                                    $registro = login::registroController();
                                         
                                                    if(!empty($registro)){
                                                        if ($registro['status']!='') {
                                                            ?>
                                                            <div class="alert alert-<?php echo $registro['status'];?>" role="alert">
                                                                <?php echo $registro['detail'];?>
                                                            </div>
                                                            <?php if ($registro['status']=='success') {?>
                                                            <script>
                                                                setTimeout("location.href='pagelogin'", 0);
                                                            </script>
                                                            <?php } ?>

                                                            <?php
                                                        }
                                                    }

                                                ?>

                                                <div class="form-group">
                                                    <input type="text" required="" name="username" placeholder="Nombre de usuario" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="" name="email" placeholder="Correo electrónico" />
                                                </div>
                                                <div class="form-group">
                                                    <input required="" type="password" name="password" placeholder="Contraseña" />
                                                </div>
                                                <div class="form-group">
                                                    <input required="" type="password" name="passwordconfirm" placeholder="Confirmar Contraseña" />
                                                </div>
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                                                            <label class="form-check-label" for="exampleCheckbox12"><span>Estoy de acuerdo con los términos y la política.</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-30">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Enviar y Registrarse</button>
                                                </div>
                                                <p class="font-xs text-muted"><strong>Nota:</strong>Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descritos en nuestra política de privacidad.</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-30 d-none d-lg-block">
                                    <div class="card-login mt-115">
                                        <a href="#" class="social-login facebook-login">
                                            <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                            <span>Continuar con Facebook</span>
                                        </a>
                                        <a href="#" class="social-login google-login">
                                            <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                            <span>Continuar con Google</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include"views/modules/footer.php"; ?>