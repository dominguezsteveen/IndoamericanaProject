<footer id="footer" class="dark">
    <div class="container">
        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-3">

                    <div class="widget clearfix">
                        <h4 class="mb-2" style="color: #EDED76">¡Visítanos!</h4>
                        <div class="line py-0 mt-0 mb-3"></div>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8153664780184!2d-74.07156068523796!3d4.627006396638736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a29dda71c75%3A0x67c2e78b2cdefef0!2sCorporaci%C3%B3n%20Educativa%20Indoamericana!5e0!3m2!1ses!2sco!4v1622055587535!5m2!1ses!2sco"
                                            width="600" height="400" allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-lg-3">

                    <div class="widget clearfix">
                        <h4 class="mb-2" style="color: #EDED76">Dirección</h4>
                        <div class="line py-0 mt-0 mb-3"></div>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col">
                                        <div class="entry-title">
                                            <h4 style="font-size: 13px; font-weight: normal">-Sede Principal: Calle 39
                                                N° 14-62
                                                Bogotá-Colombia.
                                            </h4>
                                        </div>
                                        <div class="entry-title mt-4">
                                            <h4 style="font-size: 13px; font-weight: normal">- Sede Hangar : Calle 13 #
                                                68D
                                                70
                                                Bogotá - Colombia.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="widget clearfix mt-3">
                        <h4 class="mb-2" style="color: #EDED76">Teléfono</h4>
                        <div class="line py-0 mt-0 mb-3"></div>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                            <div class="entry col-12">
                                <div class="grid-inner row">
                                    <div class="col">
                                        <div class="entry-title">
                                            <h4 style="font-size: 13px; font-weight: normal">(57) (601) 4324350
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="widget clearfix mt-3">
                        <h4 class="mb-2" style="color: #EDED76">PQR's</h4>
                        <div class="line py-0 mt-0 mb-2"></div>

                        <button class="button button-3d button-mini button-rounded button-blue">Ingresar PQR</button>
                        <button class="button button-3d button-mini button-rounded button-blue">Consultar PQR</button>
                        <div class="line py-0 mt-0 mb-2"></div>

                        <button class="button button-3d button-mini button-rounded button-blue">Ingreso Proveedores</button>
                        <div class="line py-0 mt-0 mb-2"></div>

                        <button class="button button-3d button-mini button-rounded button-blue">Política de tratamiento de datos</button>

                    </div>

                </div>
                <div class="col-sm-6 col-lg-3">

                    <div class="widget clearfix">
                        <h4 class="mb-2" style="color: #EDED76">Noticias CEI</h4>
                        <div class="line py-0 mt-0 mb-3"></div>
                        <div class="posts-sm row col-mb-30" id="post-list-footer">
                            @foreach ($news as $noti)
                                <div class="entry col-12">
                                    <div class="grid-inner row">
                                        <div class="col">
                                            <div class="entry-title">
                                                <h4><a href="{{ $noti->urlRedirect }}"
                                                        style="color: #7ECDDD; font-size: 12px">{{ $noti->titulo }}</a>
                                                </h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li style="font-size: 12px">{{ $noti->fecha_public }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="widget quick-contact-widget form-widget clearfix">

                        <h4 style="color: #EDED76">Send Message</h4>

                        <div class="form-result"></div>

                        <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post"
                            class="quick-contact-form mb-0">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="input-group mx-auto">
                                <div class="input-group-text"><i class="icon-user"></i></div>
                                <input type="text" class="required form-control" id="quick-contact-form-name"
                                    name="quick-contact-form-name" value="" placeholder="Full Name" />
                            </div>
                            <div class="input-group mx-auto">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                <input type="text" class="required form-control email" id="quick-contact-form-email"
                                    name="quick-contact-form-email" value="" placeholder="Email Address" />
                            </div>
                            <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message"
                                name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                            <input type="text" class="d-none" id="quick-contact-form-botcheck"
                                name="quick-contact-form-botcheck" value="" />
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                                class="btn btn-primary m-0" value="submit">Send Email</button>

                        </form>

                    </div>

                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->
    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="py-3">
        <div style="width: 50%; margin: auto; text-align: center">

            <div class="w-1/2 text-center mr-3" style="display: inline-block">
                Copyrights &copy; Corporación Educativa Indoamericana {{ date('Y') }}.
            </div>
            <div class="w-1/3" style="display: inline-block; height: fit-content;">
                <a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="#" class="social-icon si-small si-rounded topmargin-sm si-instagram">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>

            </div>

        </div>
    </div><!-- #copyrights end -->

</footer>
