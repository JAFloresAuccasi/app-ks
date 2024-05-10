<?php
$atf_age = $get_data_B_optional_settings->button_optional_model->button_text_color;
$mobile_text = $get_data_customizations->text_customizations_model->heading_mobile_text_size;
$web_text = $get_data_customizations->text_customizations_model->heading_text_size;
$mobile_sub_text = $get_data_customizations->text_customizations_model->sub_heading_mobile_text_size;
$web_sub_text = $get_data_customizations->text_customizations_model->sub_heading_text_size;
?>
<style>
    input#birthmonth::placeholder {
        color: {{ $atf_age }};
    }

    input#birthday::placeholder {
        color: {{ $atf_age }};
    }

    input#birthyear::placeholder {
        color: {{ $atf_age }};
    }

    .mobile_text {
        font-size: {{ $mobile_text . 'px' }};
    }

    @media (min-width: 760px) {
        .test_plus {
            font-size: {{ $web_text . 'px' }};
        }
    }

    .mobile_sub_text {
        font-size: {{ $mobile_sub_text . 'px' }};
    }

    @media (min-width: 760px) {
        .sub_test_plus {
            font-size: {{ $web_sub_text . 'px' }};
        }
    }

    input#birthmonth::placeholder {
        color: {{ $atf_age }};
    }

    input#birthday::placeholder {
        color: {{ $atf_age }};
    }

    input#birthyear::placeholder {
        color: {{ $atf_age }};
    }
</style>