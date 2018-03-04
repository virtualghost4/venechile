<?php
include 'partials/navbar.php';
?>

        <div class="tr-breadcrumb text-center bg-image parallax" style="background-image: url(images/bg/inner-banner.png);">
            <div class="container">
                <div class="page-title">
                    <h1>Quédate con nosotros</h1>
                    <h2>Contáctanos</h2>
                </div>
            </div><!-- /.container -->
        </div><!-- /.tr-breadcrumb -->
        
        <div class="main-content bg-color">
            <div class="tr-map">
                <div class="container">
                <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key= AIzaSyBs0SPEtuj2oWb6gSnUrPl7FSOnW9tLRT4 
                    &q=TRASLAVIÑA 1041, SAN FELIPE
                    &maptype=satellite" allowfullscreen>
                </iframe>
                </div><!-- /.container -->
            </div><!-- /.tr-map --> 

            <div class="tr-contact">
                <div class="container">
                    <div class="form-content section-bg-white">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <h3>Información General</h3>
                                    <div class="media">
                                        <div class="icon mr-5">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <span>+56 34 2 233175</span>
                                        </div>
                                    </div><!-- /.media -->

                                    <div class="media">
                                        <div class="icon mr-5">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <span><a href="#">contacto@venechile.cl</a></span>
                                        </div>
                                    </div><!-- /.media -->

                                    <div class="tr-address">
                                        <span>Casa Matriz</span>
                                        <div class="media">
                                            <div class="icon mr-5">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <address>Traslaviña 1041, San Felipe</address>
                                            </div>
                                        </div><!-- /.media -->
                                    </div>

                                </div><!-- /.contact-info -->
                            </div>
                            <div class="col-md-8 col-lg-7 offset-lg-1">
                                <div class="contact-form">
                                    <h3>Envíanos un mensaje</h3>
                                    <form class="tr-form" name="contact-form" method="post" action="#">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                                    <input type="text" class="form-control" required="required" placeholder="Tu Nombre">
                                                </div>                                         
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                    <input type="email" class="form-control" required="required" placeholder="Email">
                                                </div> 
                                            </div>  
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="input-group-addon"><i class="fa fa-comment" aria-hidden="true"></i></div>
                                                    <textarea name="message" class="form-control" required="required" rows="5" placeholder="Mensaje"></textarea>
                                                </div> 
                                                <input type="submit" class="btn btn-primary text-center" value="Enviar Mensaje">
                                            </div>          
                                        </div><!-- /.row -->
                                    </form>                                      
                                </div><!-- /.contact-form -->                                
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.form-content -->
                </div><!-- /.container -->
            </div><!-- /.tr-contact -->
        </div><!-- /.main-content -->
<?php
    include 'partials/footer.php';
    ?>