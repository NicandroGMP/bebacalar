<?php include_once("head.php")?>
<div class="content__header_contacto">
<?php include_once("includes/nav.php")?>
</div>

 <!------------------------------ content logAzureContent------------------------------------>
 <div class="azure__logcontent" >
        <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 azure_logo_contacto justify-content-center d-flex text-white align-items-center">
                <h4 class="fw-bolder text_logo">CONTACTO</h4>
            </div>
            <div class="col-xl-6">
                <div class="d-flex justify-content-end mt-4">
                    <h6 class="d-inline mx-3 mt-2 fw-bold" >COMPARTIR</h6>
                        <a target="_blank" href="#" class="text-decoration-none">
                            <img width="30" src="public/assets/iconos-svgs/facebook-azul.svg" alt="facebook bebacalar">
                        </a>
                        <a target="_blank" href="#" class="text-decoration-none mx-2">
                            <img width="30" src="public/assets/iconos-svgs/logotipo-de-instagram-azul.svg" alt="instagram bebacalar">
                        </a>
                        <a target="_blank" href="#" class="text-decoration-none">
                            <img width="30" src="public/assets/iconos-svgs/twitter-icon-azul.svg" alt="twitter bebacalar">
                        </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!------------------------------ end content logAzure Content ------------------------------------>

 <!------------------------------ content content publish ------------------------------------>
 <div class="content_publish mt-5">
        <div class="container-fluid pt-5">
        <div class="row ">
            <div class="col-xl-6">
<div class="cont__form_contact">
    <form id="contact-form" method="POST" name="info">
        <div class="form-group cont_input">
                <input type="text" id="FNAME" name="FNAME" class="form-control rounded-0" required placeholder="NOMBRES">
        </div>
        <div class="form-group">
                <input type="email" id="EMAIL" name="EMAIL" class="form-control rounded-0" required placeholder="EMAIL">
        </div>
        <div class="form-group">
                <input type="tel" id="PHONE" name="PHONE" class="form-control rounded-0" required placeholder="TELÉFONO">
        </div>
        <textarea class="message fw-bold border-0 w-100  rounded-0 mb-2 form-control" id="MESSAGE" name="MESSAGE" cols="30" rows="3" placeholder="MENSAJE"></textarea>
        <button class="btn w-100 text-uppercase text-white g-recaptcha mt-2" 
                                data-sitekey="6Ld7_bMbAAAAAPtqGx1JC7B_-k8815xML6GCyiZh" 
                                data-callback="onSubmitForm" 
                                data-action="submit"><span id="alert-enviando" class="">Enviar</span></button>
    </form>

</div>
            </div>
            <div class="col-xl-6 description_depto align-items-start justify-content-center d-flex flex-column">

                <h3 class="title fs-3">¿DUDAS O COMENTARIOS?</h3>
                <p class="lh-sm mb-5">Ponte en contacto con nosotros y te responderemos a la brevedad</p>
                <ul class=" mt-4 mb-1 fa-ul d-flex flex-column align-items-start me-4">
                                        <li class="small mb-1 fs-5"><span class="fa-li"><i class="fas fa-phone icons_contact"></i></span> +52 983 752 0735</li>
                            </ul>
                <h4 class="title fs-5 fw-light">HORARIO LABORAL:</h4>
                <ul class="mb-0 fa-ul d-flex flex-column align-items-start me-4">
                <li class="small mb-1 fs-5"><span class="fa-li"><i class="far fa-clock icons_contact"></i></span>Lunes a Viernes <br> de 9:00 a 18:00</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17979.012629913483!2d-88.40161758302558!3d18.680959140321043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5bb13e302c19f9%3A0x11cedc7f2bd0e608!2sBacalar%2C%20Q.R.!5e0!3m2!1ses!2smx!4v1628285933310!5m2!1ses!2smx" width="100%" height="400" style="border:0;margin-top:50px;margin-bottom:-55px;" allowfullscreen="" loading="lazy"></iframe>

    <!------------------------------ end content publish ------------------------------------>

<?php include_once("includes/footer.php")?>

<?php include_once("foot.php")?>