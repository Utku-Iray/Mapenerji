<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
//Form'dan Bütün Değerler Post Methodu ile Çekiliyor
$name = trim(strip_tags($_POST['name']));
$position = trim(strip_tags($_POST['position']));
$email = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));
$adress = trim(strip_tags($_POST['adress']));
$ililce = trim(strip_tags($_POST['ililce']));
$tuketim = trim(strip_tags($_POST['tuketim']));

//Form'dan Bütün Değerler Post Methodu ile Çekiliyor Tamamlandı


if($name and $phone){ //Form'dan bütün değerler geliyorsa mail gönderme işlemini başlatıyoruz.

    $Mesaj = "
    İsim soyisim: $name<br>
    Pozisyon: $position<br>
    E_posta Adresi: $email <br>
    Telefon : $phone <br>
    Adress : $adress <br>
    İl_İlçe: $ililce <br>
    Toplam_Tüketim: $tuketim <br>
    Bu mail: https://mapenerji.com.tr/ adresinden gelmiştir.
    ";

    //Php Smtp Mailler Sınıfını Sayfaya Dahil Ediyoruz
    include ('class.phpmailer.php');
    include ('class.smtp.php');
    //Php Smtp Mailler Sınıfını Sayfaya Dahil Ediyoruz Tamamlandı

    //Mail Bağlantı Ayarları 
    //Mail Hangi Hesaptan Gönderilecek ise onun bilgilerini yazın.
    $MailSmtpHost = "srvc55.turhost.com";
    $MailUserName = "utah@alondanbilisim.com";
    $MailPassword = "[4I#Pn+#IWEC";
    //Mail Bağlantı Ayarları Tamamlandı

    //Doldurulan Form Mail Olarak Kime Gidecek?
    $MailKimeGidecek = "info@mapenerji.com.tr";
    $MesajKonusu ="Map Enerji İletişim İletişim Formu";
    //Doldurulan Form Mail Olarak Kime Gidecek Tamamlandı
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $MailSmtpHost; //Smtp Host
    $mail->SMTPSecure = 'tls';  //yada tls
    $mail->Port = 587;  //SSL kullanacaksanız portu 465 olarak değiştiriniz - TLS Portu 587
    $mail->Username = $MailUserName; //Smtp Kullanıcı Adı
    $mail->Password = $MailPassword; //Smtp Parola
    $mail->SetFrom($mail->Username, ' Map Enerji  ');
    $mail->AddAddress("$MailKimeGidecek", 'Map Enerji'); //Mailin Gideceği Adres ve Alıcı Adı
    $mail->CharSet = 'UTF-8'; //Mail Karakter Seti
    $mail->Subject = $MesajKonusu; //Mail Konu Başlığı
    $mail->MsgHTML("$Mesaj"); //Mail Mesaj İçeriği
    
    $sayac = count($_FILES['folder']['tmp_name']);
    for ($i = 0; $i < $sayac; $i++) {
        if (
            isset($_FILES['folder']) &&
            $_FILES['folder']['error'][$i] == UPLOAD_ERR_OK
        ) {
            $mail->AddAttachment(
                $_FILES['folder']['tmp_name'][$i],
                $_FILES['folder']['name'][$i]
            );
        } else {
            echo "erorr!";
        }
    }
    if($mail->Send()) {
        echo '<script>alert("Your messages have been received from you!");</script>';
    } else {
        echo 'Beim Abrufen der Nachricht ist ein Fehler aufgetreten: ' . $mail->ErrorInfo;
    }


} //Mail gönderme işlemi tamamlandı end.if

?>

<script>
  setTimeout(function(){
  window.location = "https://mapenerji.com.tr/";
}, 1000);
</script>