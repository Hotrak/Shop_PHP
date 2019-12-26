 $('.closeShowSort').on("click", () => {
   close_short_button();
 })

 $('.showSortValueButton').on("click", () => {
   let str = " WHERE id_brand %% 'jj9f4' ";
   let text_bloak = "";
   let bgst = " ";
   for (let key in sort_q) {
     text_bloak += " and /";
     let count = 0;
     for (let key2 in sort_q[key]) {
       if (key2 != "#1" && key2 != "#2") {
         if (count == 0)
           text_bloak += key + " = " + key2;
         else
           text_bloak += " or " + key + " = " + key2;
         count++;
       }
       if (key2 == "#1" || key2 == "#2") {
         if (count == 0)
           text_bloak += key + " between " + sort_q[key][key2] + " and ";
         else
           text_bloak += sort_q[key][key2];
         count++;
       }
       if (key2 == "#3") {
         if (count == 0)
           text_bloak += key + " between " + sort_q[key][key2] + " and ";
         else
           text_bloak += sort_q[key][key2];
         count++;
       }

     }
     str += text_bloak;
     text_bloak = "";
     str += " |";
   }
   let id_name = $('.showSortValueButton').attr('name');
  //  alert(id_name);
   //str=" WHERE laptop.id_brand = 2";
   if (Object.keys(sort_q) !== 0)
     send_ajax(id_name, str);

   console.log(str);
   console.log(sort_q);
   close_short_button();
 })

 function len(arr) {

 }
 //let sort_q = [];
 var arr1 = new Map();
 $("input:checkbox").on("change", function () {

   $(this).prop("checked", function (i, val) {
     let data = $(this).offsetParent().offsetParent().attr('data');
     console.log("DATA: " + data);
     let name = $(this).attr('name');
     if (!val) {
       delete sort_q[data][name];
       console.log("LEN: " + sort_q[data].length);
       if (Object.keys(sort_q[data]) == 0) {

         delete sort_q[data];
       }

       // delete sort_q[data];
     } else {

       if (typeof sort_q[data] == 'undefined') {
         sort_q[data] = [];
       }
       sort_q[data][name] = $(this).val();
     }
     console.log("_SHOW_");
     show_sort_button();

     //show_sort_button();

     console.log(sort_q);

   });
 })
//  let basket_items_id = [];


//  function open_basket(id, name = "gg", cost = 2, count, img, id_img, id_type) {
//    console.log("ID: " + id);
   
//    for (let i = 0; i < basket_items_id.length; i++) {
//      if (basket_items_id[i]['id'] == id && basket_items_id[i]['id_type'] == id_type)
//         return;
     
//    }
//    let temp = [];
//    temp['id'] = id;
//    temp['id_type'] = id_type; 
//    basket_items_id.push(temp);
//    console.log(basket_items_id);

//    $('#popup').html('<div class="popup_content"><h2>Ваш товар успешно добавлен в корзину</h2><hr><table class="basket_table"><tr> <th></th> <th>Товары</th> <th>Стоимость</th> <th>Кол-во</th> <th>Итого</th> </tr> <tr> <td width=70px> <img src="' + img + '" alt="" height=150px> </td> <td width=250px> <a href="#">' + name + '</a> <div class="delete_btn">Удалить из корзины</div> </td> <td> <span class = "costt">' + cost + '</span> </td> <td> <div class="counter clearfix"> <div class="count_plus"><img src="img/plus.svg" alt=""></div> <div class="count" name = "' + count + '">1</div> <div class="count_minus"><img src="img/minus.svg" alt=""></div> </div> </td> <td><span class = "summ">' + (count * cost) + '</span></td> </tr> </table> <div class="bottom_btns"> <div class="start_lable">В корзине 6 товаров на сумму 9 082.00 руб.</div> <div class="mid_btn">Вернуться к покупкам</div> <div class="end_btn"><img src="img/basketwhite.svg" alt="">Переити в корзину</div> </div> <img class="bascket_close" src="img/deletegrey.svg" alt=""> </div>');
//    $('#popup').css({
//      'display': 'flex'
//    })
//    $('#overlay').css({
//      'display': 'flex'
//    })
//    $('body').css({
//      'overflow': 'hidden'
//    })
//    $("#" + id_img).attr("src", "img/cart.png");
//    // $_SESSION['basket'][] = $property['id'];
//    $.ajax({
//      url: 'basket_operation.php',
//      data: {
//        operation: 'add',
//        id: id,
//        count: count,
//        img: img,
//        cost: cost,
//        name: name,
//        id_type: id_type
//      }, //sort_id=pricea
//      type: 'get',
//      success: function (html) {

//        alert(html);
//      }
//    });
//    let cart = $('#basket_count');
//    let card_count = Number(cart.text());
//    cart.html(card_count + 1);

//  }
//  $(document).on('click', '.bascket_close', function () {

//    $('#popup').css({
//      'display': 'none'
//    })
//    $('#overlay').css({
//      'display': 'none'
//    })
//    $('body').css({
//      'overflow': 'auto'
//    })

//  });

 $(document).on('click', '.checkbox', function () {
   console.log("HHH " + $(this).attr('class'));
   // $('input:checkbox').prop('checked','unchecked');
   // alert("adssad!!");
   let h = $(this).offsetParent();
   h.children("input:checkbox").prop("checked", function (i, val) {
     // aleKUrt("asdasd");

     if (!val) {
       h.children(".content").css({
         'max-height': '350px',
         'transition': 'max-height 500ms ease-in-out'
       })
     } else {
       h.children(".content").css({
         'max-height': '1px',
         'transition': 'max-height 500ms ease-in-out'
       })
     }
     return !val;
   });
 });
//  $(document).on('click', '.count_plus', function () {
//    chenge_count(1);
//  });
//  $(document).on('click', '.count_minus', function () {
//    chenge_count(-1);
//  });

//  function chenge_count(value) {
//    let obj_count = $('.count');
//    let count = Number(obj_count.text());
//    let max = obj_count.attr('name');
//    if (count + value > 0 && count + value <= max) {
//      count += value;
//      $('.count').html(count);
//      let cost = Number($('.costt').text());
//      $('.summ').html(count * cost);
//    }
//  }

 $("#show_all").click(function () {
   $(".content").css({
     'max-height': '350px',
     'transition': 'max-height 500ms ease-in-out'
   })

 });


 $("select").on("click", function () {

   $(this).parent(".select-box").toggleClass("open");

 });

 $(document).mouseup(function (e) {
   var container = $(".select-box");

   if (container.has(e.target).length === 0) {
     container.removeClass("open");
   }
 });

 $("select").on("change", function () {

   var selection = $(this).find("option:selected").text(),
     labelFor = $(this).attr("id"),
     label = $("[for='" + labelFor + "']");

   label.find(".label-desc").html(selection);

 });

 function show_sort_button() {
   $('.showSortValue').css({
     'display': 'flex'
   })
 }

 function close_short_button() {
   $('.showSortValue').css({
     'display': 'none'
   })
 }