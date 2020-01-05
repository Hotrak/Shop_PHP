<?php session_start();
 require_once "fun.php";
// var_dump($_SESSION['user'])
echo get_watc_prod(10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/slider.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/carousel.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/owelCor/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/basket_view.css" />
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/owelCor/owl.theme.default.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/cars.css" /> -->
  <link rel="stylesheet" type="text/css" media="screen" href="./css/card_2.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/card_3.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <link rel="import" href="header.html"> -->
  <title>Document</title>

</head>

<body>
  <?php
        include_once "header.php"
    ?>
  <section class="secSlider">
    <div class="conteiner">
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="img/Banars/banner1.png" style="width:100%;">
        </div>
        <div class="mySlides fade">
          <img src="img/Slider/45.jpg" style="width:100%;">
        </div>
        <div class="mySlides fade">
          <img src="img/Slider/46.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="img/Slider/47.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1,'mySlides','dott')">&#10094;</a>
        <a class="next" onclick="plusSlides(1,'mySlides','dott')">&#10095;</a>

      </div>

      <br>
      <div style="text-align:center;">
        <span class="dott" onclick="currentSlide(1,'mySlides','dott')"></span>
        <span class="dott" onclick="currentSlide(2,'mySlides','dott')"></span>
        <span class="dott" onclick="currentSlide(3,'mySlides','dott')"></span>
        <span class="dott" onclick="currentSlide(4,'mySlides','dott')"></span>
      </div>
      <!-- The dots/circles -->

    </div>
  </section>
  <section class="secStocks">
    <div class="conteiner">
      <img class="aktii" src="img/aktii.png" alt="">
      <div class="owl-carousel owl-theme">
        <?php
                  $products = get_discount_prod(10);
                  foreach ($products as $property):
                    $id_type = $property['id_typetech'];
                  ?>
        <div class="product-item">
          <div class="discount_p">
            <?php
              if($property['discount'] != 0){

            ?>
            <img src="img/lower_cost.svg" alt="">
            <div class="discount_value"><span>-<?php echo $property['discount']?>%</span></div>
              <?php }  ?>
          </div>
          <a href="product.php?id=<?php echo $property['id'];?>&type=<?php  echo $id_type; ?>" class="img_name_p">
          <div class="img-wraper">
      <img class = "product_img" src="<?php
                      $json = $property['img'];
                      $obj = json_decode($json);
                      print $obj->{'0'}; // 12345
                      ?>" alt="">
          </div>
           
            <span><?php echo($property['name']);?></span>
          </a>
          <div class="cred_rac_p">
            <img src="img/cred.svg" alt="">
            <img src="img/racr12.png" alt="">
          </div>
          <div class="nav_panal">
            <div class="cost_block">
              <?php
              if($property['discount'] != 0){
                $dis_cost =  $property['cost']/100 * $property['discount'];
                $cost_with_dis =$property['cost'] - $dis_cost;
              ?>
              <div class="last_price_p">
                <span style="font-size: 20px;"><strike><?php echo price_format_int($property['cost'])?></strike>
                <sup><?php echo price_format_frac($property['cost'])?></sup></span>
                <div class="dis_cost_p"><span>-<?php echo $dis_cost?></span></div>
              </div>
              |&nbsp
              <span><?php echo price_format_int($cost_with_dis);?><sup>.<?php echo price_format_frac($cost_with_dis);?></sup></span>
              <?php }else {?>
                <span><?php echo price_format_int($property['cost']);?><sup>.<?php echo price_format_frac($property['cost']);?></sup></span>
              <?php }?>
            </div>
            <div class="one_click_b_p"
              onclick="open_one_click_p(<?php echo $property['id']?>,<?php echo $id_type?>,<?php echo $property['cost']?>)">
              <img src="img/click.svg" alt=""></div>
            <div class="to_bascket_b_p" onclick="<?php
                        if(isset($_SESSION['basket'])){
                           $is_true = false;
                            foreach($_SESSION['basket'] as $item):
                             
                              if($property['id'] == $item['id']&& $item['id_type'] == $id_type)
                                $is_true = true;
                            endforeach;
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$cost_with_dis.",".$property['count'].",'".$obj->{'0'}."','img".$property['id'].$id_type."',".$id_type.",".count($_SESSION['basket']).")");
                              else
                                echo('');
                          }else
                          {
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$cost_with_dis.",".$property['count'].",'". $obj->{'0'}."','img".$property['id'].$id_type."',".$id_type.",".count($_SESSION['basket']).")");
                              else
                                echo('');
                          }
                        ?>"><img class="<?php echo("img".$property['id'].$id_type)?>" src="<?php
                          
                              if(!$is_true)
                                echo('img/basketwhite.svg');
                              else
                                echo('img/cart.png');
                          ?>" alt=""></div>
          </div>
          <div class="bottom_panal_p">
            <div><img src="img/balancegreay.svg" alt=""></div>
            <div><img src="img/heartgreay.svg" alt=""></div>
          </div>
        </div>
        <?php
                  endforeach;
                  ?>
      </div>
    </div>
  </section>

  <section class="secSlider">
    <div class="conteiner">
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides2 fade">
          <img src="img/Slider/45.jpg" style="width:100%;">
        </div>

        <div class="mySlides2 fade">
          <img src="img/Slider/46.jpg" style="width:100%">
        </div>

        <div class="mySlides2 fade">
          <img src="img/Slider/47.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1,'mySlides2','dott2')">&#10094;</a>
        <a class="next" onclick="plusSlides(1,'mySlides2','dott2')">&#10095;</a>

      </div>

      <br>
      <div style="text-align:center;">
        <span class="dott2" onclick="currentSlide(1,'mySlides2','dott2')"></span>
        <span class="dott2" onclick="currentSlide(2,'mySlides2','dott2')"></span>
        <span class="dott2" onclick="currentSlide(3,'mySlides2','dott2')"></span>
      </div>
      <!-- The dots/circles -->

    </div>
  </section>
  <section class="secRecomend">
    <div class="conteiner">
      <img class="aktii" src="img/recomend.png" alt="">
      <div class="owl-carousel owl-theme">
        <?php
                 
                  $products = get_watc_prod(10);
                  foreach ($products as $property):
                    $id_type = $property['id_typetech'];
                  ?>
          <div class="product-item">
          <div class="discount_p">
            <?php
              if($property['discount'] != 0){

            ?>
            <img src="img/lower_cost.svg" alt="">
            <div class="discount_value"><span>-<?php echo $property['discount']?>%</span></div>
              <?php }  ?>
          </div>
          <a href="product.php?id=<?php echo $property['id'];?>&type=<?php  echo $id_type; ?>" class="img_name_p">
          <div class="img-wraper">
 <img class = "product_img" src="<?php
                      $json = $property['img'];
                      $obj = json_decode($json);
                      print $obj->{'0'}; // 12345
                      ?>" alt="">
          </div>
           
            <span><?php echo($property['name']);?></span>
          </a>
          <div class="cred_rac_p">
            <img src="img/cred.svg" alt="">
            <img src="img/racr12.png" alt="">
          </div>
          <div class="nav_panal">
            <div class="cost_block">
              <?php
              if($property['discount'] != 0){
                $dis_cost =  $property['cost']/100 * $property['discount'];
                $cost_with_dis =$property['cost'] - $dis_cost;
              ?>
              <div class="last_price_p">
                <span style="font-size: 20px;"><strike><?php echo price_format_int($property['cost'])?></strike>
                <sup><?php echo price_format_frac($property['cost'])?></sup></span>
                <div class="dis_cost_p"><span>-<?php echo $dis_cost?></span></div>
              </div>
              |&nbsp
              <span><?php echo price_format_int($cost_with_dis);?><sup>.<?php echo price_format_frac($cost_with_dis);?></sup></span>
              <?php }else {?>
                <span><?php echo price_format_int($property['cost']);?><sup>.<?php echo price_format_frac($property['cost']);?></sup></span>
              <?php }?>
            </div>
            <div class="one_click_b_p"
              onclick="open_one_click_p(<?php echo $property['id']?>,<?php echo $id_type?>,<?php echo $property['cost']?>)">
              <img src="img/click.svg" alt=""></div>
            <div class="to_bascket_b_p" onclick="<?php
                        if(isset($_SESSION['basket'])){
                           $is_true = false;
                            foreach($_SESSION['basket'] as $item):
                             
                              if($property['id'] == $item['id']&& $item['id_type'] == $id_type)
                                $is_true = true;
                            endforeach;
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$cost_with_dis.",".$property['count'].",'".$obj->{'0'}."','img".$property['id'].$id_type."',".$id_type.",".count($_SESSION['basket']).")");
                              else
                                echo('');
                          }else
                          {
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$cost_with_dis.",".$property['count'].",'". $obj->{'0'}."','img".$property['id'].$id_type."',".$id_type.",".count($_SESSION['basket']).")");
                              else
                                echo('');
                          }
                        ?>"><img class="<?php echo("img".$property['id'].$id_type)?>" src="<?php
                          
                              if(!$is_true)
                                echo('img/basketwhite.svg');
                              else
                                echo('img/cart.png');
                          ?>" alt=""></div>
          </div>
          <div class="bottom_panal_p">
            <div><img src="img/balancegreay.svg" alt=""></div>
            <div><img src="img/heartgreay.svg" alt=""></div>
          </div>
        </div>
        <?php
                  endforeach;
                  ?>
      </div>
    </div>
    </div>

  </section>
  <section>

  </section>
  <div id="overlay"></div>
  <div id="popup">


  </div>
  <div id="by_one_click_p">

  </div>
  <?php
        include_once "footer.html"
    ?>

  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <script src="js/headhesive.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/carousel.js"></script>
  <script src="js/open_basket.js"></script>
</body>

</html>