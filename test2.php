<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" media="screen" href="testcss.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/slider.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/carousel.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/owelCor/owl.carousel.min.css" />
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/owelCor/owl.theme.default.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/cars.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/card_2.css" />
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

</head>
<body>
 

  <div class="carousel-wrap">
        <div class="owl-carousel">
          <?php
              require_once "fun.php";
              $products = getGootsShort(2);
              // $product_property = get_property($id);
              foreach ($products as $property):
              ?>
          <div class="item">
            <div class="col" style = "height: 590px;width: 355px;">
              <div style="height: 50px;">
                <img class="discount" src="img/cred.svg" alt="">
              </div>

              <div style="height: 300px; display: flex; ">
                <a href="product.php?id=<?php echo $property['id'];?>&type=<?php  echo $id; ?>" class="midCenter" >
                  <!-- img/noteBookTest.png -->
                  <?php //echo("photos/".$property['img']);?>
                  <div>
                    <img style = "height: auto;width: 200px;" src="<?php
                  $json = $property['img'];
                  $obj = json_decode($json);
                  print $obj->{'0'}; // 12345
                  ?>" alt="">
                  <h4><?php echo($property['name']);?></h4>
                  </div>
                </a>
              </div>
              <div class="cred_ras" style = "margin-left:-75px;">
                <img src="img/cred.svg" alt="">
                <img src="img/racr12.png" alt="">
              </div>
              <div class="price_menu">
                <div class="cost">
                  <?php echo($property['cost']);?><sup>.00</sup>
                </div>
                <div class="buy">
                  <div style="display: flex;height: 78px;">
                    <a href="product.php"><img src="img/click.svg" alt=""></a>
                  </div>
                </div>
                <div class="to_basket">
                  <div style="display: flex;height: 78px;">
                    <a onclick="<?php
                    if(isset($_SESSION['basket'])){
                       $is_true = false;
                        foreach($_SESSION['basket'] as $item):
                         
                          if($property['id']==$item['id'])
                            $is_true = true;
                        endforeach;
                         if(!$is_true)
                            echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'".$obj->{'0'}."','img".$property['id']."')");
                          else
                            echo('');
                      }else
                      {
                         if(!$is_true)
                            echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'". $obj->{'0'}."','img".$property['id']."')");
                          else
                            echo('');
                      }
                    ?>">

                      <img id="<?php echo("img".$property['id'])?>" src="<?php
                      
                          if(!$is_true)
                            echo('img/basketwhite.svg');
                          else
                            echo('img/cart.png');
                      ?>" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="bottom_menu">
                <a class="leftButton" href="#"><img src="img/balancegreay.svg" alt=""></a>
                <a class="rightButton" href="#"><img src="img/heartgreay.svg" alt=""></a>

              </div>
            </div>
          </div>
          <?php
              endforeach;
              ?>
        </div>
      </div>
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="js/headhesive.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/carousel.js"></script>
</body>
</html>