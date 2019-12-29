<?php
  session_start();
  require_once "fun.php";
  require_once "data\data.php";
  $id = $_GET['id'];
  $id_type = $_GET['id_type'];
  echo "id: ".$id." id_type: ".$id_type;
  $sort = "";
  if($id_type!= 0){
    if($id == 2)
    $sort = " WHERE id_type_laptope = ".$id_type;
    else if($id == 1)
      $sort = " WHERE id_type = ".$id_type;
    else if($id == 3)
      $sort = " WHERE id_type_mouse = ".$id_type;
    else if($id == 4)
      $sort = " WHERE id_typeheadphones = ".$id_type;
    else if($id == 5)
      $sort = " WHERE id_type_keyboard = ".$id_type;
  }
    
  $products = getGootsShort($id, $sort);//,"WHERE id_typep = ".$id_type
  
  var_dump($_SESSION['basket']);
  // var_dump($products);
  //  $_SESSION = array();
    // if(isset($_SESSION['basket'])){
    //   //var_dump($_SESSION['basket']);
    //   echo("Карзина worck");
    //   for($i = 0;$i<count($_SESSION['basket']);$i++){
        
    //     echo(" ".$_SESSION['basket'][0]['id']." ");
    //   }

    //    //$_SESSION['basket'][] = '1';
    // }
    // else{
    //   //$_SESSION['basket'][] = '1';
    //   echo("Карзина NOTworck");
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/content.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/checkbox.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/swicher.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/combobox.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/card_2.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/basket_view.css" />
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

  
  
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="./css/swicher.css" /> -->
  <!-- Range -->

  <!-- Range -->
   <script>
    
    let sort_q = {};
    let range_counter = 0;
    function create_new_range(min,max){

      range_counter++;
      create_range("#slider-range"+(range_counter+1), "#slider-time"+range_counter, "#slider-time"+(range_counter+1), min, max);
      //console.log(count);
      range_counter++;
      console.log(range_counter);

    }

    function create_range(idslider, point_name1, point_name2, minv, maxv) {

      let point1 = $(point_name1);
      let point2 = $(point_name2);
      point1.val(minv);
      point2.val(maxv);
      let slider = $(idslider).slider({
        range: true,
        min: minv,
        max: maxv,
        step: 1,
        values: [minv, maxv],
        slide: (e, ui) => {
          let hours1 = Math.floor(ui.values[0]);
          point1.val(hours1);
          let hours2 = Math.floor(ui.values[1]);
          point2.val(hours2);
          chenge();
        }

      });

      point1.on("change", () => {
        setRangeValues();
      });
      point2.on("change", () => {
        setRangeValues();
      });

      function setRangeValues() {
        chenge();
        slider.slider({
          values: [point1.val(), point2.val()]
        })
      }
      function chenge(){
        let name = point1.attr('name');
        sort_q[name] = [];
        sort_q[name]['#1'] = point1.val();
        sort_q[name]['#2'] = point2.val();
        show_sort_button();
      }
    }
  </script>
  <title>Document</title>
</head>

