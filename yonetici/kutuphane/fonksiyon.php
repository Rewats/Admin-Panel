<?php

function dizigor($egitimler){

    echo "<pre>";
    print_r($egitimler);
    echo "</pre>";
}

function yonlendir ($url){

    header("Location:{$url}");
    die();
}

function mesaj ($icerik=0) {

    if(empty($icerik)==false){
  echo "  <div class=\"alert alert-warning\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                <strong>Hata!</strong> $icerik
                            </div>";
    }
}

?>