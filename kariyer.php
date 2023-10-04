<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>

<div class="module-content module-search-warp">
    <div class="pos-vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <form class="form-search">
                        <input class="form-control" type="text" placeholder="type words then enter" />
                        <button></button>
                    </form>
                    <!-- End .form-search -->
                </div>
                <!-- End .col-lg-8 -->
            </div>
            <!--  End .row-->
        </div>
        <!--  End .container-->
    </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    <!-- End .module-cancel-->
</div>
<!--
      ============================
      PageTitle #14 Section
      ============================
      -->
<section class="page-title page-title-14" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
        <div class="bg-section"><img src="assets/images/page-titles/18.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="title">
                        <h1 class="title-heading">Kariyer</h1>
                        <!-- End .breadcrumb-->
                    </div>
                    <!-- End .title-->
                </div>
                <!-- End .col-12-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </div>
</section>
<!-- End #page-title-->
<!--
      ============================
      Contact #4 Section
      ============================
      -->
<section class="contact contact-4" id="contact-4">
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-6">
                <img src="assets/images/mapenerji/kariyer.jpg" width="100%" alt="">

            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">Sizi Tanıyalım</h5>
                    <p class="card-desc">İnsan kaynaklarımız formunuzu inceleyip size ön bilgi olarak mail atacaktır.</p>
                    <form class="contactForm" method="post" action="assets/php/contact.php">
                        <div class="mb-20">
                            <div class="row">
                                <div class="mb-20">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="contact-first-name">Adınız</label>
                                            <input class="form-control" type="text" id="contact-first-name" name="contact-first-name" placeholder="Adınız" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="contact-last-name">Soyadınız</label>
                                            <input class="form-control" type="text" id="contact-last-name" name="contact-last-name" placeholder="Soyadınız" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="contact-phone">Telefon Numaranız</label>
                                            <input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="Telefon Numaranız" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="contact-email">E-mail</label>
                                            <input class="form-control" type="email" id="contact-email" name="contact-email" placeholder="E-mail" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="contact-email">İkamet Edilen İl</label>
                                            <input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="İkamet Edilen İl" required="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-usage">Dosya Seçiniz</label>
                                            <input type="file" id="folder"  multiple />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="contact-projects">Mesajınız </label>
                                    <textarea class="form-control" id="contact-projects" placeholder="Add other data" name="contact-projects" cols="30" rows="10"> </textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            
                        </div>
                        <div>
                            
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn--secondary w-100">Formu Gönderin<i class="energia-arrow-right"></i></button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End .contact-body -->
            </div>
        </div>
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>

<?php include 'php/footer.php' ?>

</body>

</html>