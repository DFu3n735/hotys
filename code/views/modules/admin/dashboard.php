<?php
if(!isset($_SESSION["admin"])){
	header("location:pagelogin");
	exit();
}
?>
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="home" rel="nofollow"><i class="fi-rs-home mr-5"></i>Hogar</a>
                        <span></span>Pagina<span></span>Mi cuenta
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Tablero</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Clientes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>Empleados</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Productos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Ordenes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logout"><i class="fi-rs-sign-out mr-10"></i>Cerrar sesión</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content account dashboard-content pl-50">
                                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Hola Administrador
                                                        <?php
                                                            if (isset($_SESSION['usuario'])) {
                                                                echo $_SESSION['usuario'];
                                                            }
                                                        ?>!
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        Administra tus clientes, empleados, crea tus productos y ve las ordenes recividas recientemente en tu página web
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">Tus ordenes</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Pedido</th>
                                                                    <th>Fecha</th>
                                                                    <th>Estado</th>
                                                                    <th>Total</th>
                                                                    <th>Comportamiento</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#4562</td>
                                                                    <td>20 de septiembe 2021</td>
                                                                    <td>Procesando</td>
                                                                    <td>Bs 130 por 2 articulos</td>
                                                                    <td><a href="#" class="btn-small d-block">Vista</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#48481</td>
                                                                    <td>1 de octubre 2021</td>
                                                                    <td>Terminado</td>
                                                                    <td>Bs 200 por 4 articulos</td>
                                                                    <td><a href="#" class="btn-small d-block">Vista</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#584</td>
                                                                    <td>10 de octubre 2021</td>
                                                                    <td>Terminado</td>
                                                                    <td>Bs 50 por 1 articulo</td>
                                                                    <td><a href="#" class="btn-small d-block">Vista</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card mb-3 mb-lg-0">
                                                        <div class="card-header">
                                                            <h3 class="mb-0">Dirección de Envio</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <address>
                                                                Villavicensio<br />
                                                                y tunupa<br />
                                                                #6551
                                                            </address>
                                                            <p>Cochabamba</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Dirección de Envío</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <address>
                                                                Telefono: 70794891
                                                            </address>
                                                            <p>Cochabamba</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Detalles de la Cuenta</h5>
                                                </div>
                                                <div class="card-body">
                                                    <p>¿Ya tienes una cuenta?<a href="page-login.html">¡Inicie sesión!</a></p>
                                                    <form method="post" name="enq">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label>Primer nombre <span class="required">*</span></label>
                                                                <input required="" class="form-control" name="name" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Apellido <span class="required">*</span></label>
                                                                <input required="" class="form-control" name="phone" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Nombre para mostrar <span class="required">*</span></label>
                                                                <input required="" class="form-control" name="dname" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Dirección de correo electrónico <span class="required">*</span></label>
                                                                <input required="" class="form-control" name="email" type="email" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Contraseña actual<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="password" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Nueva contraseña<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="npassword" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>Confirmar Contraseña <span class="required">*</span></label>
                                                                <input required="" class="form-control" name="cpassword" type="password" />
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Guardar cambios</button>
                                                            </div>
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
                </div>
            </div>