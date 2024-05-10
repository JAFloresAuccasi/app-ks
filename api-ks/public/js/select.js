function myFunction_test(id){
    var i = $(".panel-rows .form-row").length + 1;
    if(i == 6){
        alert("se ha excedido");
        return false;
    }
    var countries = $(".countries").val();
    countries = JSON.parse(countries);
    var html_options = "";
    
    $.each(countries, function (ind, elem) {
       /*  var select = ''
        if(ind % 2){
            select = 'selected="selected"';
        } */
        // "+select+"
        html_options = html_options + "<option value='"+ elem +"'>"+ elem +"</option>";
    });
    
    console.log(html_options);

    $(".panel-rows").append(
        "<div class='col-lg-12 form-row rows-country'> " + '\n' +
            "<div class='form-group col-md-7'>" + '\n' +
                "<label class='form-check-label text-admin2-color font-weight-bold mb-2'>Select Country</label> " + '\n' +
                "<div class='input-group mb-3'> " + '\n' +
                    "<select class='selectpicker country' multiple data-live-search='true' name='data["+ i +"][country][]'>"+ html_options +"</select>" + '\n' +
                "</div>" + '\n' +
            "</div>" + '\n' +
            "<div class='form-group col-md-4'>"+ '\n' +
                "<label class='form-check-label text-admin2-color font-weight-bold'>Entry Age</label>"+ '\n' +
                "<input type='number' class='form-control age' required placeholder='Year(s)' 'min='15' max='120' name='data["+ i +"][age]' value=''>"+ '\n' +
            "</div>"+ '\n' +
            "<div class='form-group col-md-1' style='top: 0px; right: 0px;'>"+ '\n' +
                "<button class='atf-button' id='delete-user' title='delete' style='font-size: 1.3rem ;margin-left: 5px;margin-right: 5px;margin-top: 35px;background-color: white;border: none;'>"+ '\n' +
                    "<i class='fa-solid fa-trash fa-lg' style='color: #ea4850; margin-top: 14px;'></i>"+ '\n' +
                "</button>" + '\n' +
            "</div>" + '\n' +
            "<input type='hidden' class='form-control id' name='data["+ i +"][id]' value=''>"+ '\n' +
        "</div>");
    $('.selectpicker').selectpicker();
}