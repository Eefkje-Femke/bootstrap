$( document ).ready(function() {
  $("#myCarousel").carousel();

  $("#search").on("keyup", function() {//filterlist
    var input = $(this).val().toLowerCase();//value of input
    $("#table tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(input) > -1)//dit uitleggen
    });
  });

});
