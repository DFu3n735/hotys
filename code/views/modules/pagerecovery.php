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
                                    <img class="border-radius-15" src="views/assets/imgs/theme/icons/2859747.jpg" alt="" />
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h2 class="mb-5">Recuperar cuenta</h2>
                                            </div>
                                            <form method="post">
                                                
                                                <?php $recovery = login::passwordRecovery(); ?>
                                                    
                                                <?php if(isset($_SESSION['code']) AND $_SESSION['code'] == 'screen1'){ ?>
                                              
                                                    <?php
                                                        if(!empty($recovery)){
                                                            if ($recovery['status']!='') {
                                                                ?>
                                                                <div class="alert alert-<?php echo $recovery['status']; ?>" role="alert">
                                                                    <?php echo $recovery['detail'];?>
                                                                </div>
                                                                
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                   
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Correo electrónico" name="emailRecovery" id="emailRecovery" required/>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-heading btn-block hover-up" name="sendcode">Enviar código</button>
                                                    </div>
                                                <?php }else if(isset($_SESSION['code']) AND $_SESSION['code'] == 'screen2'){ ?>
                                                    <?php
                                                        if(!empty($recovery)){
                                                            if ($recovery['status']!='') {
                                                                ?>
                                                                <div class="alert alert-<?php echo $recovery['status']; ?>" role="alert">
                                                                    <?php echo $recovery['detail'];?>
                                                                </div>
                                                                
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Ingrese el código" name="code" id="code"  required/>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-heading btn-block hover-up" name="entercode">Verificar</button>
                                                    </div>
                                                <?php }else if(isset($_SESSION['code']) AND $_SESSION['code'] == 'screen3'){ ?>
                                                    <?php
                                                        if(!empty($recovery)){
                                                            if ($recovery['status']=='change') {
                                                                ?>
                                                                <div class="alert alert-success" role="alert">
                                                                    <?php echo $recovery['detail'];?>
                                                                </div>
                                                                <script>
                                                                    setTimeout("location.href='pagelogin'", 0);
                                                                </script>
                                                                
                                                                <?php
                                                                session_unset();
                                                                session_destroy();
                                                            }elseif ($recovery['status']!='') {
                                                                ?>
                                                                <div class="alert alert-<?php echo $recovery['status']; ?>" role="alert">
                                                                    <?php echo $recovery['detail'];?>
                                                                </div>
                                                                
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    <div class="form-group">
                                                        <input required="" type="password" name="password" placeholder="Nueva Contraseña" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input required="" type="password" name="passwordconfirm" placeholder="Confirmar Contraseña" />
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-heading btn-block hover-up" name="changepassword">Cambiar Contraseña</button>
                                                    </div>
                                                <?php } ?>
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