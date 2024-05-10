$(document).ready(function () {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  // Cuando haga clic en el usuario en el botón Mostrar
  $('body').on('click', '#delete-user', function () {
    $(this).parent().parent().remove();
    var rows = $(".panel-rows .rows-country");
    //seteo de los elementos que quedan
    $.each(rows, function (ind, elem) {
          var ind = ind + 1;
          $(this).find(".country").attr('name', 'data[' + ind + '][country][]');
          $(this).find(".age").attr('name', 'data[' + ind + '][age]');
          $(this).find(".id").attr('name', 'data[' + ind + '][id]');
  });
    /*if(confirm("¿Estás segura de que quieres eliminar a esta usuario??") == true){
      $.ajax({
          url: userURL,
          type: 'DELETE',
          dataType: 'json',
          success: function(data) {
              alert(data.success);
              trObj.parents("tr").remove();
          }
      });
    }*/
 });
});