  <section class="secStocks">
        <div class="conteiner">
          <img class="aktii" src="img/aktii.png" alt="">
          <div class="carousel-wrap">
            <div class="owl-carousel">
              <?php
                  require_once "fun.php";
                  $products = getGootsShort(2);
                  foreach ($products as $property):
                    $id_type = $property['id_typetech'];
                  ?>
                  <div class="item">
                    <div class="col">
                  <div style="height: 50px;">
                    <img class="discount" src="img/cred.svg" alt="">
                  </div>
    
                  <div style="height: 300px; display: flex;">
                    <a href="product.php?id=<?php echo $property['id'];?>&type=<?php  echo $id_type; ?>" class="midCenter">
                      <!-- img/noteBookTest.png -->
                      <?php //echo("photos/".$property['img']);?>
                      <img src="<?php
                      $json = $property['img'];
                      $obj = json_decode($json);
                      print $obj->{'0'}; // 12345
                      ?>" alt="">
                      <h4><?php echo($property['name']);?></h4>
                    </a>
                  </div>
                  <div class="cred_ras">
                    <img src="img/cred.svg" alt="">
                    <img src="img/racr12.png" alt="">
                  </div>
                  <div class="price_menu">
                    <div class="cost">
                      <?php echo($property['cost']);?><sup>.00</sup>
                    </div>
                    <div class="buy">
                      <div style="display: flex;height: 78px;">
                        <a  onclick = "open_one_click_p(<?php echo $property['id']?>,<?php echo $id_type?>,<?php echo $property['cost']?>)"><img src="img/click.svg" alt=""></a>
                      </div>
                    </div>
                    <div class="to_basket">
                      <div style="display: flex;height: 78px;">
                        <a onclick="<?php
                        if(isset($_SESSION['basket'])){
                           $is_true = false;
                            foreach($_SESSION['basket'] as $item):
                             
                              if($property['id'] == $item['id']&& $item['id_type'] == $id_type)
                                $is_true = true;
                            endforeach;
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'".$obj->{'0'}."','img".$property['id']."',".$id_type.",".count($_SESSION['basket']).")");
                              else
                                echo('');
                          }else
                          {
                             if(!$is_true)
                                echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'". $obj->{'0'}."','img".$property['id']."',".$id_type.",".count($_SESSION['basket']).")");
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
        </div>
      </section>