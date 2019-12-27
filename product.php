<?php
  session_start();
  require_once "data/data.php";
  require_once "fun.php";
  // var_dump($leptop_property);
  if(isset($_GET['type'])){
    $type = $_GET['type'];
  } 
  
  
  $id = $_GET['id'];
  $good = get_good($id ,$type);
  //  echo ($id);

//echo "id: ".$id." type: ".$type

?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/product.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/basket_view.css" />

    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <section id="sec_gallary">
       <?php include_once "header.php" ?>
        <div class="conteiner">
            <h4><?php echo($good['product_name']);?></h4>
            <hr>
            <div class="gallary_panal">
                <h1><?php echo($good['product_name']);?></h1>
                <div class="product-gallery" id="product-gallery">
                    <ul class="image-list" id="image-list">
                    <?php
                      $json = $good['img'];
                      $obj = json_decode($json);
                      $count = 1;
                      // var_dump($obj);
                      foreach($obj as $img):
                    ?>
                      <?php if($img !=""){?>
                        <li class="image-item"><img class="imgSrc" src="<?php echo $img; ?>" onclick="addNewSrc(<?php echo $count; ?>)">
                        </li>
                        
                      <?php
                      }
                        $count+=1;
                      endforeach;
                      ?>
                    </ul>
                    <div class="product-imaged" id="product-imaged">
                        <img class="active"
                            src="<?php echo $obj->{'0'} ?>">
                    </div>
                    <div class="vertival_bar">
                      <div class="product_price">
                        <span><?php echo $good['cost'] ?></span>
                      </div>
                      <div class="product_buttons">
                        <a href="#"><img src="img/click.svg" alt=""></a>
                        <a href="#" onclick="<?php
                    if(isset($_SESSION['basket'])){
                       $is_true = false;
                        foreach($_SESSION['basket'] as $item):
                         
                          if($id == $item['id']&& $item['id_type'] == $type)
                            $is_true = true;
                        endforeach;
                         if(!$is_true)
                        //  .$good['id']
                            echo("open_basket(".$id.",'".$good['name']."',".$good['cost'].",".$good['count'].",'".$obj->{'0'}."','img".$good['id']."',".$id.")");
                          else
                            echo('');
                      }else
                      {
                         if(!$is_true)
                            echo("open_basket(".$id.",'".$good['name']."',".$good['cost'].",".$good['count'].",'". $obj->{'0'}."','img".$good['id']."',".$id.")");
                          else
                            echo('');
                      }
                    ?>" > <img id ="<?php echo("img".$good['id'])?>" src="<?php
                      
                          if(!$is_true)
                            echo('img/basketwhite.svg');
                          else
                            echo('img/cart.png');
                      ?>" alt=""></a>
                      </div>
                      <img src="img/racr12.png" alt="">
                      <img src="img/racr12.png" alt="">
                      <div class="wraper">
                        <div class="product_oper_buttons">
                          <a href="#"><img src="img/balancegreay.svg" alt=""></a>
                          <a href="#"><img src="img/heartgreay.svg" alt=""></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_propery_items" style="padding-bottom: 1500px;">
        <div class="conteiner">
            <div style="background-color: rgb(255, 255, 255);">
                <div class="nav_menu">
                    <a href="#">Описание</a>
                    <a href="#">Характеристики</a>
                    <a href="#">Отзывы</a>
                    
                </div>
                <div class="product_propery">
                    <h2>Характеристики</h2>
                    <table>
                        <?php
                        $q = get_property($type);
                        foreach ($q as $property):
                          $color = "";
                        if($property[0] == 2)
                          $color = "style =' background: #c8c8c8; font-size: 22px;'";
                        if(isset($good[$property[2]]) || $property[0] == 2){
                        ?>
                        <tr <?php echo $color;?>>
                            <th class="property" <?php echo $color;?>> <?php
                           
                              echo $property[1];
                              
                             ?> </th>
                            <td>
                              <?php

                              if($property[0] == 1)
                                if($good[$property[2]] == 1)
                                  echo "<img src='img/check.svg' alt=''>";
                                else
                                  echo "<img src='img/delete.svg' alt=''>";

                              else
                              if($property[0] == 2)
                              echo "";
                              else
                              {
                                $dis = "";
                                if(isset($good[$property[2]])){
                                  if(isset($property[4]))
                                    $dis= " (".$property[4].")";
                                    echo $good[$property[2]].$dis;
                                }

                              }
                               ?></td>
                        </tr>
                        <?php
                        }
                        endforeach;
                        ?>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <div id="overlay"></div>
  <div id="popup">


  </div>
    <!-- <?php
        include_once "header.html"
    ?> -->

    <script>

        let productImage = document.getElementById('product-imaged');
        let activeImage = productImage.querySelector('.active');
        let imageList = document.getElementById('image-list');
        let productImages = imageList.querySelectorAll('.imgSrc');
        function addNewSrc(e) {
            activeImage.src = productImages[e - 1].src;
        }

        $(window).scroll(function () {
            if ($(this).scrollTop() > 750) {
                $('.nav_menu').addClass("sticky");
            } else {
                $('.nav_menu').removeClass("sticky");
            };
        });
        
        

    </script>
    <script src="js/open_basket.js"> </script>
</body>


</html>