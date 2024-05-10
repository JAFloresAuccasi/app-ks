const colors_picker = [
    'rgba(244, 67, 54, 1)',
    'rgba(233, 30, 99, 0.95)',
    'rgba(156, 39, 176, 0.9)',
    'rgba(103, 58, 183, 0.85)',
    'rgba(63, 81, 181, 0.8)',
    'rgba(33, 150, 243, 0.75)',
    'rgba(3, 169, 244, 0.7)',
    'rgba(0, 188, 212, 0.7)',
    'rgba(0, 150, 136, 0.75)',
    'rgba(76, 175, 80, 0.8)',
    'rgba(139, 195, 74, 0.85)',
    'rgba(205, 220, 57, 0.9)',
    'rgba(255, 235, 59, 0.95)',
    'rgba(255, 193, 7, 1)'
];

const data_picker = {
    el: '.color-picker',
    theme: 'classic', // or 'monolith', or 'nano'
    swatches: colors_picker,
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,
        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
}

// HEADING //
function changeValue(newColor) {
    var valor = document.getElementById('heading_text').value;
    document.getElementById('ID_text').innerHTML = valor;
}

function TextWeight(selectWeight) {
    var listValue = selectWeight.options[selectWeight.selectedIndex].text;
    document.getElementById("ID_text").style.fontWeight = listValue;
  }

function setFont(txt) {
    $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', 'https://fonts.googleapis.com/css?family=' + txt.value));
    document.getElementById('ID_text').style.fontFamily= txt.value;
}

document.querySelector("#heading_text_size").addEventListener('change', function () {
    document.querySelector("#ID_text").style.fontSize = this.value + 'px';
})

const pickr_text_color = Pickr.create(data_picker);
pickr_text_color.on('change', (color, source, instance)=> {
    var color = color.toHEXA().toString();
    document.getElementById("text_color").style.background = color;
    document.getElementById("result_text_color").value = color;
    document.getElementById("ID_text").style.color = color;
});
// END HEADING //


// SUB HEADING //
function changeValueTest(newColor) {
    var valor = document.getElementById('sub_heading_text').value;
    document.getElementById('ID_sub_text').innerHTML = valor;
}

function SubTextWeight(selectSubWeight) {
    var listValue = selectSubWeight.options[selectSubWeight.selectedIndex].text;
    document.getElementById("ID_sub_text").style.fontWeight = listValue;
  }

function setFont_1(txt_1) {
    $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', 'https://fonts.googleapis.com/css?family=' + txt_1.value));
    document.getElementById('ID_sub_text').style.fontFamily= txt_1.value;
}

document.querySelector("#sub_heading_text_size").addEventListener('change', function () {
    document.querySelector("#ID_sub_text").style.fontSize = this.value + 'px';
})

const pickr_sub_text_color = Pickr.create(data_picker);
pickr_sub_text_color.on('change', (color, source, instance)=> {
    var color = color.toHEXA().toString();
    document.getElementById("sub_text_color").style.background = color;
    document.getElementById("result_sub_text_color").value = color;
    document.getElementById("ID_sub_text").style.color = color;
});
// END SUB HEADING //

// INIT BUTTON  //
function changeButtonText(newColor) {
    var valor = document.getElementById('button_1_text').value;
    document.getElementById('IDbutton_global').innerHTML = valor;
/*$( "#button_1_text" ).keyup(function() {
    var text = $(this).val();
    $('#IDbutton_global').html(text);
});*/
}

document.querySelector("#button_1_border_radius").addEventListener('change', function () {
    document.querySelector("#IDbutton_global").style.borderRadius = this.value + 'px';
})

document.querySelector("#button_1_border_width").addEventListener('change', function () {
    document.querySelector("#IDbutton_global").style.borderWidth = this.value + 'px';
})

const pickr_button = Pickr.create(data_picker);
pickr_button.on('change', (color, source, instance) => {
    var color = color.toHEXA().toString();
    document.getElementById("panel_button").style.background = color;
    document.getElementById("result_button").value = color;
    document.getElementById("IDbutton_global").style.color = color;
});

const pickr_button_background = Pickr.create(data_picker);
pickr_button_background.on('change', (color, source, instance) => {
    var color = color.toHEXA().toString();
    document.getElementById("panel_button_background").style.background = color;
    document.getElementById("result_button_background").value = color;
    document.getElementById("IDbutton_global").style.background = color;
});

const pickr_button_border = Pickr.create(data_picker);
pickr_button_border.on('change', (color, source, instance) => {
var color = color.toHEXA().toString();
document.getElementById("panel_button_border").style.background = color;
document.getElementById("result_button_border").value = color;
document.getElementById("IDbutton_global").style.borderColor = color;

});
// END BUTTON //

// INIT BUTTON 2 //
function changeButtonText_2(newColor) {
    var valor = document.getElementById('button_2_text').value;
    document.getElementById('IDbutton_2_global').innerHTML = valor;
}
document.querySelector("#button_2_border_radius").addEventListener('change', function () {
    document.querySelector("#IDbutton_2_global").style.borderRadius = this.value + 'px';
})
document.querySelector("#button_2_border_width").addEventListener('change', function () {
    document.querySelector("#IDbutton_2_global").style.borderWidth = this.value + 'px';
})

const pickr_button_2 = Pickr.create(data_picker);
pickr_button_2.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("button_2_color").style.background = color;
document.getElementById("result_button_2_color").value = color;
document.getElementById("IDbutton_2_global").style.color = color;
});

const pickr_background_2 = Pickr.create(data_picker);
pickr_background_2.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("button_2_background").style.background = color;
document.getElementById("result_button_2_background").value = color;
document.getElementById("IDbutton_2_global").style.background = color;
});

