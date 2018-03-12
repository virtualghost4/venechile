<?php
    include 'partials/accessheader.php';
?>

 
        <div class="main-content bg-color">
            <div class="container">
                <div class="user-account text-center" style="">
                    <div class="account-content">
                        <div class="logo">
                            <a href="index.html"><img class="img-fluid" src="images/logo.png" alt="Logo"></a>
                        </div>
                        <h1>Sign In</h1>
                        <form action="#" class="tr-form" method="post" id="accessForm" onsubmit="return validarIngreso">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="emailInput" required="required" id="emailInput">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="passwordInput" required="required" id="passwordInput">
                            </div> 
                            <?php

                                $ingreso = new AccessController();
                                $ingreso -> access();
                                
                            ?>
                            <input type="submit" class="btn btn-primary" value="Ingresar">
                            <div class="forgot-password">
                                <a href="#">Olvidó su contraseña</a>
                            </div>
                        </form>                        
                    </div><!-- /.account-content -->                       
                </div><!-- /.user-account  -->                  
            </div><!-- /.container -->         
        </div><!-- /.main-content -->

       