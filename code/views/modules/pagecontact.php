
<?php include"views/modules/header.php"; ?>
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Hogar</a>
                        <span></span> Paginas <span></span>Contacto
                    </div>
                </div>
            </div>
            <div class="page-content pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 m-auto">
                            <section class="mb-50">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="contact-from-area padding-20-row-col">
                                            <h5 class="text-brand mb-10">Formulario de contacto</h5>
                                            <h2 class="mb-10">Escríbanos</h2>
                                            <p class="text-muted mb-30 font-sm">Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados </p>
                                            <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-style mb-20">
                                                            <input name="name" placeholder="Primer nombre" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-style mb-20">
                                                            <input name="email" placeholder="Tu correo electrónico" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-style mb-20">
                                                            <input name="telephone" placeholder="Su teléfono" type="tel" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-style mb-20">
                                                            <input name="subject" placeholder="Tema" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="textarea-style mb-30">
                                                            <textarea name="message" placeholder="Mensaje"></textarea>
                                                        </div>
                                                        <button class="submit submit-auto-width" type="submit">Enviar Mensaje</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 pl-50 d-lg-block d-none">
                                        <img class="border-radius-15 mt-50" src="assets/imgs/theme/1.png" alt="" />
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        <?php include"views/modules/footer.php"; ?>