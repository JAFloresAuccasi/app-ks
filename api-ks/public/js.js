(function ($) {
    $(document).ready(function () {
      AdminPlus.init();
    });
  })(jQuery);
  var checkboxes = document.querySelectorAll("input[data-check='1']");
  var checkbox = document.querySelectorAll('[name="select_change"]');
  var AdminPlus = {
    saveCreate_editWidgets: function () {
      $("#at_header_create_edit_widgets").click(function (e) {
        e.preventDefault();
        $("#at_create_edit_widgets").trigger("click");
      });
    },
    // saveEditGlobal: function () {
    //   $("#at_header_edit_global").click(function (e) {
    //     e.preventDefault();
    //     $("#at_edit_global").trigger("click");
    //   });
    // },
    pageCheckboxes: function () {
      $("#checkAll").change(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($(this).prop("checked") == true) {
          checkboxes.forEach(function (checkbox) {
            checkbox.checked = true;
          });
          document.getElementById("tes").style.display = "inline-block";
        } else {
          checkboxes.forEach(function (checkbox) {
            checkbox.checked = false;
          });
          document.getElementById("tes").style.display = "none";
        }
      });
    },
    pageCheckboxes_One: function () {
      $('[name="select_change"]').change(function (e) {
        e.preventDefault();
        var count = 0;
        checkbox.forEach(function (checkbox) {
          if (checkbox.checked) {
            count = count + 1;
          }
        });
        document.getElementById("tes").style.display = "none";
        if (count > 0) {
          document.getElementById("tes").style.display = "inline-block";
        }
      });
    },
    // INIT SCRIPT INSERT PAGE
    insertPage: function () {
      $("#title").keyup(function () {
        var value = $(this).val();
        $("#seo_title").val(value);
        $("#handle").val(value);
      });
    },
    // END SCRIPT INSERT PAGE
  
    // ADD PAGE
    addPage: function (data) {
      $("#at_create_page").click(function () {
        var data = $("#atf_add_page").serialize();
        $.ajax({
          type: "POST",
          url: "/admin/page",
          data: data,
          dataType: "json",
          success: function (response) {
            if (response == 1) {
              alert("true");
            } else {
              alert("false");
            }
          },
        });
      });
    },
  
    deleteItemsPages: function () {
      $("#delete_item_global").click(function (e) {
        e.preventDefault();
        var arr = [];
        $('input[name="select_change"]').each(function (e) {
          if ($(this).prop("checked") == true) {
            arr.push($(this).val());
          }
        });
        if (arr.length > 0) {
          arr = { result: arr };
        }
        AdminPlus.delete_page_ajax(arr);
      });
    },
    delete_page_ajax: function (arr) {
      $.ajax({
        url: "/Admin/Page/delete",
        data: arr,
        type: "POST",
        dataType: "json",
        success: function (json) {
          if (json) {
            if (json.length > 0) {
              $.each(json, function (index, value) {
                $(".at-remove-" + value).remove();
              });
            }
          }
        },
        beforeSend: function () {
          // $("#overlay").fadeIn();
        },
        error: function (xhr, status) {
          console.log("error");
        },
  
        complete: function (xhr, status) {
        },
      });
    },

    init: function () {
      this.saveCreate_editWidgets();
      this.saveEditGlobal();
      this.addPage();
      this.create_page_ajax();
      // this.saveEditBlog();
      this.pageCheckboxes();
      this.pageCheckboxes_One();
      this.deleteItemsPages();
      this.delete_page_ajax();
    },
  };