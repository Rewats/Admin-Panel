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
    
    <footer class="site-footer" id="footer" >
      <div class="container" >
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">Hakkımda</h3>
                <p><?php  echo $bilgiler[1]['icerik'] ?></p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto" >
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Yönlendirme</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#fakediv" class="smoothscroll"><?php  echo $header[1]['header1'] ?></a></li>
                  <li><a href="blog.php" class="smoothscroll"><?php  echo $header[1]['header2'] ?></a></li>
                  <li><a href="#main3" class="smoothscroll"><?php  echo $header[1]['header3'] ?></a></li>
                  <li><a href="yonetici/giris.php"  class="smoothscroll"><?php  echo $header[1]['header4'] ?></a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

         

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed and coded <i class="icon-heart text-danger" aria-hidden="true"></i> by <a> <?php  echo $bilgiler[2]['ad'] ?></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>


    </footer>

    <script src="../js/main2.js"> </script>

 