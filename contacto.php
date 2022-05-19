<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    if(isset( $_POST['correo'] )){
        $mail = new PHPMailer(TRUE);

        try {
        
            $mail->setFrom('ventas@carpainversiones.com', 'Media Cancha | Solicitud web');
            $mail->addAddress('ghmaselli@gmail.com');
            $mail->addAddress('lamediacancha@hotmail.com');
            $mail->addAddress('marco@disetec.com.gt');
            $mail->Subject = utf8_decode('Solicitud de información');
            $mail->IsHTML(true);
            $mail->Body = utf8_decode(
                '<body>     
                    <div style="margin-left: 25px;">
                        
                        <h2  style="color: rgb(54, 54, 54); margin: 0px; font-family: _\'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Nueva solicitud de información</h2>
                        <div  style="height: 1px; background-color: rgb(204,204,204);"></div>
                        <br>
                        <p style="font-size: 0.9em; margin:0px; color: rgb(128, 128, 128); font-family: \'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Nombre del solicitante: '. $_POST['nombre'] .'.</p>
                        <br>
                        <p style="font-size: 0.9em; margin:0px; color: rgb(128, 128, 128); font-family: \'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Teléfono: '. $_POST['telefono'] .'.</p>
                        <br>
                        <p style="font-size: 0.9em; margin:0px; color: rgb(128, 128, 128); font-family: \'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Correo electrónico: '. $_POST['correo'] .'</p>
                        <br>
                        <p style="font-size: 0.9em; margin:0px; color: rgb(128, 128, 128); font-family: \'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Consulta: '. $_POST['comentario'] . '.</p>
                        <br>
                        <p style="font-size: 0.8em; margin:0px; color: rgb(128, 128, 128); font-family: \'geogrotesque\',-apple-system,system-ui,BlinkMacSystemFont,\'Segoe UI\',Roboto,\'Helvetica Neue\',Arial,sans-serif;">Este es un correo generado automáticamente, no responder.</p>
                    </div>
                </body>'
            );
            $mail->isSMTP();
            $mail->Host = 'smtpout.asia.secureserver.net';
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = 'ssl';
            $mail->Username = 'gmaselli@disetec.com.gt';
            $mail->Password = 'Gmaselli2018';
            $mail->Port = 465;
            
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
             );

            $mail->send();
            
        }
        catch (Exception $e){
        }
        catch (\Exception $e){
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>La Media Cancha - Contacto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1000">
        <link  rel="icon" type="image/x-icon" href="img/logo.jpg" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans+Narrow|Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <script>
            function mostrar(){
                var x = document.getElementById("menu");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                } 
            }

        </script>
        <div id="desktop" style="background-color: #3c2415">
        <div style="width: 100%; margin:auto; text-align: center; background-color: #3c2415; padding: 0px;">
            <div class="row">
                    <div class="col-sm-1"></div>
                <div class="col-sm-10">
                        <div class="row">
                                <div class="col-sm-2 fuente"><br><br><a href="index.html"><h4 style="color: #fdfadb;">INICIO</h4></a>
                                    <div class="linea" style="background-color: #f7941e; width: 100%; margin:auto;"></div></div>
                                <div class="col-sm-2 fuente"><br><br><a href="index.html#menu2"><h4 style="color: #fdfadb;">NUESTRO MENÚ</h4></a><div class="linea" style="background-color: #f7941e; width: 100%; margin:auto;"></div></div>
                                <div class="col-sm-4" style="text-align: left;"><img src="img/banner.PNG" width="100%"></div>
                                <div class="col-sm-2 fuente"><br><br><a href="contacto.php"><h4 style="color: #fdfadb;">CONTÁCTENOS</h4></a><div class="linea" style="background-color: #f7941e; width: 100%; margin:auto;"></div></div>
                                <div class="col-sm-2"><br><br><a href="https://www.ubereats.com/es-GT/guatemala-city/food-delivery/la-media-cancha/ClKPJoEXSS-hIcwqEZyReA/"><h4 style="color: #fdfadb;">UBER EATS</h4></a><div class="linea" style="background-color: #f7941e; width: 100%; margin:auto;"></div></div>
                        </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        <div style="width: 100%; text-align: center; background-color: #3c342f;">
                <br>
        <h1 class="fuente" style="color:#fdfadb;">CONTÁCTENOS</h1>
        <br>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 55%; background-color: #3c2415;" >
                                    <img src="img/parrillada_sv.JPG" width="100%" >
                                </td>
                                <td style="width: 45%; background-color: #3c2415 ">
                                    <table style="width: 100%">
                                        <tr>
                                            <td style="width: 10%; color:#fdfadb; padding: 10px;">
                                            <td style="width: 80%; color:#fdfadb; padding: 10px;">
                                            <?php
                    if(isset( $_POST['correo'] )){
                    echo'<br> <div class="alert alert-success fuente" style="width:100%; margin: auto; font-size:15px;">
                            <strong>Información enviada!</strong><br> Pronto nos pondremos en contacto con usted.
                        </div> <br>';
                    }
                ?>
                <h2 class="fuente " style="margin-top: 10px;">Contáctenos</h2>
                <div class="linea" style="background-color: #f7941e;"></div>
                <p class="fuente" style="font-size: 15px; text-align: justify;">
                Si necesita información sobre nuestros servicios de catering, eventos o reservaciones, pude proporcionarnos sus datos y lo contactaremos a la brevedad posible.
                </p>
                <p class="fuente" style="font-size: 15px; text-align: justify;">
                    También pude comunicarse con nosotros al teléfono (+502) 2331 6463.
                </p>

                <br>
                <br>
                
                <form method="post">
                <br>
                    <input id="nombre" type="text" class="form-control fuente" name="nombre" placeholder="NOMBRE" style="font-size:15px; height:28px; width:85%; margin:auto;" require>
                    <br>                     
                    <input id="telefono" type="text" class="form-control fuente" name="telefono" placeholder="NÚMERO DE TELÉFONO" style="font-size:15px; height:28px; width:85%; margin:auto;" require>
                    <br>
                    <input id="correo" type="email" class="form-control fuente" name="correo" placeholder="CORREO ELECTRÓNICO" style="font-size:15px; height:28px; width:85%; margin:auto;" require>
                    <br>
                    <textarea rows="4" cols="12" id="correo"  class="form-control fuente" name="comentario" placeholder="CONSULTA" style="font-size:15px;  width:85%; margin:auto;" ></textarea>
                    <br>
                    <input type="submit" class="fuente grueso" value="Solicitar información" style="width: 85%; margin:auto; font-size:15px; height:28px; background-color:#fdfadb; color:#3c2415;">
                </form>
                <br>    
                                            </td>
                                            <td style="width: 10%; color:#fdfadb; padding: 10px;"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <br>
            </div>


            
        <div style="background-color: black;">
            <img src="img/final.jpg" width="100%" style="opacity: 0.2;">
        </div>
        <div style="width: 100%; position: absolute; margin-top: -18%; text-align: center;">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-4 fuente">
                                
                                <table style="width: 80%; margin: auto;">
                                    <tr>
                                        <td style="width: 50%;">
                                                <p class="fuente" style="font-size: 20px; color: #fdfadb;">Dirección</p>
                                                <p class="fuente" style="font-size: 13px; color: #fdfadb;">3 calle 4-71 Zona 9</p>
                                                <p class="fuente" style="font-size: 20px; color: #fdfadb;">Teléfono</p>
                                                <p class="fuente" style="font-size: 13px; color: #fdfadb;">(+502) 2331 6463</p>
                                            </td>
                                        <td style="width: 25%;" valign="top">
                                           <a href="https://www.waze.com/es/directions/guatemala/zona-9,-guatemala/la-media-cancha/176619666.1766065588.1324653.html"> <img src="img/waze.png" width="45px"></a>
                                        </td>
                                        <td style="width: 25%;" valign="top">
                                            <a href="https://www.google.com/maps/dir/14.587873,-90.5767517/la+media+cancha/@14.6037276,-90.5390154,15z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8589a3d7685d2a6f:0xa2820c3e52cc2814!2m2!1d-90.5223494!2d14.600741"><img src="img/maps.png" width="45px"></a>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                
                                
                        </div>
                        <div class="col-sm-4">
                                <p class="fuente" style="font-size: 20px; color: #fdfadb;">Horarios</p>
                                <p class="fuente" style="font-size: 13px; color: #fdfadb;">Martes a sábado de 12:00 - 16:00 y 18:30 - 22:00 </p>
                                <p class="fuente" style="font-size: 13px; color: #fdfadb;">Domingo de 12:00 - 16:00</p>
                                <p class="fuente" style="font-size: 13px; color: #fdfadb;">Lunes cerrado</p>
                        </div>
                        <div class="col-sm-4">
                                <p class="fuente" style="font-size: 20px; color: #fdfadb;">Siguenos en </p>
                                
                                <table style="width: 60%; margin: auto;">
                                    <tr>
                                        <td style="width: 33%;">
                                            <a href="https://www.facebook.com/lamedia89/?ref=page_internal"><img src="img/facebook.png" width="45px"></a>
                                        </td>
                                        <td style="width: 33%;">
                                            <a href="https://www.instagram.com/lamediacanchagt/?hl=es"><img src="img/instagram.png" width="45px"></a>
                                        </td>
                                        <td style="width: 33%;">
                                            <a href="https://www.tripadvisor.com/Restaurant_Review-g292006-d3222392-Reviews-La_Media_Cancha-Guatemala_City_Guatemala_Department.html"><img src="img/trip.png" width="45px"></a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
            <br>
            <br>
            <p class="fuente" style="font-size: 12px; color: #fdfadb;">Powered by DISETEC</p>
        </div>
    </div>
        <div id="phone">
            <div style="height: 135px; background-color: #3c2415;">
                <table style="width: 100%;">
                    <tr>
                    <td style="width: 80%; text-align: center;"><p style="color:#fdfadb; font-size: 50px; margin-top: 30px; font-weight: 600;" class="fuente">CONTÁCTENOS</p></td>
                    <td style="width: 20%; text-align: center; padding-top: 18px;"><img src="img/menu.png" height="100px" width="100px" onclick="mostrar()"></td>
                    </tr>
                </table>
                <div id="menu" style="position: absolute; background-color: #3c2415; width: 65%; margin-left: 35%; margin-top: 1%; z-index: 150; display: none;">
                    <a href="index.html"><p class="fuente grueso" style="font-size: 45px; padding: 10px; color: #fdfadb; margin-left: 12%;">INICIO</p></a>
                    <div class="linea" style="background-color: #f7941e; width: 76%; margin:auto;"></div>
                    <a href="index.html#menu"><p class="fuente grueso" style="font-size: 45px; padding: 10px; color: #fdfadb; margin-left: 12%;">NUESTRO MENÚ</p></a>
                    <a href="entradas.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">ENTRADAS</p></a>
                    <a href="compartir.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">PARA COMPARTIR</p></a>
                    <a href="parrilla.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">DE NUESTRA PARRILLA</p></a>
                        <a href="finos.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">CORTES FINOS</p></a>
                            <a href="pasta.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">DE NUESTRA COCINA</p></a>
                                <a href="pizza.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">PIZZAS</p></a>
                                    <a href="postre.html"><p class="fuente grueso" style="font-size: 38px; padding: 10px; color: #fdfadb; margin-left: 20%;">POSTRES Y BEBIDAS</p></a>
                    <div class="linea" style="background-color: #f7941e; width: 76%; margin:auto;"></div>
                    <a href="https://www.ubereats.com/es-GT/guatemala-city/food-delivery/la-media-cancha/ClKPJoEXSS-hIcwqEZyReA/"><p class="fuente grueso" style="font-size: 45px; padding: 10px; color: #fdfadb; margin-left: 12%;">UBER EATS</p></a>
                    <div class="linea" style="background-color: #f7941e; width: 76%; margin:auto;"></div>
                    <a href="contacto.php"><p class="fuente grueso" style="font-size: 45px; padding: 10px; color: #fdfadb; margin-left: 12%;">CONTÁCTENOS</p></a>
                </div>
            </div>
            <div>
                <div style="position: absolute; width:100%; margin-left: 0%; margin-top: 0%; background-color:white; text-align:center;">
                <br>
                <a href="index.html"><img src="img/logo.jpg" width="70%"></a>
                <br>
                <br>
                </div>
                <img src="img/parrilla_v.jpg" width="100%">
            </div>
            <div style="background-color: #3c2415; padding: 7%; color: #fdfadb; text-align: center;">
                <?php
                    if(isset( $_POST['correo'] )){
                    echo'<br> <div class="alert alert-success fuente" style="width:85%; margin: auto; font-size:40px;">
                            <strong>Información enviada!</strong><br> Pronto nos pondremos en contacto con usted.
                        </div> <br>';
                    }
                ?>
                <h1 class="fuente grueso" style="font-size: 40px; margin-top: 10px;">Contáctenos</h1>
                <div class="linea" style="background-color: #f7941e;"></div>
                <p class="fuente" style="font-size: 35px; text-align: justify;">
                Si necesita información sobre nuestros servicios de catering, eventos o reservaciones, pude proporcionarnos sus datos y lo contactaremos a la brevedad posible.
                </p>
                <p class="fuente" style="font-size: 35px; text-align: justify;">
                    También pude comunicarse con nosotros al teléfono (+502) 2331 6463.
                </p>

                <br>
                <br>
                
                <form method="post">
                <br>
                    <input id="nombre" type="text" class="form-control fuente" name="nombre" placeholder="NOMBRE" style="font-size:40px; height:75px; width:85%; margin:auto;" require>
                    <br>                     
                    <input id="telefono" type="text" class="form-control fuente" name="telefono" placeholder="NÚMERO DE TELÉFONO" style="font-size:40px; height:75px; width:85%; margin:auto;" require>
                    <br>
                    <input id="correo" type="email" class="form-control fuente" name="correo" placeholder="CORREO ELECTRÓNICO" style="font-size:40px; height:75px; width:85%; margin:auto;" require>
                    <br>
                    <textarea rows="4" cols="12" id="correo"  class="form-control fuente" name="comentario" placeholder="CONSULTA" style="font-size:40px;  width:85%; margin:auto;" ></textarea>
                    <br>
                    <input type="submit" class="fuente grueso" value="Solicitar información" style="width: 85%; margin:auto; font-size:40px; height:75px; background-color:#fdfadb; color:#3c2415;">
                </form>
                <br>
                <br>
                <br>
                <div style="width: 100%; text-align: center;">
                    <p class="fuente" style="font-size: 50px;">Dirección</p>
                    <p class="fuente" style="font-size: 35px;">13 calle 4-71 Zona 9</p>
                    <table style="width: 50%; margin: auto;">
                        <tr>
                            <td style="width: 50%;">
                               <a href="https://www.waze.com/es/directions/guatemala/zona-9,-guatemala/la-media-cancha/176619666.1766065588.1324653.html"> <img src="img/waze.png"></a>
                            </td>
                            <td style="width: 50%;">
                                <a href="https://www.google.com/maps/dir/14.587873,-90.5767517/la+media+cancha/@14.6037276,-90.5390154,15z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8589a3d7685d2a6f:0xa2820c3e52cc2814!2m2!1d-90.5223494!2d14.600741"><img src="img/maps.png"></a>
                            </td>
                        </tr>
                    </table>
                    <br>
                    
                    <div class="linea" style="background-color: #f7941e; width: 45%; margin:auto;"></div>
                    <br>
                    <br>
                    <p class="fuente" style="font-size: 50px;">Teléfono</p>
                    <p class="fuente" style="font-size: 35px;">(+502) 2331 6463</p>
                    <div class="linea" style="background-color: #f7941e; width: 45%; margin:auto;"></div>
                    <br>
                    <br>
                    <p class="fuente" style="font-size: 50px;">Horarios</p>
                    <p class="fuente" style="font-size: 35px;">Martes a sábado de 12:00 - 16:00 y 18:30 - 22:00 </p>
                    <p class="fuente" style="font-size: 35px;">Domingo de 12:00 - 16:00</p>
                    <p class="fuente" style="font-size: 35px;">Lunes cerrado</p>
                    <div class="linea" style="background-color: #f7941e; width: 45%; margin:auto;"></div>
                    <br>
                    <br>
                    <p class="fuente" style="font-size: 50px;">Siguenos en</p>
                    <br>
                    <table style="width: 60%; margin: auto;">
                        <tr>
                            <td style="width: 33%;">
                                <a href="https://www.facebook.com/lamedia89/?ref=page_internal"><img src="img/facebook.png"></a>
                            </td>
                            <td style="width: 33%;">
                                <a href="https://www.instagram.com/lamediacanchagt/?hl=es"><img src="img/instagram.png"></a>
                            </td>
                            <td style="width: 33%;">
                                <a href="https://www.tripadvisor.com/Restaurant_Review-g292006-d3222392-Reviews-La_Media_Cancha-Guatemala_City_Guatemala_Department.html"><img src="img/trip.png"></a>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <p class="fuente" style="font-size: 35px;">Powered by DISETEC</p>
                </div>
                
            </div>
            
        </div>
    </body>
</html>
