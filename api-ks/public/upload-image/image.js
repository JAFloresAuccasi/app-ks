(function ($) {
    $(document).ready(function () {
        AdminBlogImage.init();
    });
})(jQuery);

let uploadButtonVisual = document.getElementById("upload-button");
let imageVisual_form = document.getElementById("image-visual-form");
let imageVisual_banner = document.getElementById("image-visual-banner");
let fileNameVisual = document.getElementById("file-name");

let uploadButtonBackground = document.getElementById("upload-button-back");
let imageBackground_form = document.getElementById("image-background-form");
let imageBackground_banner = document.getElementById("hiden_pop_up");
let fileNameBackground = document.getElementById("file-name-back");

var AdminBlogImage = {
    upload_visual: function () {
        uploadButtonVisual.onchange = () => {
            let reader = new FileReader();
            // console.log(reader);
            reader.readAsDataURL(uploadButtonVisual.files[0]);
            reader.onload = () => {
                imageVisual_form.setAttribute("src", reader.result);
                imageVisual_banner.setAttribute("src", reader.result);
            };
            fileNameVisual.textContent = uploadButtonVisual.files[0].name;
        };
    },

    upload_background: function () {
        uploadButtonBackground.onchange = () => {
            let reader = new FileReader();
            // console.log(reader);
            reader.readAsDataURL(uploadButtonBackground.files[0]);
            reader.onload = () => {
                imageBackground_form.setAttribute("src", reader.result);
                imageBackground_banner.style.backgroundImage =
                    "url(" + reader.result + ")";    
                imageBackground_banner.dataset.url = reader.result
                console.log(imageBackground_banner);

                //   init example in jQuery
                //    $('#hiden_pop_up').css('backgroundImage','url('+reader.result+')');
                //    console.log($('#hiden_pop_up'));
                //    end example in jQuery
            };
            fileNameBackground.textContent =
                uploadButtonBackground.files[0].name;
        };
    },

    disabled_enabled_visual: function () {
        $('.disabled',).change(function(){
            if(!$(this).prop('checked')){
              $('#dvOcultar_visual , #dvOcultar_visual_1').hide(500);
          }else{
              $('#dvOcultar_visual , #dvOcultar_visual_1').show(500);
          }
        
        })
    },
    
    disabled_upload_banner: function () {
        $('.disabled_1').change(function(){
            if(!$(this).prop('checked')){
              $('#dvOcultar_banner').hide(500);
              $('#hiden_pop_up').css('background-image','none', 500);
            }else{
                $('#dvOcultar_banner').show(500);
                $('#hiden_pop_up').css('background-image','url('+$('#hiden_pop_up').data("url")+')', 500);
          }
        
        })
    },

    init: function () {
        this.upload_visual();
        this.upload_background();
        this.disabled_enabled_visual();
        this.disabled_upload_banner();
    },
};