<?php require_once("kutuphane/baglanti.php"); ?>

<?php if (empty($_SESSION['kullanici']['id'] == true)) {

    yonlendir("giris.php");
}
?>

<?php
$baslik = "Bilgiler";
$sira = 1;
$sorgu = "SELECT * FROM egitim";
$sonuc = mysqli_query($baglanti, $sorgu); // yazdığımız sorguyu çalıştır.

while ($satir = mysqli_fetch_array($sonuc)) {
    $egitimler[] = $satir;
}
/*  dizigor($egitimler); */






if (@$_POST['tumunusil'] == 1) {



    $sorgu = "DELETE FROM egitim;";
    $sonuc = mysqli_query($baglanti, $sorgu);
    header('Location:index.php');
}



if (@$_POST['sil'] == 1) {
    $id = $_POST['id'];




    if (empty($id) == false) {

        $sorgu = "DELETE FROM egitim where id=$id ";
        $sonuc = mysqli_query($baglanti, $sorgu);
        header('Location:index.php');
    } else {
        $hata = "Lütfen alanı doldurunuz.";
    }
}


$sorgu2 = "SELECT * FROM mesajlar";
$sonuc2 = mysqli_query($baglanti, $sorgu2);
while ($satir2 = mysqli_fetch_array($sonuc2)) {

    $mesaj[$satir2['id']] = $satir2;
}





?>



<?php require_once("kutuphane/ust.php"); ?>
<div class="row">
    <div class="col-md-6">
        <!-- START BORDERED TABLE SAMPLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Eğitim Bilgileri</h3>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Adı</th>
                                <th>Türü</th>
                                <th>Başlama</th>
                                <th>Bitiş</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($egitimler) == false) { ?>
                                <?php foreach ($egitimler as $egitim) { ?>
                                    <tr>
                                        <td><?php echo $egitim['id']; ?></td>
                                        <td><?php echo $egitim['adi']; ?></td>
                                        <td><?php echo $egitim['tipi']; ?></td>
                                        <td><?php echo $egitim['baslama']; ?></td>

                                        <?php if (empty($egitim['bitis']) == false) { ?>
                                            <td><?php echo $egitim['bitis']; ?></td>
                                        <?php } else { ?>
                                            <td> Devam Ediyor </td>

                                        <?php } ?>
                                    </tr>
                                <?php  } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="5" style="text-align:center; background-color:rgba(255,0,0,0.1)"> Henüz Kayıt Bulunmuyor</td>


                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE SAMPLE -->
        <div class="panel-heading">
            <h3 class="panel-title">Eğitim Bilgisi Silme</h3>
        </div>












        <form class="form-horizontal" method="post">
            <div class="panel panel-default">

                <div class="panel-body">

                </div>
                <div class="panel-body">







                    <div class="form-group">
                        <?php mesaj(@$hata); ?>
                        <label class="col-md-3 col-xs-12 control-label">Sıra</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="id" autocomplete="off" />
                            </div>
                            <span class="help-block">Silmek istediniz verinin sırasını giriniz.</span>
                        </div>
                    </div>










                </div>
                <div class="panel-footer">

                    <button class="btn btn-danger pull-left" name="tumunusil" value="1">Tüm Veriyi Sil</button>

                    <button class="btn btn-warning pull-right" name="sil" value="1">Sil</button>
                </div>
            </div>
        </form>












    </div>







    <?php require_once("kutuphane/alt.php"); ?>