$( document ).ready(function() {
  $("#myCarousel").carousel();
  $(".alert.alert-danger").hide();

  $("#search").on("keyup", function() {//filterlist
    var input = $(this).val().toLowerCase();//value of input
    $("#table tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(input) > -1)//dit uitleggen
    });
  });

  $('#InputFirstName, #InputLastName').on('keyup blur',function(){//Verwijderd alles Behalve A-Z
      var letter = $(this);
      letter.val(letter.val().replace(/[^a-zA-Z]/g,'') );
    });
});

$(function() {
  //verwijderd alle characters BEHAVLE A-Z0-9!!adres
  var input = document.querySelector('input#InputAddress');
  input.addEventListener('keyup', function(e) {
    this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
  });

  //verwijderd alle characters BEHAVLE A-Z0-9!!Postacl code
  var input = document.querySelector('input#InputPostal');
  input.addEventListener('keyup', function(e) {
    this.value = this.value.replace(/[^A-Z0-9]/g, '');
  });

  //check if email contains @,.,a-z+
  var input = document.querySelector('input#InputEmail');
  input.addEventListener('keyup', function(e) {
    email = this.value;
    var reg = new RegExp(/[^@]+@[^\.]+\..+/g);//email regex pattern
    if(reg.test(email) == true){//check if regex and email are equal
      $(".alert.alert-danger").hide();
    }else{
      $(".alert.alert-danger").show();
    }
  });
});
