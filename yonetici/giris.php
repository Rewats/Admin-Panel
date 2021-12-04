<?php require_once("kutuphane/baglanti.php"); ?>



<?php




if (isset($_POST['giris']) == true) {

    $eposta = $_POST['eposta'];
    $sifre = $_POST['sifre'];

    if (empty($eposta) == false && empty($sifre) == false) {

        $sorgu = "SELECT * FROM admin WHERE eposta='{$eposta}' and  sifre='{$sifre}' ";
        $sonuc = mysqli_query($baglanti, $sorgu);

        $kullanici = mysqli_fetch_array($sonuc);
        $sayisi = mysqli_num_rows($sonuc);

        if ($sayisi == 1) {

            $_SESSION['kullanici']['id'] = $kullanici['id'];
            $_SESSION['kullanici']['kimlik'] = $kullanici['ad'] . " " . $kullanici['soyad'];

            yonlendir("index.php");
           
            //header('Location:index.php');
        } else {

            $hata = "Eposta veya şifre yanlış !";
        }
    } else {

        $hata= "Alanlar boş bırakılamaz";
    }

    
}




    
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">

<!-- Mirrored from aqvatarius.com/themes/atlant/html/pages-login-v2.html by HTTrack Website Copier/3.x [XR&CO'2005], Sun, 13 Nov 2016 12:09:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->

<head>
    <!-- META SECTION -->
    <title>Kullanıcı Girişi</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <div class="login-container login-v2">

        <div class="login-box animated fadeInDown">
            <div class="login-body">
                <?php mesaj(@$hata); ?>
                <div class="login-title"><strong>Hoş Geldiniz</strong>, Lütfen Giriş Yapınız.</div>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user"></span>
                                </div>
                                <input type="text" class="form-control" name="eposta" placeholder="Eposta" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <input type="password" class="form-control" name="sifre" placeholder="Şifre" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" name="giris" value="1">Giriş</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-36783416-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter25836617 = new Ya.Metrika({
                        id: 25836617,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function() {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "../../../../mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/25836617" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</body>

<!-- Mirrored from aqvatarius.com/themes/atlant/html/pages-login-v2.html by HTTrack Website Copier/3.x [XR&CO'2005], Sun, 13 Nov 2016 12:09:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->

</html>