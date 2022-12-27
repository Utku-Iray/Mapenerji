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
      Google Map Section
      ============================
      -->
<section class="map map-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="d-none">Ofisimiz</h3>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.8080544432596!2d30.716479031250213!3d36.871013007239405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aa30cade609%3A0xb6ca97764d1287!2zWWXFn2lsYmFow6dlLCAxNDQ4LiBTay4gTm86NywgMDcxNjAgTXVyYXRwYcWfYS9BbnRhbHlh!5e0!3m2!1str!2str!4v1671837403444!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--
      ============================
      Testimonials #5 Section
      ============================
      -->
<section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
    <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background" /></div>
    <div class="container">
        <div class="contact-panel contact-panel-2">
            <div class="row">
                <div class="col-12 col-lg-5 img-card-holder">
                    <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                        <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image" /></div>
                        <div class="card-content">
                            <div class="content-top">
                                <p>MAP Enerji ve Danışmanlık olarak doğru tarife ve fiyatları tercih etme süreçlerinde uzman desteği sağlıyor, lisans sahibi elektrik şirketlerinin sunduğu hizmetlerle ilgili ilişkilerinizi yönetiyoruz. </p><a href="iletisim.php"><i class="energia-arrow-right"></i>Ofisimiz</a>
                            </div>
                            <div class="content-bottom">
                                <ul class="list-unstyled contact-infos">
                                    <li class="contact-info"><i class="energia-phone-Icon"></i>
                                        <p>Telefon Numarası: <a href="tel:123-456-7890">(002) 01061245741</a></p>
                                    </li>
                                    <li class="contact-info"><i class="energia-location-Icon"></i>
                                        <p>Konum: <a href="mailto:info@mapenerji.com.tr">Muratpaşa / Antalya </a></p>
                                    </li>
                                    <li class="contact-info"><i class="energia-clock-Icon"></i>
                                        <p>pzrt - crts: 8:00 - 19:00 </p>
                                    </li>
                                </ul><a class="btn btn--white" href="hakkimizda.php">Hakkımızda <i class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="contact-card">
                        <div class="contact-body">
                            <h5 class="card-heading">İletişime Geçin</h5>
                            <!-- <p class="card-desc">We take great pride in everything that we do, control over products allows us to ensure our customers receive the best quality service.</p> -->
                            <form class="contactForm" method="post" action="assets/php/contact.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text" name="name" placeholder="İsim" required="" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text"  name="email" placeholder="E-mail" required="" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text" name="phone" placeholder="Telefon Numarası" required="" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text"  name="cözüm" placeholder="Çözüm Yazınız" required="" />
                                    </div>
                                    <!-- <div class="col-12 col-md-6">
                                        <select class="form-control" id="select-1">
                                            <option value="default">Çözüm Seçiniz</option>
                                            <option value="s1">Enerji IoT Platformu </option>
                                            <option value="s2">Tarife Danışmanlığı </option>
                                            <option value="s3">Elektrik tedarik danışmanlığı </option>
                                            <option value="s4">Fatura kontrol danışmanlığı </option>
                                            <option value="s5">Ag&og proje çizimi </option>
                                            <option value="s6">Kompanzasyon takibi</option>
                                            <option value="s7">Çatı ve arazi ges kurulumu </option>
                                            <option value="s8">Ges arazi satışı </option>
                                        </select>
                                    </div> -->
                                    <div class="col-12">
                                        <textarea class="form-control"  placeholder="Mesaj Yazınız" name="message" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn--secondary">Formu İlet <i class="energia-arrow-right"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End .contact-body -->
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .contact-panel-->
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="counters-holder">
                    <!-- Start .counter-->
                    <div class="counter counter-3">
                        <div class="counter-holder">
                            <div class="counter-num"> <span class="counting" data-counterup-nums="25" data-counterup-beginat="12">25</span></div>
                            <div class="counter-img">
                                <div class="bg-section"><img src="assets/images/counters/1.jpg" alt="image" /></div><i class="flaticon-020-factory"></i>
                            </div>
                        </div>
                        <div class="counter-desc">
                            <p>Years Of Experience In The Solar Industry</p>
                        </div>
                    </div>
                    <!-- End .counter-->
                </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1">
                <div class="heading heading-14">
                    <p class="heading-subtitle">Yorumlar</p>
                </div>
                <div class="testimonials-holder">
                    <div class="carousel owl-carousel testimonials-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800">
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>"Bir partner olarak Map Enerji ve Danışmanlık firması ile çalışmaktan son derece memnunuz. "</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>“Halen daha fikirlerimizi paylaşıp birlikte çözüm buluyorsak, bu iyi bir partnerlik demek!”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>“Merhabalar değerli Map Enerji ailesi! Bizim, hayatımız olan işimizi kolaylaştırmak adına yapılan bu
                                    çalışmalarınız için teşekkür ederim.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>“Map Enerji ailesi, Enerji tedariği konusunda tüm enerji firmalarından şirketimize en uygun ve en iyi fiyat
                                    tedariği ederek bizi doğru yönlendirdiği için teşekkür ederiz.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-thumbs">
                    <div class="testimonial-thumb active" data-hover="">
                        <div class="thumb-img"> <img src="assets/images/testimonial/1.jpg" alt="Testimonial Author" /></div>
                      
                    </div>
                    <div class="testimonial-thumb" data-hover="">
                        <div class="thumb-img"> <img src="assets/images/testimonial/2.jpg" alt="Testimonial Author" /></div>
                       
                    </div>
                    <div class="testimonial-thumb" data-hover="">
                        <div class="thumb-img"> <img src="assets/images/testimonial/3.jpg" alt="Testimonial Author" /></div>
                       
                    </div>
                    <div class="testimonial-thumb" data-hover="">
                        <div class="thumb-img"> <img src="assets/images/testimonial/2.jpg" alt="Testimonial Author" /></div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<?php include 'php/footer.php' ?>

</body>

</html>