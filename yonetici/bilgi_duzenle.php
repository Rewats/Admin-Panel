<?php require_once("kutuphane/baglanti.php"); ?>


<?php if(empty($_SESSION['kullanici']['id']==true)){

    yonlendir("giris.php");



} 
?>

<?php
$sorgu = "SELECT * FROM bilgi";
$sonuc = mysqli_query($baglanti, $sorgu);
while ($satir = mysqli_fetch_array($sonuc)) {

  $bilgiler[$satir['id']] = $satir;
}

$sorgu2 = "SELECT * FROM headerlar";
$sonuc2 = mysqli_query($baglanti, $sorgu2);
while ($satir2 = mysqli_fetch_array($sonuc2)) {

  $header[$satir2['id']] = $satir2;
}


?>



<?php
$baslik = "Site Sahibi Bilgisi Güncelleme ";
$baslik2 = "Header Bilgisi Güncelleme ";

if(@$_POST['kaydet']==1) {

	$ad=$_POST['ad'];
    $hakkimizda=$_POST['hakkimizda'];
	

	if(empty($ad)==false ) {
       
		$sorgu="UPDATE bilgi SET ad='{$ad}' WHERE id=2 LIMIT 1";
		$sonuc=mysqli_query($baglanti,$sorgu);
		header('Location:bilgi_duzenle.php');
		
	}else {
		echo "Lütfen site sahibi alanını doldurunuz.";
	}

    if(empty($hakkimizda)==false ) {
       
        $sorgu="UPDATE bilgi SET icerik='{$hakkimizda}' WHERE id=1 LIMIT 1";
        $sonuc=mysqli_query($baglanti,$sorgu);
        header('Location:bilgi_duzenle.php');
        
    }else {
        echo "Lütfen site sahibi alanını doldurunuz.";
    }
}



if(@$_POST['kaydet2']==1) {

	$header1 = $_POST['header1'];
    $header2 = $_POST['header2']; 
    $header3 = $_POST['header3'];
    $header4 = $_POST['header4'];
   
	

	if(empty($header1)==false ) {
       
		$sorgu="UPDATE headerlar SET  header1='{$header1}' WHERE id=1 LIMIT 1";
		$sonuc=mysqli_query($baglanti,$sorgu);
		header('Location:bilgi_duzenle.php');
		
	}else {
		echo "Lütfen header1 alanını doldurunuz.";
	}

    if(empty($header2)==false ) {
       
		$sorgu="UPDATE headerlar SET  header2='{$header2}' WHERE id=1 LIMIT 1";
		$sonuc=mysqli_query($baglanti,$sorgu);
		header('Location:bilgi_duzenle.php');
		
	}else {
		echo "Lütfen header2 alanını doldurunuz.";
    }
    
    if(empty($header3)==false ) {
       
		$sorgu="UPDATE headerlar SET  header3='{$header3}' WHERE id=1 LIMIT 1";
		$sonuc=mysqli_query($baglanti,$sorgu);
		header('Location:bilgi_duzenle.php');
		
	}else {
		echo "Lütfen header3 alanını doldurunuz.";
	}


    if(empty($header4)==false ) {
       
		$sorgu="UPDATE headerlar SET  header4='{$header4}' WHERE id=1 LIMIT 1";
		$sonuc=mysqli_query($baglanti,$sorgu);
		header('Location:bilgi_duzenle.php');
		
	}else {
		echo "Lütfen header4 alanını doldurunuz.";
	}


}

?>
<?php require_once ("kutuphane/ust.php"); ?>

   <div class="row">
        <div class="col-md-12">
            
            <form class="form-horizontal" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong></strong></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
             
                <div class="panel-body">                                                                        
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Site Sahibi</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="ad" value="<?php echo $bilgiler[2]['ad']; ?>" autocomplete="off" />
                            </div>                                            
                            <span class="help-block">Site sahibi bilgilerini günceller.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Hakkımızda</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea class="form-control" rows="5" name="hakkimizda"><?php echo $bilgiler[1]['icerik']; ?></textarea>
                            <span class="help-block">Site altlığında hakkımızda bilgisi yerine yazılır.</span>
                        </div>
                    </div>
                   

                 
                    
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">Formu temizle</button>                                    
                    <button class="btn btn-primary pull-right" name="kaydet" value="1">Kaydet</button>
                </div>
            </div>
            </form>
            
        </div>
    </div>   


    <h2><span class="fa fa-arrow-circle-o-left"></span> <?php echo @$baslik2 ?></h2>
   <div class="row">
        <div class="col-md-12">
            
            <form class="form-horizontal" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong></strong></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
             
                <div class="panel-body">                                                                        
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Header 1</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="header1" value="<?php echo $header[1]['header1']; ?>" autocomplete="off" />
                            </div>                                            
                            <span class="help-block">Header 1 alanını günceller.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Header 2</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="header2" value="<?php echo $header[1]['header2']; ?>" autocomplete="off" />
                            </div>                                            
                            <span class="help-block">Header 2 alanını günceller.</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Header 3</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="header3" value="<?php echo $header[1]['header3']; ?>" autocomplete="off" />
                            </div>                                            
                            <span class="help-block">Header 3 alanını günceller.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Header 4</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" class="form-control" name="header4" value="<?php echo $header[1]['header4']; ?>" autocomplete="off" />
                            </div>                                            
                            <span class="help-block">Header 4 alanını günceller.</span>
                        </div>
                    </div>

                    
                   

                 
                    
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">Formu temizle</button>                                    
                    <button class="btn btn-primary pull-right" name="kaydet2" value="1">Kaydet</button>
                </div>
            </div>
            </form>
            
        </div>
    </div>   

<?php require_once("kutuphane/alt.php"); ?>