const pickr_border_2 = Pickr.create(data_picker);
pickr_border_2.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("button_2_border").style.background = color;
document.getElementById("reslut_button_2_border").value = color;
document.getElementById("IDbutton_2_global").style.borderColor = color;
});
// END BUTTON 2 //


// INIT OPTIONALS BUTTONS 
document.querySelector("#button_border_radius").addEventListener('change', function () {
    document.querySelector("#birthmonth").style.borderRadius = this.value + 'px';
    document.querySelector("#birthday").style.borderRadius = this.value + 'px';
    document.querySelector("#birthyear").style.borderRadius = this.value + 'px';
})

document.querySelector("#button_border_width").addEventListener('change',function (){
    document.querySelector("#birthmonth").style.borderWidth = this.value + 'px';
    document.querySelector("#birthday").style.borderWidth = this.value + 'px';
    document.querySelector("#birthyear").style.borderWidth = this.value + 'px';
})

const pickr_optional_color = Pickr.create(data_picker);
pickr_optional_color.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_text").style.background = color;
document.getElementById("reslut_optional_text").value = color;
document.getElementById("birthmonth").style.color = color;
// document.getElementById("birthday").style.color = color;
// document.getElementById("birthyear").style.color = color;

});

const pickr_optional_background = Pickr.create(data_picker);
pickr_optional_background.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_background").style.background = color;
document.getElementById("reslut_optional_background").value = color;
document.getElementById("birthmonth").style.background = color;
document.getElementById("birthday").style.background = color;
document.getElementById("birthyear").style.background = color;
});

const pickr_optional_border = Pickr.create(data_picker);
pickr_optional_border.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_border").style.background = color;
document.getElementById("reslut_optional_border").value = color;
document.getElementById("birthmonth").style.borderColor = color;
document.getElementById("birthday").style.borderColor = color;
document.getElementById("birthyear").style.borderColor = color;
});
// END OPTIONALS BUTTONS 

//INIT ENTER OPTIONALS BUTTON
function changeButtonText_enter(newColor) {
    var valor = document.getElementById('text_button').value;
    document.getElementById('enter').innerHTML = valor;
}

document.querySelector("#enter_button_border_radius").addEventListener('change', function () {
    document.querySelector("#enter").style.borderRadius = this.value + 'px';

})

document.querySelector("#enter_button_border_width").addEventListener('change',function (){
    document.querySelector("#enter").style.borderWidth = this.value + 'px';

})
const pickr_optional_enter_color = Pickr.create(data_picker);
pickr_optional_enter_color.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_enter_text").style.background = color;
document.getElementById("reslut_optional_enter_text").value = color;
document.getElementById("enter").style.color = color;

});

const pickr_optional_enter_background = Pickr.create(data_picker);
pickr_optional_enter_background.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_enter_background").style.background = color;
document.getElementById("reslut_optional_enter_background").value = color;
document.getElementById("enter").style.background = color;
});

const pickr_optional_enter_border = Pickr.create(data_picker);
pickr_optional_enter_border.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("optional_enter_border").style.background = color;
document.getElementById("reslut_optional_enter_border").value = color;
document.getElementById("enter").style.borderColor = color;
});
//END ENTER OPTIONALS BUTTON


// Configuraciones emergentes //

// Mensaje de restricción => we don't have code yet //
// Cookie lifetime (en días) => we don't have code yet //

document.querySelector("#width").addEventListener('change', function () {
    document.querySelector("#pop_up").style.width = this.value + 'rem';
})

document.querySelector("#border_radius").addEventListener('change', function () {
    document.querySelector("#pop_up").style.borderRadius = this.value + 'px';
})

const pickr_Pop_Bck_color = Pickr.create(data_picker);
pickr_Pop_Bck_color.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("pop_background_color").style.background = color;
document.getElementById("result_pop_background_color").value = color;
document.getElementById("pop_up").style.background = color;
});

document.querySelector("#border_width_test").addEventListener('change', function () {
    document.querySelector("#pop_up").style.borderWidth = this.value + 'px';
})

const pickr_Pop_border_color = Pickr.create(data_picker);
pickr_Pop_border_color.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("pop_border_color").style.background = color;
document.getElementById("result_border_color").value = color;
document.getElementById("pop_up").style.borderColor = color;
});

const pickr_image_background = Pickr.create(data_picker);
pickr_image_background.on('change', (color, source, instance)=> {
var color = color.toHEXA().toString();
document.getElementById("image_background").style.background = color;
document.getElementById("result_image_background").value = color;
document.getElementById("hiden_pop_up").style.background = color;
});

let color_picker=document.querySelector("#result_image_background");
let color_wrapper=document.querySelector("#hiden_pop_up");
let banner_background_opacity=document.querySelector("#banner_background_opacity");

function set_color(el){
    color_wrapper.style.backgroundColor=color_picker.value + (banner_background_opacity.value == 255 ? "" : parseInt(banner_background_opacity.value).toString(16).padStart(2, "0"));
}

document.querySelector("#top_bottom_padding").addEventListener('change', function () {
    document.querySelector("#pop_up").style.paddingBottom = this.value + 'px';
    document.querySelector("#pop_up").style.paddingTop = this.value + 'px';
})

document.querySelector("#left_right_padding").addEventListener('change', function () {
    document.querySelector("#pop_up").style.paddingLeft = this.value + 'px';
    document.querySelector("#pop_up").style.paddingRight = this.value + 'px';
})

// END URL_CHANGE
function changeButtonText_1(newColor) {
    var valor = document.getElementById('Redirect_URL').value;
    document.getElementById('URL_2').value = valor;
}
function changeButtonText_3(newColor) {
    var valor = document.getElementById('URL_2').value;
    document.getElementById('Redirect_URL').value = valor;
}
// END URL_CHANGE