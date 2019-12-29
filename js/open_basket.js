  let basket_items_id = [];
 
 function open_basket(id, name = "gg", cost = 2, count, img, id_img, id_type, basket_count = 1) {
   console.log("ID: " + id);
   
   for (let i = 0; i < basket_items_id.length; i++) {
     try {
       if (basket_items_id[i]['id'] == id && basket_items_id[i]['id_type'] == id_type)
         return;
     } catch (error) {

     }

   }
   

   let temp = [];
   temp['id'] = id;
   temp['id_type'] = id_type; 
   basket_items_id.push(temp);
   console.log(basket_items_id);
   id_imgg = "'" + id_img+"'";
   $('#popup').html('<div class="popup_content"><h2>Ваш товар успешно добавлен в корзину</h2><hr><table class="basket_table"><tr> <th></th> <th>Товары</th> <th>Стоимость</th> <th>Кол-во</th> <th>Итого</th> </tr> <tr> <td width=70px> <img src="' + img + '" alt="" height=150px> </td> <td width=250px> <a href="#">' + name + '</a> <div onclick= "delete_from_b(' + id + ',' + id_type + ',' + id_imgg + ')" class="delete_btn">Удалить из корзины</div> </td> <td> <span class = "costt">' + cost + '</span> </td> <td> <div class="counter clearfix"> <div class="count_minus"><img src="img/minus.svg" alt=""></div> <div class="count" name = "' + count + '">1</div> <div class="count_plus"><img src="img/plus.svg" alt=""></div> </div> </td> <td><span class = "summ">' + (count * cost) + '</span></td> </tr> </table> <div class="bottom_btns"> <div class="start_lable">В корзине <b id = "basket_count_b">0</b> шт. на сумму <b id = "basket_cost_b">0</b> руб.</div> <div class="mid_btn bascket_close">Вернуться к покупкам</div> <div class="end_btn"><a href = "basket.php"><img src="img/basketwhite.svg" alt="">Переити в корзину</a></div> </div> <img class="bascket_close bascket_close_img" src="img/deletegrey.svg" alt=""> </div>');
   $('#popup').css({
     'display': 'flex'
   })
   $('#overlay').css({
     'display': 'flex'
   })
   $('body').css({
     'overflow': 'hidden'
   })
   $("#" + id_img).attr("src", "img/cart.png");
   // $_SESSION['basket'][] = $property['id'];
   $.ajax({
     url: 'basket_operation.php',
     data: {
       operation: 'add',
       id: id,
       count: count,
       count_items: 1,
       img: img,
       cost: cost,
       name: name,
       id_type: id_type
     }, //sort_id=pricea
     type: 'get',
     success: function (html) {
      let result = []
      result = html.split(' ');//match(/(\d+)/)
      // alert(html)
      console.log(result);
      $("#basket_count_b").html(result[2])
      $("#basket_cost_b").html(result[3])
      //  alert(html);
     }
   });
   let cart = $('#basket_count');
   let card_count = Number(cart.text());
   cart.html(card_count + 1);
 }

 $(document).on('click', '.bascket_close', function () {

   $('#popup').css({
     'display': 'none'
   })
   $('#overlay').css({
     'display': 'none'
   })
   $('body').css({
     'overflow': 'auto'
   })
 });

  $(document).on('click', '.count_plus', function () {
    chenge_count(1);
  });
  $(document).on('click', '.count_minus', function () {
    chenge_count(-1);
  });

  function chenge_count(value) {
    let obj_count = $('.count');
    let count = Number(obj_count.text());
    let max = obj_count.attr('name');
    if (count + value > 0 && count + value <= max) {
      count += value;
      $('.count').html(count);
      let cost = Number($('.costt').text());
      $('.summ').html(count * cost);
      console.log(count);
      $.ajax({
        url: 'basket_operation.php',
        data: {
          operation: 'update',
          id: basket_items_id[basket_items_id.length-1]['id'],
          id_type: basket_items_id[basket_items_id.length - 1]['id_type'],
          count_items: count
        }, //sort_id=pricea
        type: 'get',
        success: function (html) {

          alert(html);
        }
      });
    }
  }

  function delete_from_b(id,id_type,id_img){
    $.ajax({
      url: 'basket_operation.php',
      data: {
        operation: 'delete',
        id: id,
        id_type: id_type
      }, //sort_id=pricea
      type: 'get',
      success: function (html) {
       
          alert(html);
      }
    });
    alert(id_img);
    $("#" + id_img).attr("src", "img/basketwhite.svg");

     for (let i = 0; i < basket_items_id.length; i++) {
       if (basket_items_id[i]['id'] == id && basket_items_id[i]['id_type'] == id_type)
         delete basket_items_id[i]
         console.log(basket_items_id);
         console.log("B.LENGTH "+ basket_items_id.length);
     }
    

  }