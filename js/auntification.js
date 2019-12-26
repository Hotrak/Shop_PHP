let error_style = "2px solid red";
let formIN = document.forms.signIn;
let formUP = document.forms.signUp;

formIN.onsubmit = function (e) {
  e.preventDefault();

  let login = this.elements.email;
  let password = this.elements.password;

  let login_value = login.value;
  let password_value = password.value;



  $.ajax({
    url: 'auntification.php',
    data: {
      login: login_value,
      password: password_value
    }, //sort_id=pricea
    type: 'get',
    success: function (html) {

      alert(html);
      let mes = html;
      if (mes == 1) {

        close_sign_menu();
        let inp_menu = $('#input_menu');
        inp_menu.html(login);
      } else
        $('#sign_in_logs').html('Не верный логин или пароль')
    }
  });
};

formUP.onsubmit = function (e) {
  e.preventDefault();

  //var faults = $('input').filter(function () {
  // находим не заполненные обязательные элементы input
  //   return $(this).data('required') && $(this).val() === "";
  // }).css("border", "2px solid red"); // выделяем это поле красным
  // if (faults.length) return false; // если одно из полей не заполнено, отменяем отправку

  let login = this.elements.email;
  let password1 = this.elements.password1;
  let password2 = this.elements.password2;
  //let phone = this.elements.phone;

  let login_value = login.value;
  let password_value1 = password1.value;
  let password_value2 = password2.value;
  //let phone_value = phone.value;

  if (!login.value) {
    login.style.border = "2px solid red";
    return false;
  }

  if (!password1.value) {
    password1.style.border = "2px solid red";
    return false;
  }

  if (password1.value != password2.value) {
    password2.style.border = "2px solid red";
    return false;
  }

  // let phone = this.elements.phone.value;
  let phone = "123";
  $.ajax({
    url: 'auntification.php',
    data: {
      login: login_value,
      password: password_value1,
      phone: phone
    }, //sort_id=pricea
    type: 'get',
    success: function (html) {

      alert(html);
      let mes = Number(html);
      if (mes == 1) {
        close_sign_menu();
      } else{
        login.style.border = "2px solid red";
        $('#sign_up_logs').html('логин уже занят')
        return false;
      }
    }
  });
};

$("#close_sign_menu1").click(() => {
  close_sign_menu();
});
$("#close_sign_menu2").click(() => {
  close_sign_menu();
});

$("#input_menu").click(() => {
  open_sign_menu();
});

function open_sign_menu() {
  $("#popup_menu").css({
    'display': 'block'
  });
  $("#sign_menu").css({
    'display': 'block'
  });
}

function close_sign_menu() {
  $("#popup_menu").css({
    'display': 'none'
  });
  $("#sign_menu").css({
    'display': 'none'
  });
}