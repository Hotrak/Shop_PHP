$(document).ready(function () {

});

function send_ajax($id, $sort, $order = "") {
  console.log("Sending...");
  // $id = 1;
  // $sort = "";
  $order = "";
  var id = 1;
  // $("#fon").css({
  //   'display': 'block'
  // });
  $.ajax({
    url: 'getGoods.php',
    data: {
      id: $id,
      sort: $sort,
      order: $order
    }, //sort_id=pricea
    type: 'get',
    success: function (html) {

      $(".contentt").html(html);
    }
  });



  $(".closeShowSort").click(function () {
    $(".showSortValue").css({
      'display': 'none'
    })
  });
}