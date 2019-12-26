<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/basket.css" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <title>Document</title>
</head>

<body>
 <?php
        include_once "header.php"
    ?>
  <section>
    <div class="conteiner">
      <div id="popup">
        <div class="popup_content">
          <div class="header_panel">
            <h2>В вашей корзине следующие товары (<?php echo(count($_SESSION['basket']));?> шт.)</h2>
          <div class="delete_btn" onclick= "delete_all_from_b()">Очистить корзину</div>
          </div>
          <hr>
          
          <?php
              if(isset($_SESSION['basket'])){

          ?>
          <table class="basket_table">
            <tr>
              <th></th>
              <th>Товары</th>
              <th>Стоимость</th>
              <th>Кол-во</th>
              <th>Итого</th>
            <tr>
              <?php
              //var_dump($_SESSION['basket']);
                foreach($_SESSION['basket'] as $data):
              ?>
            <tr class = "TEST2">
              <td width=70px ><div class = "image_p">
                 <img src="<?php echo($data['img']);?>" alt=""
                  height=150px>
              </div> </td>
              <td width=250px> <a href="#"><?php echo($data['name']);?></a>
                <div class="delete_btn" onclick= "delete_from_b(<?php echo $data['id'] ?>,<?php echo $data['id_type'] ?>)">Удалить из корзины</div>
              </td>
              <td class = "TEST3"> <span class="costt"><?php echo($data['cost']);?></span> </td>
              <td class = "TEST1">
                <div class="counter clearfix" name ="kok">
                  <div class="count_minus"><img src="img/minus.svg" name ="kok" alt=""></div>
                  
                  <div class="count" name="<?php echo($data['count']);?>">2</div>
                  <div class="count_plus"><img src="img/plus.svg" alt=""></div>
                </div>
              </td>
              <td class = "TEST4"><span class="summ">20 000</span></td>
            </tr>
            <?php
              endforeach;
            ?>
          </table>
           <?php
              }else{
              
          ?>
          <div>ПУСТО</div>
          <?php
              }
              
          ?>
          <!-- <div class="bottom_btns">
            <div class="start_lable">В корзине 6 товаров на сумму 9 082.00 руб.</div>
            <div class="mid_btn">Вернуться к покупкам</div>
            <div class="end_btn"><img src="img/basketwhite.svg" alt="">Переити в корзину</div>
          </div> <img class="bascket_close" src="img/deletegrey.svg" alt=""> -->
        </div>
      </div>
    </div>
  </section>
  <script>
    $(document).on('click','.count_plus', (a) => {
      let obj_count = a.target.parentElement.parentElement.childNodes[3]; 
      let obj_price = a.target.parentElement.parentElement.parentElement.parentElement.childNodes[5].childNodes[1]; 
      let obj_summ = a.target.parentElement.parentElement.parentElement.parentElement.lastElementChild.childNodes[0]; 
      chenge_count(1,obj_count,obj_price,obj_summ);
    });
    $(document).on('click','.count_minus', (a) => {
      // let obj_count = $(this); 
      
      let obj_count = a.target.parentElement.parentElement.childNodes[3]; 
      let obj_price = a.target.parentElement.parentElement.parentElement.parentElement.childNodes[5].childNodes[1];
      let obj_summ = a.target.parentElement.parentElement.parentElement.parentElement.lastElementChild.childNodes[0]; 
      chenge_count(-1,obj_count,obj_price,obj_summ);
    });
    function chenge_count(value,target,obj_price,obj_summ){
      // let obj_count = $('.count'); 
  
      let count = Number(target.innerHTML);
      let max = target.getAttribute('name');
      //console.log(max);
      if (count + value > 0 && count + value <= max){
        count+=value;
        target.innerHTML = count;
        let cost = Number(obj_price.innerHTML);
        obj_summ.innerHTML = count*cost;
      } 
    }
    function delete_from_b(id,id_type){
      $.ajax({
      url: 'basket_operation.php',
      data: {
        operation: 'delete',
        id: id,
        id_type: id_type
      }, //sort_id=pricea
      type: 'get',
      success: function (html) {
       
      }
      });
      location.reload()
    }
    function delete_all_from_b() {
       $.ajax({
      url: 'basket_operation.php',
      data: {
        operation: 'delete_all'
      }, //sort_id=pricea
      type: 'get',
      success: function (html) {
       
      }
      });
      location.reload()
    }

  </script>
</body>

</html>