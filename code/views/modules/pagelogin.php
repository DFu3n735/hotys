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
                        <span></span>Paginas<span></span>Acceso
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 pr-30 d-none d-lg-block">
                                    <img class="border-radius-15" src="views/assets/imgs/theme/icons/3094352.jpg" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5">Acceso</h1>
                                                <p class="mb-30">¿No tienes una cuenta? <a href="pageregister">Crea aqui</a></p>
                                            </div>
                                            <form method="post">
                                                <?php
                                                    $ingreso = login::ingresoController();
                                                    if(!empty($ingreso)){
                                                        if ($ingreso['status']!='admin') {
                                                            ?>
                                                            <div class="alert alert-<?php echo $ingreso['status']; ?>" role="alert">
                                                                <?php echo $ingreso['detail'];?>
                                                            </div>

                                                            <?php if ($ingreso['status']=='success') {?>
                                                            <script>
                                                                setTimeout("location.href='pageaccount'", 0);
                                                            </script>
                                                            <?php } ?>

                                                        <?php
                                                        }
                                                        elseif ($ingreso['status']=='admin') {
                                                            ?>
                                                            <div class="alert alert-success" role="alert">
                                                                <?php echo $ingreso['detail']; ?>
                                                            </div>
                                                            <script>
                                                                setTimeout("location.href='dashboard'", 0);
                                                            </script>
                                                            <?php 
                                                        }

                                                    }
                                                    
                                                ?>
                                                <div class="form-group">
                                                    <input type="email" placeholder="Correo electrónico" name="emailIngreso" id="emailIngreso" required/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Tu contraseña" name="passwordIngreso" id="passwordIngreso" required/>
                                                </div>
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                            <label class="form-check-label" for="exampleCheckbox1"><span>Recuérdame</span></label>
                                                        </div>
                                                    </div>
                                                    <a class="text-muted" href="pagerecovery">¿Se te olvidó tu contraseña?</a>
                                                </div>

                                                
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Iniciar sesión</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include"views/modules/footer.php"; ?>