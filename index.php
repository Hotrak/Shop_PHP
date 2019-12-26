<?php session_start(); ?>
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
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/owelCor/owl.theme.default.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/cars.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/card_2.css" />
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


          <!-- <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>

                  </div>
                  <div class="details">
                    <h3>Игровой ноутбук</h3>
                    <h2>Lenovo IdeaPad 710s</h2>
                    <h4>150 руб.</h4>
                    <h4 class="dis"></span>200 руб.</h4>
                  </div>
                  <div class="fActions">
                    <img class="foot" src="img/like.svg" alt="">
                    <img class="foot" src="img/basket.svg" alt="">
                    <img class="foot" src="img/balance.svg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div>
          <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>





          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div>
          <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>





          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div> -->
        </div>
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
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>

                  </div>
                  <div class="details">
                    <h3>Игровой ноутбук</h3>
                    <h2>Lenovo IdeaPad 710s</h2>
                    <h4>150 руб.</h4>
                    <h4 class="dis"></span>200 руб.</h4>
                  </div>
                  <div class="fActions">
                    <img class="foot" src="img/like.svg" alt="">
                    <img class="foot" src="img/basket.svg" alt="">
                    <img class="foot" src="img/balance.svg" alt="">
                  </div>


                  <!-- <span class="foot">Buy Now</span>
                                        <span class="foot">Add TO Cart</span>
                                        <span class="foot">Add TO Cart</span> -->
                </div>
              </div>
            </div>


          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div>
          <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>





          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div>
          <div class="item">

            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>MSI</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>





          </div>
          <div class="item">
            <div class="card">
              <div class="left">
                <img src="img/noteBookTest.png" alt="shoe">

              </div>
              <div class="right">
                <div class="product-info">
                  <div class="product-name">
                    <h1>ASUS</h1>
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                    <img src="img/area.svg" height="10px" alt="">
                  </div>
                  <div class="details">
                    <h3>Winter Collection</h3>
                    <h2>Men Black Sneakers</h2>
                    <h4><span class="fa fa-dollar"></span>150</h4>
                    <h4 class="dis"><span class="fa fa-dollar"></span>200</h4>
                  </div>


                  <span class="foot"><i class="fa fa-shopping-bag"></i>Buy Now</span>
                  <span class="foot"><i class="fa fa-shopping-cart"></i>Add TO Cart</span>
                </div>
              </div>
            </div>

          </div>
          <!-- <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div>
                        <div class="item"><img src="http://placehold.it/150x150"></div> -->
          <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>

  </section>
  <section>
    <div class="conteiner">
      <div id="menuFooter">
        <div>
          <a href="#"><img src="img/balance.svg" alt="">
            <p>Сравнить</p>
            <div class="counter"><span>1</span></div>
          </a>
        </div>
        <div>
          <a href="#"><img src="img/balance.svg" alt="">
            <p>Избранное</p>
            <div class="counter"><span>1</span></div>
          </a>
        </div>
        <div>
          <a href="#"><img src="img/balance.svg" alt="">
            <p>Вы смотрели</p>
            <div class="counter"><span>1</span></div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <footer></footer>

  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <script src="js/headhesive.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/carousel.js"></script>
</body>

</html>