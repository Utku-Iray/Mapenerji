<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
    <div class="bg-section"><img src="assets/images/background/3.jpg" alt="background" /></div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <!-- <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p> -->
                <h2 class="heading-title">İşletmenize Özel İndirimli Elektrik Teklifleri Map Enerji'den</h2>
                <p class="heading-desc">İşletmenizin ihtiyaç duyduğu güvenilir ve sürdürülebilir enerjiye en avantajlı fiyatlarla sahip olmak için indirimli elektrik tekliflerimizi keşfetmeye hazır mısınız? 
                </p>
                <p class="heading-desc">Siz de başvuru formumuzu doldurun, enerji tüketimlerinizi analiz ederek işletmenizin ihtiyaçlarına uygun teklifleri sizin için hemen hazırlayalım! 
                </p>
                <p class="heading-desc">Map Enerji ve Danışmanlık olarak, avantajlı tekliflerimiz, uzman kadromuz ve tüm hizmet kanallarımız ile işletmelerimizin her zaman yanındayız. 
                </p>
                <!-- <div class="advantages-list-holder">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>Reliabe and performance</li>
                                <li>Solar material financing</li>
                                <li>In-time manufacturing</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>50% more energy output</li>
                                <li>Built using ntype mono</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="contact-quote"> <img src="assets/images/icons/noteicon.png" alt="icon" />
                    <p>Bizimle İletişime Geçin: <a href="tel:+905423222616">0542 322 26 16</a></p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">Sizi Tanıyalım</h5>
                    <p class="card-desc">İndirimli Elektrik Teklifi Almak için Lütfen Formu Tam ve Eksiksiz Doldurunuz.  <br>
En kısa Sürede Enerji Danışmanlarımız Size Dönüş Sağlayacaktır.
</p>
                    <form class="contactForm" method="post" action="assets/php/contact.php">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">Adınız - Soyadınız</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="Adınız" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">Unvan</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="Başvurulan Pozison" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">E-Mail Adresiniz</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="E-Mail Adresiniz" required="" />
                            </div>
                         
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">Telefon Numarası</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="Başvurulan Pozison" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">Adres</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="İkamet Edilen Adres" required="" />
                            </div><div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">İl-İlçe</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="İkamet Edilen İl-İlçe" required="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">1 Yıllık Toplam Tüketim</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="1 yıllık Toplam Tüketim" required="" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="contact-usage">En son ödediğiniz elektrik faturasını yükleyiniz (Okunaklı olduğuna emin olun!)</label>
                                <input type="file" id="folder" webkitdirectory multiple />
                            </div>
                            <div class="col-12">
                                <button class="btn btn--secondary w-100">Formu Gönder <i class="energia-arrow-right"></i></button>
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
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>
<?php include 'php/footer.php' ?>
</body>

</html>