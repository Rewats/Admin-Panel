<?php require_once("kutuphane/baglanti.php"); ?>
<?php

$sorgu = "SELECT * FROM mesajlar";
$sonuc = mysqli_query($baglanti, $sorgu);
while ($satir = mysqli_fetch_array($sonuc)) {

    $mesaj[$satir['id']] = $satir;
}


if (@$_POST['tumunusil'] == 1) {



    $sorgu = "DELETE FROM mesajlar;";
    $sonuc = mysqli_query($baglanti, $sorgu);
    header('Location:gelenmesajlar.php');
}



if (@$_POST['sil'] == 1) {
    $id = $_POST['id'];




    if (empty($id) == false) {

        $sorgu = "DELETE FROM mesajlar where id=$id ";
        $sonuc = mysqli_query($baglanti, $sorgu);
        header('Location:gelenmesajlar.php');
    } else {
        $hata = "Lütfen alanı doldurunuz.";
    }
}


?>


<?php require_once("kutuphane/ust.php"); ?>

<div class="row">
    <div class="col-md-6">
        <!-- START BORDERED TABLE SAMPLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Gelen Mesajlar</h3>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>İsim</th>
                                <th>Soyisim</th>
                                <th>Email</th>
                                <th>Mesaj</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($mesaj) == false) { ?>
                                <?php foreach ($mesaj as $mesajlar) { ?>
                                    <tr>
                                        <td><?php echo $mesajlar['id']; ?></td>
                                        <td><?php echo $mesajlar['adi']; ?></td>
                                        <td><?php echo $mesajlar['soyadi']; ?></td>
                                        <td><?php echo $mesajlar['email']; ?></td>
                                        <td><?php echo $mesajlar['mesaj']; ?></td>


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


















    <!-- END BORDERED TABLE SAMPLE -->




























    <?php require_once("kutuphane/alt.php"); ?>