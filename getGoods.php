<?php
session_start();
require_once "fun.php";
if($_GET['id']) {
  $id = $_GET['id'];
 
  $sort = strip_tags($_GET['sort']);
  $sort = str_replace("%%","<>",$sort);
  $sort = str_replace("/","(",$sort);
  $sort = str_replace("|",")",$sort);
  $order = strip_tags($_GET['order']);
  //var_dump($sort);

  $goods = getGootsShort($id,$sort,$order);
  
  foreach($goods as $item) {
   $json = $item['img'];
    $obj = json_decode($json);
    $img = $obj->{'0'};
    $is_true = false;
    if(isset($_SESSION['basket']))
    foreach($_SESSION['basket'] as $item_bas):
      if($item['id']==$item_bas['id'] && $id  == $item_bas['id_type'])
        $is_true = true;
    endforeach;
    $basket_img = "";
    $event="";
    if(!$is_true){
      $event = "open_basket(".$item['id'].",'".$item['name']."',".$item['cost'].",".$item['count'].",'".$obj->{'0'}."','img".$item['id']."',".$item['id_typetech'].",".count($_SESSION['basket']).")";
      $basket_img = "img/basketwhite.svg";
    } 
    else
      $basket_img = "img/cart.png";

      $img_id = 'img'.$item['id'];
  printf('<div class="col">
    <div style="height: 50px;">
      <img class="discount" src="img/cred.svg" alt="">
    </div>

    <div style="height: 300px; display: flex;">
      <a href = "product.php?id=%s&type=%s"  class="midCenter">
        <!-- img/noteBookTest.png -->

        <img src="%s" alt="">
        <h4>%s</h4>
      </a>
    </div>
    <div class="cred_ras">
      <img src="img/cred.svg" alt="">
      <img src="img/racr12.png" alt="">
    </div>
    <div class="price_menu">
      <div class="cost">
        %s<sup>.00</sup>
      </div>
      <div class="buy">
        <div style="display: flex;height: 78px;">
          <a href="product.php"><img src="img/click.svg" alt=""></a>
        </div>
      </div>
      <div class="to_basket">
        <div style="display: flex;height: 78px;">
          <a onclick = "%s" href="#"><img id = "%s" src="%s" alt=""></a>
        </div>
      </div>
    </div>
    <div class="bottom_menu">
      <a class="leftButton" href="#"><img src="img/balancegreay.svg" alt=""></a>
      <a class="rightButton" href="#"><img src="img/heartgreay.svg" alt=""></a>

    </div>
  </div>',$item['id'],$item['id_typetech'],$img,$item['name'],$item['cost'],$event,$img_id,$basket_img);
  }
  exit();
  
  }
  else {
  $goods = get_goods($db);
}
?>