<!DOCTYPE HTML>
<HTML>
  <HEAD>
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8" >
  <link rel="icon" href="./lightbox/ico92x92.png" type="image/png">
  <TITLE>ligth2</TITLE>
  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/jquery-ui.min.js"></script>
  <script src="./lightbox/js/lightbox.js"></script>
  <link rel="stylesheet" href="./lightbox/css1/lightbox.css">
  <link rel="stylesheet" href="./css/jquery-ui.min.css">
  <style>
    body, html{overflow: hidden;}
    img.img1{margin: 10px;border: 1px solid black;}
    div.main{text-align: center;}
  </style>
  </HEAD>
  <BODY>
      <div class="main">
      <?php
        $sc_arr=array();
        for ($i=0;$i<20;$i++){
            $sc_arr[$i]='images_sc/full/img'.$i.'.png';
        };
        for ($j=0,$box;$j<20;$j++){
            $box='<a class="a1" data-lightbox="collecion" data-title="img'.$j.'" href="'.$sc_arr[$j].'"><img src="'.$sc_arr[$j].'" class="img1"></a>';
            echo $box;
        }
      ?>
      </div>
      <script>
          jQuery(function(){
            $('.img1').height('140px');
            $('div.main').addClass('ui-widget-content')
          })
      </script>
  </BODY>
</HTML>