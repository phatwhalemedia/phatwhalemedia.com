<?php
//PHPMailer classes
require './includes/phpmailer/src/PHPMailer.php';
require './includes/phpmailer/src/SMTP.php';
require './includes/phpmailer/src/Exception.php';
//Mail Script
require './mail/sendmail.php';
//Title Name
define ('PAGE_TITLE','Contacto');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="publicidad, multimedia, SEO, graphic design, fotografia, diseño web, marca, advertising, audio, video">
    <meta name="description" content="Servicios de publicidad impresa y digital en Tijuana. Phat Whale Media se dedica a la producción de contenidos multimedia y estrategia de marca para negocios.">
    <meta name="author" content="Francisco Cota, Phat Whale Media">
    <title><?= PAGE_TITLE ?> </title>
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a252fe7140.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./jquery/jquery.validation.js"></script>
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="pt-3 container" id="contactomain">
            <div class="row">
                <div class="offset-2 col-8">
                    <h1>Contacto</h1>
                    <p class="text-justify">&#191;Quieres conocer mas detalles sobre los servicios&#63; &#191;Necesitas una cotizaci&#243;n&#63; Manda tu mensaje y se te atendera en la brevedad.</p>
                </div>
                <div class="offset-2 col-8">
                    <form method="POST">
                    <label for="fname"><strong>Nombre<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <input class="form-control col-4 mr-2" type="text" name="fname" id="fname")>
                    <small id="smlnme"></small></div>
                    <label for="lname"><strong>Apellido<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline">
                    <input class="form-control col-4 mr-2" type="text" name="lname" id="lname">
                    <small id="smllnm"></small></div>
                    <label class="mr-2 pt-2" for="phone"><strong>Tel&#233;fono<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <select class="custom-select mr-2" name="region">
                    <option value= "+1"> E.E.U.U. (+1)</option>
                    <option value="+52" selected> M&#233;xico (+52)</option>
                    </select>
                    <input class="form-control col-4 mr-2" type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" name="phone" id="phone">
                    <small id="smlphn"></small></div>
                    <label for="email"><strong>Correo Electr&#243;nico<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <input class="form-control col-6 mr-2" type="email" name="email" id="eml">
                    <small id="smleml"></small></div>
                    <div class="form-group"><label for="body"><strong>Tu mensaje</strong></label><textarea class="form-control" id="body" name="body" cols="30" rows="5"></textarea></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="form-group"><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Enviar" disabled></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
