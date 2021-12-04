<?php require_once("yonetici/kutuphane/baglanti.php"); ?>

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


$sorgu = "SELECT * FROM egitim";
$sonuc = mysqli_query($baglanti, $sorgu);

while ($satir = mysqli_fetch_array($sonuc)) {
  $egitimler[$satir['id']] = $satir;;
}

$sorgu = "SELECT * FROM resimler";
$sonuc = mysqli_query($baglanti, $sorgu);

while ($satir = mysqli_fetch_array($sonuc)) {
  $resim[$satir['id']] = $satir;
}
//dizigor($bilgiler);

if (isset($_POST['submit']) == true) {

  $adi=$_POST['adi'];
  $soyadi=$_POST['soyadi'];
  $email=$_POST['email'];
  $mesaj=$_POST['mesaj'];

  if(empty($adi)==false && empty($soyadi)==false && empty($email)==false && empty($mesaj)==false) {

      $sorgu="INSERT INTO mesajlar (adi,soyadi,email,mesaj) VALUES ('{$adi}','{$soyadi}','{$email}','{$mesaj}')";
      $sonuc=mysqli_query($baglanti,$sorgu);

      
      

      


  }



}

?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charser=utf-8" />
  <meta http-equiv="Content-Language" content="tr" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />


  <link rel="stylesheet" href="css/main2.css" />



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


  <title><?php echo $bilgiler[2]['ad']; ?></title>
</head>

<style>
  .divson2 {

    height: 750px;
    background-color: black;
    padding-top: 200px;
  }

  .formcuk {

    padding-right: 100px;
    padding-left: 100px;
  }
</style>




<body>
  <div id="content">
    <span class="slide"> </span>
    <div id="menu" class="nav">
      <div class="burger2" onclick="closeslidemenu()">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <a href="#main1"><?php echo $header[1]['header1']; ?></a>
      <a href="blog.php"><?php echo $header[1]['header2']; ?></a>
      <a href="#main3"><?php echo $header[1]['header3']; ?></a>
      <a href="yonetici/giris.php"><?php echo $header[1]['header4']; ?></a>

    </div>
  </div>

  <div id="navbar">
    <div class="text-center">
      <nav class="Navbar">
        <div class="burger" onclick="openslidemenu()"><a id="burger-a"></a>
          <div class="line1"></div>
          <div class="line2"></div>

          <div class="line3"></div>
        </div>

        <ul class="nav-links">
          <li>
            <a href="#fakediv"><?php echo $header[1]['header1']; ?></a>
          </li>
          <li>
            <a href="blog.php"><?php echo $header[1]['header2']; ?></a>
          </li>
          <li>
            <a href="#main3"><?php echo $header[1]['header3']; ?></a>
          </li>
          <li>
            <a href="yonetici/giris.php"><?php echo $header[1]['header4']; ?></a>
          </li>

        </ul>
      </nav>
    </div>
  </div>
  <div class="fakediv" id="fakediv"> </div>
  <div class="main1" id="main1">
    <h1 id="text3"> </h1>

  </div>

  <div class="main2" id="main2">



    <br>

    <div class="row " style="padding:75px;">
      <div class="col-lg-12 ml-auto ">
        <div class="row">

          <?php foreach ($egitimler as $egitim) { ?>
            <div class="col-md-6 col-lg-4 mb- mb-lg-4 ">
              <div>
                <p> <strong> <?php echo $egitim['tipi']; ?> </strong> </p>
                <p><?php echo $egitim['adi']; ?></p>
                <p>
                  <?php
                  echo $egitim['baslama'] . "-";

                  if (empty($egitim['bitis']) == false) {
                    echo $egitim['bitis'];
                  } else {
                    echo "Devam Ediyor..";
                  }



                  ?>



                </p>
              </div>
            </div>

          <?php } ?>






        </div>
      </div>
    </div>
  </div>
  </div>


  </div>




  </div>
  <div class="main3" id="main3">
    <div class="grid">


      <?php foreach ($resim as $resimler) { ?>





        <img src="yonetici/img/gelenresimler/<?php echo $resimler['id']; ?>.jpg" id="myImg">







        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>








      <?php $resimler++;
      } ?>









    </div>



  </div>



  <div class="divson2 " id="divson2">

  <!-- Name input -->
  <form  method="post" class="formcuk">
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="form4Example1" class="form-control" placeholder="Adınız" name="adi" />

      </div>

      <div class="form-outline mb-4">
        <input type="text" id="form4Example1" class="form-control" placeholder="Soyadınız" name="soyadi" />

      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form4Example2" class="form-control" placeholder="Emailiniz" name="email" />

      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Mesajınız" name="mesaj"></textarea>

      </div>



      <!-- Submit button -->
      <button class="btn btn-secondary btn-block mb-4" name="submit" value="Gönder">Gönder</button>
    </form>



  </div>


















  <?php require_once("yonetici/kutuphane/footer.php"); ?>



</body>

<?php error_reporting(0); ?>
<script src="js/main2.js"> </script>

<script>
  consoleText3(["<?php echo $bilgiler[2]['ad'] ?>"], "text3", ["white"]);

  function consoleText3(words, id, colors) {
    if (colors === undefined) colors = ["#fff"];
    var visible = true;
    var con = document.getElementById("console3");
    var letterCount = 1;
    var x = 0.7;
    var waiting = false;
    var target = document.getElementById(id);
    target.setAttribute("style", "color:" + colors[0]);
    window.setInterval(function() {
      if (letterCount === 0 && waiting === false) {
        waiting = true;
        target.innerHTML = words[0].substring(0, letterCount);
        window.setTimeout(function() {
          var usedColor = colors.shift();
          colors.push(usedColor);
          var usedWord = words.shift();
          words.push(usedWord);
          x = 1;
          target.setAttribute("style", "color:" + colors[0]);
          letterCount += x;
          waiting = false;
        }, 1000);
      } else if (waiting === false) {
        target.innerHTML = words[0].substring(0, letterCount);
        letterCount += x;
      }
    }, 120);
  }
</script>


<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>


</html>