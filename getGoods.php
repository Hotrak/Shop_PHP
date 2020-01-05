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
      $discount_obj = "";

      
    if($item["discount"] != 0){
      $discount_obj = '<img src="img/lower_cost.svg" alt="">
            <div class="discount_value"><span>-'.$item["discount"].'%</span></div>';
    }else
     $discount_obj = '';

     $cost_obj = '';
     if($item["discount"] != 0){
       $dis_cost =  $item['cost']/100 * $item['discount'];
        $cost_with_dis =$item['cost'] - $dis_cost;
       $cost_obj = '<div class="last_price_p"> <span style="font-size: 20px;"><strike>'.price_format_int($item['cost']).'</strike>
                <sup>'.price_format_frac($item['cost']).'</sup></span>
                <div class="dis_cost_p"><span>-'.$dis_cost.'</span></div>
              </div>
              |&nbsp
              <span>'.price_format_int($cost_with_dis).'<sup>.'. price_format_frac($cost_with_dis).'</sup></span>';
     }else{
       $cost_obj= ' <span>'.price_format_int($item['cost']).'<sup>.'.price_format_frac($property['cost']).'</sup></span>';
     }

  printf('<div class="col">
    <div class="discount_p">
     %s
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
      <div class="cost_block">
        %s
      </div>
      <div class="buy">
        <div style="display: flex;height: 78px;">
          <a href="product.php"><img src="img/click.svg" alt=""></a>
        </div>
      </div>
      <div class="to_basket">
        <div style="display: flex;height: 78px;">
          <a onclick = "%s" href="#"><img class = "%s" src="%s" alt=""></a>
        </div>
      </div>
    </div>
    <div class="bottom_menu">
      <a class="leftButton" href="#"><img src="img/balancegreay.svg" alt=""></a>
      <a class="rightButton" href="#"><img src="img/heartgreay.svg" alt=""></a>

    </div>
  </div>',$discount_obj,$item['id'],$item['id_typetech'],$img,$item['name'],$cost_obj,$event,$img_id,$basket_img);
  }
  exit();
  
  }
  else {
  $goods = get_goods($db);
}
?>