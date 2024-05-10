(function ($) {
    $(document).ready(function () {
        AdminBlogDE.init();
    });
})(jQuery);

var AdminBlogDE = {
    disabled_enabled_buttons: function () {
        $('.disabled_buttons',).change(function(){
            if(!$(this).prop('checked')){
              $('#disabled_buttons_settings , #age_prueba_1').hide(500);
          }else{
              $('#disabled_buttons_settings , #age_prueba_1').show(500);
          }
        })
    },

    disabled_enabled_text: function () {
        $('.aft-disabled-enabled-text',).change(function(){
            if(!$(this).prop('checked')){
              $('#ID_text').hide(500);
          }else{
              $('#ID_text').show(500);
          }
        })
    },
    disabled_enabled_sub_text: function () {
        $('.aft-disabled-enabled-sub-text',).change(function(){
            if(!$(this).prop('checked')){
              $('#ID_sub_text').hide(500);
          }else{
              $('#ID_sub_text').show(500);
          }
        })
    },

    disabled_enabled_optional: function () {
        $('.disabled_optional',).change(function(){
            if(!$(this).prop('checked')){
              $('#disabled_buttons_optional , #age_prueba').hide(500);
          }else{
              $('#disabled_buttons_optional , #age_prueba').show(500);
          }
        })
    },

    init: function () {
        this.disabled_enabled_buttons();
        this.disabled_enabled_optional();
        this.disabled_enabled_text();
        this.disabled_enabled_sub_text();
    },
};