<body>
  <?php
        include_once "header.php";
    ?>
  <section id="product">
    <div class="conteiner">
      <hr>
      <h1>Ноутбуки <samp>(<?php echo count($products);?>)</samp> </h1>
      <div class="mainContent clearfix">
        <div class="property sort">
          <!-- <div class="all">
                        <input type="checkbox" name="all" id="all" />
                        <label for="all"></label>
                    </div>  -->
          <div class="accordion">
            <div class="trigger" id="show_all">
              <label for="checkbox-0" class="checkbox0">
                Фильтры <i></i>
              </label>
              <input type="checkbox" id="checkboxA" name="checkbox-1" checked />
            </div>

            <?php
            $count = 0;
           
              $sort_params = get_sort_params($id);
              // var_dump($sort_params);
              foreach ($sort_params as $property):
          ?>
            <div class="trigger">

              <input type="checkbox" id="checkboxA" name="checkbox-1" />
              <label for="checkbox-1" class="checkbox">
                <?php echo($property[0]); ?>
                <i></i>
              </label>

              <div class="content" data="<?php echo($property[3]); ?>">

                <?php if($property[1]!="0" && $property[1]!="1"){
                   $sort_items = getResult($property[1]);
                  //  $count = 0;
                  foreach ($sort_items as $item):?>
                <label class="container_check_box"><?php echo($item[$property[2]])?>
                  <input 
                  <?php
                  if($property[0] == "Тип")
                  if($item['id']== $id_type)
                  echo "checked";
                  ?>
                   type="checkbox" name="<?php echo($item['id'])?>">
                  <span class="checkmark"></span>
                </label>
                <?php endforeach;
              } else if($property[1]=="0"){
                  //  $sort_items = getResult($property[1]);
                  // foreach ($sort_items as $item):
                    $count++;
                  ?>

                <div class="range_block">
                  <div class="Inputs">
                    <div class="InputBox"><input name="<?php echo($property[2])?>"
                        id="slider-time<?php echo($count);$count++ ?>" type="text" placeholder="От"></div>
                    <div class="InputBox"> <input name="<?php echo($property[2])?>"
                        id="slider-time<?php echo($count);?>" type="text" placeholder="До">
                    </div>
                  </div>

                  <div id="time-range">

                    <div class="sliders_step1">
                      <div id="slider-range<?php echo($count);?>"></div>
                    </div>
                  </div>
                </div>
                <script>
                 create_new_range(<?php
                 $resss = select_q($property[3]);
                    echo($resss['min']);
                  ?>, <?php
                    echo($resss['max']);
                  ?>);
                   //create_new_range(0,1000);
                </script>

                <?php //endforeach;
              }
              else if($property[1]=="1"){ ?>
                <div class="switch_box">
                  <span>НЕТ</span>
                  <div class="button r" id="button-1">
                    <input type="checkbox" name = "1" class="checkbox_sw">
                    <div class="knobs"></div>
                    <div class="layer"></div>
                  </div>
                  <span>ДА</span>
                </div>


                <?php }
                ?>
              </div>
            </div>

            <?php
              endforeach;
              
              ?>


          </div>

        </div>
        <div class="results">
          <div class="topProperti">
            <div>
              <label class="container_check_box">Товар есть в наличии
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="select-box">

              <label for="select-box1" class="label select-box1"><span class="label-desc" style = "font-size: 17px;">Популярные</span> </label>
              <select id="select-box1" class="select" value = "Choice 2">
                <option value="Choice 1">Популярные</option>
                <option value="Choice 2">Дорогие</option>
                <option value="Choice 3">Дешёвые</option>
                <option value="Choice 3">Новые</option>
              </select>

            </div>
          </div>


          <div class="contentt">
            <?php

              // $product_property = get_property($id);
              foreach ($products as $property):
              ?>
            <div class="col">
              <div style="height: 50px;">
                <img class="discount" src="img/cred.svg" alt="">
              </div>

              <div style="height: 300px; display: flex;">
                <a href = "product.php?id=<?php echo $property['id'];?>&type=<?php  echo $id; ?>"  class="midCenter">
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
                    <a href="product.php"><img src="img/click.svg" alt=""></a>
                  </div>
                </div>
                <div class="to_basket">
                  <div style="display: flex;height: 78px;">
                    <a onclick="<?php
                    if(isset($_SESSION['basket'])){
                       $is_true = false;
                        foreach($_SESSION['basket'] as $item):
                         
                          if($property['id'] == $item['id']&& $item['id_type'] == $id)
                            $is_true = true;
                        endforeach;
                         if(!$is_true)
                            echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'".$obj->{'0'}."','img".$property['id']."',".$id.",".count($_SESSION['basket']).")");
                          else
                            echo('');
                      }else
                      {
                         if(!$is_true)
                            echo("open_basket(".$property['id'].",'".$property['name']."',".$property['cost'].",".$property['count'].",'". $obj->{'0'}."','img".$property['id']."',".$id.",".count($_SESSION['basket']).")");
                          else
                            echo('');
                      }
                    ?>">

                      <img id ="<?php echo("img".$property['id'])?>" src="<?php
                      
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
            <?php
              endforeach;
              ?>


            <!-- <div class="row">
                            <div class="left_row">
                                <a href="#"><img src="img/noteBookTest.png" alt=""></a>

                            </div>
                            <div class="mid_row">
                                <h2>Ноутбук Lenovo IdeaPad S340-15IWL 81N800M4RE</h2>
                                <p>Тип операционной системы <samp>Windows</samp> </p>
                                <p>Диоганаль экрана 15,6</p>
                                <p>Серия процессора Intel Core i5</p>

                            </div>
                            <div class="right_row"></div>

                        </div> -->
          </div>

        </div>

      </div>
    </div>
    <div class="conteiner">
      <div class="showSortValue">
        <img src="img/delete.svg" alt="" class="closeShowSort">
        <div class="showSortValueButton" name = "<?php echo $id?>"><span>Показать</span></div>
      </div>

      <?php
        include_once "bottomMenu.php"
    ?>
  </section>
  <div id="overlay"></div>
  <div id="popup">


  </div>

  <section style="margin-top: 1000px;">

  </section>

  <script src="js/contentLoader.js"></script>
  <script src="js/content.js"></script>
  <script src="js/open_basket.js"></script>
</body>

</html>